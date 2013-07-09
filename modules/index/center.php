<?php
class center extends indexController
{
	function __construct()
	{
		parent::__construct();
	}
    //框架集
    function index()
    {
        if(is_null($_SESSION['logined_userid']))
        {
            error_inframes('请先登陆',spUrl('basic','index')); 
        }else{
            $member = spClass('lib_member');
            $re = $member->find(array('user_id'=>$_SESSION['logined_userid']));
            $_SESSION['user_info'] = $re;
            if($re['member_active'] == '0')
            {
                unset($_SESSION['logined_userid']);
                error_confirm('请先激活邮箱，确定激活，取消返回',spUrl('basic','waitactive'),spUrl('basic','index'));
            }else{
                $condition = array('user_id'=>$_SESSION['logined_userid']);
                $subinfo = spClass('lib_subinfo');
                //用户订阅信息
                $_SESSION['subinfo'] = $subinfo->spLinker()->findAll($condition);
                //用户信息
                $_SESSION['user_info'] = $member->spLinker()->findAll($condition);
            }
        }

    }
    function iframe()
    {
        
    }
    //框架顶部
    function top()
    {
    	$this->uid = $_SESSION['logined_userid'];
    }
    //框架左侧
    function left()  
    {
        $this->uid=$_SESSION['logined_userid'];
        $this->user_info = $_SESSION['user_info'][0];
        $ggwd = spClass('lib_ggwd');
        $re = $ggwd->find(array('user_id'=>$_SESSION['logined_userid']));
        if( ! $re)
        {
            $ggwd->create(array('user_id'=>$_SESSION['logined_userid'],'num'=>'0'));
            $this->gg_num = 0;
        }else{
            $this->gg_num = $re['num'];
        }  
    }
    //框架默认主页
    function main()
    {
        $xsinfo = spClass('lib_xs');
        $this->xsinfo =$xsinfo->spLinker()->findAll(array('user_id'=>$_SESSION['subinfo'][0]['daren_id']));
        $wbhot = spDB('wx_wbhot');
        $this->wbhot = $wbhot->findAll();
    }
    //某人微博详细信息页
    function home()
    {
    }
    function wbhot()
    {
        $wbhot = spDB('wx_wbhot');
        $this->wbhot = $wbhot->find(array('xs_id'=>$this->spArgs('xs_id')));
    }
    //财务管理
    function finance()
    {
    }
    //群管理
    function qunmanage()
    {
    }
    function xslist()
    {
        $args = $this->spArgs();
        $xs_info = spClass('lib_xs');
        $info = $xs_info->find(array('xs_id'=>$args['xs_id']));//相应小说的列表
        $this->xsimg = $info['xs_img'];
        $_SESSION['xsimg'] = $info['xs_img'];
        if($info)
        {
            $xslist = spClass('lib_xslist');
            $result = $xslist->findAll(array('xs_id'=>$args['xs_id']));
            $parent = array();
            foreach($result as $re)
            {
                if($re['parent_id'] == 0)
                {
                    $parent[] = array($re['id'],$re['list_name']);
                }
            }
            $volunt = spClass('lib_prevol');
            $condition = array(
                'user_id' => $_SESSION['logined_userid'],
                'author_id' => $info['user_id'],
                'active' => '1'
            );
            $u_volunt = $volunt->find($condition);
            if($u_volunt)
            {
                $this->is_volunt = '1';
            }else{
                $this->is_volunt = '0';
            }
            $_SESSION['author_id'] = $info['user_id'];
            $_SESSION['xs_id'] = $info['xs_id'];
            $_SESSION['xs_name'] = $info['xs_name'];
            if($info['user_id'] == $_SESSION['logined_userid'])
            {
                $this->is_author = 'yes';
            }else{
                $this->is_author = 'no';
            }
            //$qq_qun = spClass('lib_mtoqqgroup');
            //$author_qun = $qq_qun->spLinker()->findAll(array('user_id'=>$info['user_id'],'is_boss'=>'1'));
            //$this->author_qun = $author_qun;
            $this->xs_id = $info['xs_id'];
            $this->xs_name = $info['xs_name'];
            $this->xs_js = $info['xs_jieshao'];
            $this->parent = $parent;
            $this->result = $result;           
        }else{
            $this->error('不存在的文章',spUrl('center','index'));
        }
        
        //调用用户留言以及作者评论
      $comment = spClass('lib_comments');
      $comments =$comment->spLinker()->findAll(array('xs_id'=>$args['xs_id']));
      $this->comments=$comments;

      //调用QQ精选留言
      $qqcomment = spClass('lib_qqcomments');
      $qqcomments= $qqcomment->spLinker()->findAll(array('xs_id'=>$args['xs_id']),"qqc_posttime DESC");
      $this->qqcomments=$qqcomments;
      
      
      //添加QQ精选
      $qqtjjxzs=array('user_id'=>$_SESSION['author_id']);
                $myqun = spClass('lib_member');
                $results = $myqun->spLinker()->find($qqtjjxzs);
		      $this->qun=$results['qun'];
      
    }
    function xslist_edit()
    {
        
    }
    function xscontent()
    {
        $args = $this->spArgs(); 
        $myid=$args['contentid'];
        $this->wzid =$args['contentid'];
        $this->xs_id = $_SESSION['xs_id'];
        $con = spClass('lib_xscontent');
        $list = spClass('lib_xslist');
        $this->xs_userid = $_SESSION['author_id'];
        $this->member_id = $_SESSION['logined_userid'];
        $this->content = $con->spLinker()->find(array('content_id'=>$args['contentid']));
        $nextcontent =$con->spLinker()->find("content_id >$myid",null,null,"0,1");
        $rev = $list->find(array('parent_id'=>$nextcontent['parent_id']));
        if($rev['xs_id'] == $_SESSION['xs_id'])
        {
            $this->nextcontent = $nextcontent;
        }else{
            $this->nextcontent = '';
        }
        $shangcontent =$con->spLinker() ->find("content_id <$myid"," content_id DESC  ",null,"0,1");                  
        $srev = $list->find(array('parent_id'=>$shangcontent['parent_id']));
        if($srev['xs_id'] == $_SESSION['xs_id'])
        {
            $this->shangcontent = $shangcontent;
        }else{
            $this->shangcontent = '';
        }
        $this->xs_name = $_SESSION['xs_name'];
    }
    
