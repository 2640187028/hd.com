<?php
/**
 * 天涯API类
 */
class tianya extends indexController
{
    private $pagesize = '20';
	function __construct()
	{
		parent::__construct();
        import('lib_tyoauth.php');
	}	
	//绑定天涯账号
    function bind_ty()
    {       
        $o = spClass('TianyaOAuth', array(TY_AKEY, TY_SKEY));
        $url = spUrl('tianya', 'ty_callback');
        $back_url = 'http://'.$_SERVER['HTTP_HOST'].$url;
        $keys = $o->getRequestToken();
        $aurl = $o->getAuthorizeURL($keys['oauth_token'],false,$back_url);
        $_SESSION['ty_keys'] = $keys;
        $this->jump($aurl);
    }
    //天涯API返回的调用
    function ty_callback()
    {
        $o = spClass('TianyaOAuth', array(TY_AKEY,TY_SKEY,$_SESSION['ty_keys']['oauth_token'],$_SESSION['ty_keys']['oauth_token_secret']));
        $last_key = $o->getAccessToken($_REQUEST['oauth_verifier']);
        $_SESSION['ty_lastkey'] = $last_key;
        if($_SESSION['add_newbook'] == 'yes')
        {
            $this->jump(spUrl('tianya', 'issuetoty'));
        }elseif($_SESSION['add_newart'] == 'yes'){
            $this->jump(spUrl('tianya', 'ty_xs_art'));
        }
    }
    //绑定天涯账号成功后的页面
    function view()
    { 
        $bk = array();
        for($i = 1;$i<3;$i++)
        {
            $url = 'http://open.tianya.cn/api/bbs/getuserpostlist.php';
            $param['itemtype'] = $i;
            $param['pagesize'] = $this->pagesize;
            $bk[] = ty_common($url,$param)->rows;
        }
        $this->bk1 = $bk[0];
        $this->bk2 = $bk[1];
        $this->bk3 = $bk[2];
        $last_bk1 = $param['pagesize']-1;
        $this->bk1pid = $bk[0][$last_bk1]->id;
        $url = 'http://open.tianya.cn/api/user/info.php';
        $this->data = ty_common($url);
    }
    function bk_page()
    {
        $args = $this->spArgs();
        $url = 'http://open.tianya.cn/api/bbs/getuserpostlist.php';
        $param['itemtype'] = $args['type'];
        $param['pagesize'] = $this->pagesize;
        $param['nextid']= $args['pageid'];
        $data = ty_common($url,$param)->rows;
        $str = "<tr class='bktitle'><td class='ty_title'>主版帖子</td><td class='ty_bk'>版块</td><td class='ty_time'>时间</td><td class='ty_hf'>续写帖子</td><td class='ty_ck'>查看贴子</td></tr>";
        foreach($data as $value)
        {
            $str .= "<tr class='tiezi'><td class='ty_title' title='$value->art_id'>$value->title</td><td class='ty_bk' title='$value->item'>$value->item_name</td><td class='ty_time'>$value->compose_time</td><td class='ty_hf'><a class='xx' href=''>点击续写</a></td><td class='ty_ck'><a class='ck' href=''>点击查看</a></td></tr>";
        }
        $last_bk1 = $param['pagesize'] - 1;
        $bk1pid = $data[$last_bk1]->id;
        $str .= "<tr><td colspan='5'><a id='bk1_next' href='' title='$bk1pid'>下一页</a></td></tr>"; 
        echo $str;     
    }
    //续写提交后的操作
    function view_do()
    {
/*        $args = $this->spArgs();
        if ($args['content'] == '') {
            $this->error('续写内容不得为空', spUrl('tianya', 'view'));
        } else {*/
            $url = 'http://open.tianya.cn/api/bbs/replypost.php';
            $param['item'] = $args['item'];
            $param['articleid'] = $args['art_id'];
            $param['content'] = '<pre>' . $_POST['content'] . '</pre>';
            $data = ty_common($url,$param);
            if(isset($data->error_msg)){
                $this->error($data->error_msg, spUrl('tianya', 'view'));
            }elseif(isset($data->msg)){
                $this->success('续写成功', spUrl('tianya', 'view'));
            }
        //}
    } 
    //发布新贴到天涯
    function addnew()
    {
    }
    function issuetoty()
    {
        $args = $this->spArgs();
/*        if ($args['title'] == '' || $args['content'] == '') {
            $this->error('标题或者内容不得为空',spUrl('tianya', 'addnew'));
        } else {*/
            unset($_SESSION['add_newbook']);
            $param['item'] = $_SESSION['tianya_item'];
            $param['title'] = $_SESSION['tianya_title'];
            $param['content'] = $_SESSION['tianya_intro']."<p>本书首发在http://www.huidazx.cn,欢迎读者前来!!</p>";
            $param['boriginal'] = true;
            $url = 'http://open.tianya.cn/api/bbs/addpost.php';
            $data = ty_common($url,$param);
            $xs_info = spClass('lib_xs'); 
            if(isset($data->error_msg)){
                $this->error('来自天涯的提示信息：'.$data->error_msg,spUrl('author','addnew'));
            }else{
                //创建目录进数据库
                $new_bookid = $data->id;
                $re2 = $xs_info->create($_SESSION['condition']); 
                $ty_xslist = spClass('lib_tyxslist');
                $con_list = array(
                    'item' => $_SESSION['tianya_item'],
                    'articleid' => $new_bookid,
                    'title' => $_SESSION['tianya_title'],
                    'user_id' => $_SESSION['logined_userid'],
                    'xs_id' => $re2
                );
                $re = $ty_xslist->create($con_list);  
                if($re)
                {
                    $this->success('发表成功',spUrl('author','myworks'));
                }else{
                    $this->error('出错了',spUrl('author','addnew'));
                }
                unset($_SESSION['condition']);
            }
        //}

    }
    //发表新章节到天涯
    function ty_xs_art()
    {
        unset($_SESSION['add_newart']);
        $content = "<p>分卷：{$_SESSION['ty_art_fj']}</p><p>章节：{$_SESSION['ty_art_title']}</p><br />".$_SESSION['ty_art_content'];
        $has_next = '';
        if(mb_strlen($_SESSION['ty_art_content']) > '5800')
        {
            if(mb_strlen($_SESSION['ty_art_content']) > '11111')
            {
                $this->error('字数大于6000，请分多个章节来发吧',spUrl('author','addarticle',array('xs_id'=>$_SESSION['xs_id'])));
            }else{
            $next_content = mb_substr($_SESSION['ty_art_content'],5800,mb_strlen($_SESSION['ty_art_content']),'utf-8');
            $prev_content = mb_substr($_SESSION['ty_art_content'],0,5800,'utf-8');
            $content = "<p>分卷：{$_SESSION['ty_art_fj']}</p><p>章节：{$_SESSION['ty_art_title']}</p><br />".$prev_content;
            $has_next = 'yes';
            }
        }
        $content = str_replace('\"','"',$content);
        $content = str_replace('src="','src="http://www.huidazx.com',$content);
        $url = 'http://open.tianya.cn/api/bbs/replypost.php';
        $param['item'] = $_SESSION['ty_item'];
        $param['articleid'] = $_SESSION['ty_articleid'];
        $param['content'] = $content;
        $data = ty_common($url,$param);
        if(isset($data->error_msg)) 
        {
           $this->error('来自天涯的提示信息：'.$data->error_msg,spUrl('author','addarticle',array('xs_id'=>$_SESSION['xs_id'])));
        }else{
           $xs_list = spClass('lib_xslist');
           $condition = array(
              'list_name' => $_SESSION['ty_art_title'],
              'parent_id' => $_SESSION['ty_art_type'],
              'xs_id' => $_SESSION['xs_id']
           );
            $now_date = date('Y-m-d',time());
            $result = $xs_list->create($condition,null,'content_id');
            $condition2 = array(
                'parent_id' => $_SESSION['ty_art_type'],
                'title' => $_SESSION['ty_art_title'],
                'content' => $_SESSION['ty_art_content'],
                'content_id' => $result,
                'author' => $_SESSION['user_info'][0]['member_nickname'],
                'update_time' => $now_date,
            );
             $xs_content = spClass('lib_xscontent');
             $re = $xs_content->create($condition2);
             if($re)
             { 
                if($has_next == 'yes')
                {
                    $next_content = str_replace('\"','"',$next_content);
                    $next_content = str_replace('src="','src="http://www.huidazx.com',$next_content);
                    echo "<script type='text/javascript'>alert('如果字数超过3000，需要等待较长时间,请耐心等待');</script>";
                    sleep(20);
                    $url = 'http://open.tianya.cn/api/bbs/replypost.php';
                    $param['item'] = $_SESSION['ty_list'][0];
                    $param['articleid'] = $_SESSION['ty_list'][1];
                    $param['content'] = $next_content;
                    $data = ty_common($url,$param);                    
                }
                $this->success('添加成功',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id'])));
             }else{
                $this->error('添加失败',spUrl('author','addarticle',array('xs_id'=>$_SESSION['xs_id'])));
             }
             unset($_SESSION['ty_art_fj']);
             unset($_SESSION['ty_art_title']);
             unset($_SESSION['ty_art_content']);
             unset($_SESSION['ty_art_type']);
             unset($_SESSION['ty_list']);
        }
            
    }
    function tz_view()
    {
        $args = $this->spArgs();
        $author_name = $args['author_name'];
        $url = 'http://open.tianya.cn/api/bbs/getarticlecontent.php';
        $param['item'] = $args['item'];
        $param['articleid'] = $args['art_id'];
        $param['pagenum'] = 1;
        $data = ty_common($url,$param);
        $re_str = '';
        foreach($data as $str)
        {
            if($str->author_name == $author_name)
            {    
                $leng = mb_strlen($str->content,'utf-8');
                $re_str .= mb_substr($str->content,0,$leng-14,'utf-8');
            }
        }
        $this->title = $args['title'];
        $this->content = $re_str;
    }
    
    function pinlun()
    {
        $url = 'http://open.tianya.cn/api/bbs/getarticlecontent.php';
        $param['item']= 'free';
        $param['articleid']= 3242059;
        $param['pagenum']= 1;
        $data = ty_common($url,$param);
        dump($data);
    }
	
	
}