    function xsaddcomment(){
        $user_id=$_SESSION['logined_userid'];
        $datas=$this->spArgs();
        $post_time= date("Y-m-d H:i:s");
   
        $newdata=array(
            'xs_id'=>$datas['xs_id'],
            'user_id'=>$user_id,
            'c_content'=>$datas['c_content'],
            'post_time'=>$post_time,
            'where_from'=>'本网站',
        );
       $comment = spClass('lib_comments');
       if($comment->create($newdata)){
        
        $this->success('留言成功，请关注作者回音壁!',spUrl('center', 'xscontent',array('contentid'=>$datas['content_id'])));
       }
       
    }
    function viewdingyue()
    {
        $subinfo = spClass('lib_subinfo');
        $result = $subinfo->spLinker()->findAll(array('daren_id'=>$_SESSION['logined_userid']));  
        $author = $_SESSION['user_info']['0']['member_nickname'];
        $this->result = $result;
        $this->author = $author;
    }
    function user_set()
    {
        $result = $_SESSION['user_info']['0'];
        $this->result = $result;
    }
    function volunteer()
    {   
        $author = spClass('lib_mtorole');
        $result = $author->spLinker()->findAll(array('role_id'=>'6')); 
        $this->result = $result;
    }
    function volunteer_do()
    {
       $args = $this->spArgs();
       if($args['agree'] == '1')
       {
        foreach($_SESSION['user_info'][0]['mrole'] as $role)
        {
            if($role['role_id'] == '7')
            {
                $this->error('你已经是志愿者了',spUrl('center','volunteer')); 
            }
        }
        if($args['author_id'] == $_SESSION['logined_userid'])
        {
            $this->error('你不能成为自己的志愿者',spUrl('center','volunteer'));
        }
        $volunt = spClass('lib_prevol');
        $condition = array(
            'user_id' => $_SESSION['logined_userid'],
            'author_id' => $args['author_id'],
            'active' => '0'
        );
        $re = $volunt->create($condition);
        if($re)
        {
            error_inframes('请求已接收，请等待管理员审核！',spUrl('center','index'));  
        }else{
            error_inframes('出错了!',spUrl('center','index'));  
        }
       }else{
        error_inframes('出错了!',spUrl('center','index'));
       } 
    }
    function add_ltjx()
    {
        $args = $this->spArgs();
        if($args['qqc_qunid'] == '' || $args['qqc_content'] == '')
        {
            error_alert('QQ群号和精选内容不得为空');
        }elseif( ! is_numeric($args['qqc_qunid'])){
            error_alert('QQ群号为数字');
        }else{
            $qq_comment = spClass('lib_qqcomments');
            $now_date = date('Y-m-d H:i:s',time());
            $condition = array(
                'xs_id' => $args['xs_id'],
                'qqc_name' => "{$_SESSION['user_info'][0]['member_nickname']}({$_SESSION['logined_userid']})",
                'qqc_qunid' => $args['qqc_qunid'],
                'qqc_content' => $args['qqc_content'],
                'qqc_posttime' => $now_date
            );
            $re = $qq_comment->create($condition);
            if($re)
            {
                error_alert('添加成功');
            }else{
                error_alert('添加失败');
            }
        }
    }
    function announce_do()
    {
        $args = $this->spArgs();
        if($args['qq_announce'] == NULL && $args['dr_announce'] == NULL)
        {
            error_inframes('请先选择一个公告类型',spUrl('center','index'));
        }elseif(trim($args['content']) == ''){
            error_inframes('公告内容不得为空',spUrl('center','index'));
        }else{
            $now_time = time();
            $ggwd = spClass('lib_ggwd');
            if($args['qq_announce'] == 'qq')
            {
                $qun = $_SESSION['user_info'][0]['qun'];
                foreach($qun as $q)
                {
                    $condition1 = array(
                        'qun_id' => $q['qqgroup_id'],
                        'qq_num' => $q['qun_num'],
                        'qq_name' => $q['qqgroup_name'],
                        'posttime' => $now_time,
                        'content' => $args['content'],
                        'author' => $_SESSION['user_info'][0]['member_nickname'],
                    );
                    $qqgg = spClass('lib_qqgg');
                    $qqgg->create($condition1);
                    $qgroup = spClass('lib_mtoqqgroup');
                    $rev = $qgroup->findAll(array('qqgroup_id'=>$q['qqgroup_id']));
                    foreach($rev as $re)
                    {
                        $ggwd->incrField(array('user_id'=> $re['user_id']), 'num');
                    }
                    
                }

            }
            if($args['dr_announce'] == 'dr')
            {
                $condition2 = array(
                    'daren_id' => $_SESSION['user_info'][0]['user_id'],
                    'posttime' => $now_time,
                    'content' => $args['content'],
                    'author' => $_SESSION['user_info'][0]['member_nickname'],
                );
                $drgg = spClass('lib_drgg');
                $drgg->create($condition2);
                $subinfo = spClass('lib_subinfo');
                $rev = $subinfo->findAll(array('daren_id'=>$_SESSION['logined_userid']));
                foreach($rev as $re)
                {
                    $ggwd->incrField(array('user_id'=> $re['user_id']), 'num');
                }
            }
            error_inframes('添加成功',spUrl('center','index'));
        }
    }
    function content_search()
    {
        $args = $this->spArgs();
        $xs = spClass('lib_xs');
        $xs_content = spClass('lib_xscontent');
        $keyword = urldecode($this->spArgs('s_keyword'));
        $xs_info  = $xs->spLinker()->find(array('xs_id'=>$args['xs_id']));
        $all_link = array();
        foreach($xs_info['xs_list'] as $xs_list)
        {
            if($xs_list['parent_id'] != 0)
            {
                $condition = "content_id = '".$xs_list['id']."' AND content like".$xs_content->escape('%'.$keyword.'%');
                $re = $xs_content->find($condition);
                if($re['id'] != '')
                {
                    $all_link[] = $re;
                }
            }
        }
        $this->keywords = $args['s_keyword'];
        $this->xs_id = $xs_info['xs_id'];
        $this->xs_name = $xs_info['xs_name'];
        $this->xsimg = $xs_info['xs_img'];
        $this->all_link = $all_link;
    }
}
