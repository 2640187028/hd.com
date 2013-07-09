<?php
class author extends indexController{
    function __construct()
    {
        parent::__construct();
        if(is_null($_SESSION['logined_userid']))
        {
            $this->error('请先登陆',spUrl('basic','index')); 
        }else{
            $is_author = FALSE;
            foreach($_SESSION['user_info'][0]['mrole'] as $role)
            {
                if($role['role_id'] == '6' || $role['role_id'] == '7')
                {
                    $is_author = $_SESSION['is_author'] = TRUE;
                }
            }
            if( ! $is_author)
            {
                $this->error('你不是合作伙伴或者小编',spUrl('basic','index'));
            }
        }
    }
    function bind()
    {
        $xsinfo = spClass('lib_xs');
        $author = spClass('lib_mtorole');
        $this->all_author = $a =$author->spLinker()->findAll(array('role_id'=>'6'));
        $this->xsinfo = $xsinfo->spLinker()->findAll(array('user_id'=>$_SESSION['logined_userid'],'public'=>'0'));
    }
    function bind_do()
    {
        $args = $this->spArgs();
        $xsinfo = spClass('lib_xs');
        $condition = array(
            'user_id' => $args['user_id']
        );
        $xsinfo->update(array('xs_id'=>$args['xs_id']),$condition);
        $this->success('绑定成功',spUrl('author','myworks'));
    }
    function manage()
    {
        $xs_id = $this->spArgs('xs_id');
        $xsinfo = spClass('lib_xs');
        $info = $xsinfo->find(array('xs_id'=>$xs_id));
        if($info)
        {
            $xslist = spClass('lib_xslist');
            $result = $xslist->findAll(array('xs_id'=>$xs_id));
            $parent = array();
            foreach($result as $re)
            {
                if($re['parent_id'] == 0)
                {
                    $parent[] = array($re['id'],$re['list_name']);
                }
            }
            $_SESSION['xs_id'] = $xs_id;//将用户点击的小说的id记录入session
            $_SESSION['xs_name'] = $info['xs_name'];
            $this->xs_id = $xs_id;
            $this->xs_name = $info['xs_name'];
            $this->xs_js = $info['xs_jieshao'];
            $this->parent = $parent;
            $this->result = $result; 
           // dump($this->result);          
        }else{
            error_inframes('不存在的作品',spUrl('center','index'));
        }
          //调用用户留言以及作者评论
      $comment = spClass('lib_comments');
      $comments =$comment->spLinker()->findAll(array('xs_id'=>$xs_id));
      $this->comments=$comments;
      
        //作者回复留言
 
        //dump($this->result);
      
      //调用QQ精选留言
      $qqcomment = spClass('lib_qqcomments');
      $qqcomments= $qqcomment->spLinker()->findAll(array('xs_id'=>$xs_id),"qqc_posttime DESC");
      $this->qqcomments=$qqcomments;
    }
    function huifu(){
        $huifudata=$this->spArgs();
       $huifudata['user_id'] =$_SESSION['logined_userid'];
       $comment = spClass('lib_comments');
       $post_time= date("Y-m-d H:i:s");
        $newhf=array(
            'xs_id'=>$huifudata['xs_id'],
            'user_id'=>$huifudata['user_id'],
            'c_content'=>$huifudata['huifu'],
            'post_time'=>$post_time,
            'where_from'=>'本网站',
            'reply_id'=>$huifudata['c_id'],
        );
        $comment->create($newhf);
        $zt=array('c_id'=>$huifudata['c_id']);
        $ztrow=array(
            'view'=> 1,
        );
        $comment->update($zt, $ztrow);
        echo ('success');
    }
    function addfj()
    {
        $args = $this->spArgs();
        if($args['fj_name'] == '')
        {
            $this->error('分卷名不得为空',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id'])));
        }else{
            $xs_list = spClass('lib_xslist');
            $condition = array(
                'list_name' => $args['fj_name'],
                'parent_id' => 0,
                'xs_id' => $_SESSION['xs_id']
            );
            $re = $xs_list->create($condition);
            if($re)
            {
                $this->success('添加成功',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id'])));
            }
        }       
    }
    function addarticle()
    {
        $xs_list = spClass('lib_xslist');
        $xs_fj = $xs_list->findAll(array('xs_id'=>$_SESSION['xs_id'],'parent_id'=>0));
        $tyxslist = spClass('lib_tyxslist');
        $ty_list = $tyxslist->find(array('user_id'=>$_SESSION['logined_userid'],'xs_id'=>$_SESSION['xs_id']));
        $this->ty_list = $ty_list;
        $this->xs_fj = $xs_fj;
        $this->xs_id = $_SESSION['xs_id'];
    }
    function addarticle_do()
    {
        $args = $this->spArgs();
        $xs_list = spClass('lib_xslist');
        $list_id = $xs_list->findAll(array('parent_id'=>0),null,'id,list_name');
        $yes = '';
        foreach($list_id as $list)
        {
            if($list['id'] == $args['type'])
            {   
                
                $yes = TRUE;
            }
        }
        if($yes === TRUE)
        {
            if(trim($args['title']) == '')
            {
                $this->error('章节标题不得为空',spUrl('author','addarticle',array('xs_id'=>$_SESSION['xs_id'])));
            }elseif(trim($args['content']) == ''){
                $this->error('章节内容不得为空',spUrl('author','addarticle',array('xs_id'=>$_SESSION['xs_id'])));
            }else{
                if($args['tianya_type'] == '1')
                {
                   $ty_art_fj = $xs_list->find(array('id'=>$args['type']),null,'list_name');
                   $_SESSION['ty_art_fj'] = $ty_art_fj['list_name'];
                   $_SESSION['ty_art_title'] = $args['title'];
                   $_SESSION['ty_art_type'] = $args['type'];
                   $_SESSION['ty_art_content'] = $args['content'];
                   $_SESSION['ty_item'] = $args['ty_item'];
                   $_SESSION['ty_articleid'] = $args['ty_articleid'];
                   $_SESSION['add_newart'] = 'yes';
                   $this->jump(spUrl('tianya','bind_ty'));
                }else{
                    $condition = array(
                        'list_name' => $args['title'],
                        'parent_id' => $args['type'],
                        'xs_id' => $args['xs_id']
                    );
                    $now_date = date('Y-m-d',time());
                    $result = $xs_list->create($condition,null,'content_id');
                    $condition2 = array(
                        'parent_id' => $args['type'],
                        'title' => $args['title'],
                        'content' => $args['content'],
                        'content_id' => $result,
                        'author' => $_SESSION['user_info'][0]['member_nickname'],
                        'update_time' => $now_date,
                    );
                    $xs_content = spClass('lib_xscontent');
                    $re = $xs_content->create($condition2);
                    if($re)
                    {
                        $this->success('添加成功',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id'])));
                    }else{
                        $this->error('添加失败',spUrl('author','addarticle',array('xs_id'=>$_SESSION['xs_id'])));
                    }
                }                
            }
        }else{
            $this->error('出错了!!',spUrl('author','addarticle',array('xs_id'=>$_SESSION['xs_id'])));
        }
    }
    function addnew()
    {
        $identify = array();
        foreach($_SESSION['user_info'][0]['mrole'] as $role)
        {
            if($role['role_id'] == '6')
            {
                $identify[] = 'author';
            } 
            if($role['role_id'] == '7')
            {
                $identify[] = 'xiaobian';
            }
        }
        $this->identify = $identify;
        $this->uid = $_SESSION['logined_userid'];
    }
    function addnew_do()
    {
        $args = $this->spArgs();
        $xs = spClass('lib_xs');
        $verifier = $xs->spVerifier($args);
        if($verifier)
        {
            $this->error('新书名称，内容简介不得为空或者书名已存在',spUrl('author','addnew'));
        }else{
            $re = upload_img($_FILES['book_cover']);
            if($re === TRUE)
            {
                $xs_info = spClass('lib_xs'); 
                $re1 = $xs_info->find(array('xs_name'=>$args['book_name']));               
                if($re1)
                {
                    $this->error('书名已存在了',spUrl('author','addnew'));
                }else{
                    if($args['public_by'] == 'author')
                    {
                        $public = '1';
                    }elseif($args['public_by'] == 'xiaobian'){
                        $public = '0';
                    }
                    $now_time = date('Y-m-d',time());
                    $condition = array(
                        'xs_name' => $args['book_name'],
                        'xs_type' => $args['type'],
                        'xs_img' => $_SESSION['img_save_path'],
                        'xs_jieshao' => $args['intro'],
                        'user_id' => $_SESSION['logined_userid'],
                        'xs_time' => $now_time,
                        'xs_click' => '0',
                        'statu'=>'0',
                        'public'=>$public
                        );
                    if($args['tianya_type'] != '0')
                    {
                         $_SESSION['tianya_title'] = $args['book_name'];
                         $_SESSION['tianya_intro'] = $args['intro'];
                         $_SESSION['tianya_item'] = $args['tianya_type'];
                         $_SESSION['condition'] = $condition;
                         $_SESSION['add_newbook'] = 'yes';
                         $this->jump(spUrl('tianya','bind_ty'));
                     }else{
                        $re2 = $xs_info->create($condition);            
                        if($re2)
                        {
                            $this->success('发表成功',spUrl('author','myworks'));
                        }else{
                            $this->error('出错了',spUrl('author','addnew'));
                        }
                    }
                }
            }else{
                $this->error($re,spUrl('author','addnew'));
            }
        }
    }
    function fj_edit()
    {
        $args = $this->spArgs();
        $xs_list = spClass('lib_xslist');
        $condition = array(
            'id' => $args['fj_id'],
            'parent_id' => 0,
            'xs_id' => $args['xs_id']
        );
        $re = $xs_list->find($condition,null);
        if($re)
        {
            $_SESSION['fj_id'] = $re['id'];
            echo $re['list_name'];
        }else{
            echo '出错了!!';
        }
    }
    function fj_edit_do()
    {
        $args = $this->spArgs();
        if($args['list_name'] == '')
        {
            $this->error('分卷名不得为空',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id'])));
        }else{
            $xs_list = spClass('lib_xslist');
            $re = $xs_list->update(array('id'=>$_SESSION['fj_id']),array('list_name'=>$args['list_name']));
            if($re)
            {
               unset($_SESSION['fj_id']);
               $this->success('修改成功',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id']))); 
            }
        }
    }
    function fj_del()
    {
        $args = $this->spArgs();
        $xs_list = spClass('lib_xslist');
        $xs_list->find(array('id'=>$args['fj_id']));
        if($xs_list)
        {
            $xs_list->delete(array('id'=>$args['fj_id']));
            $xs_list->delete(array('parent_id'=>$args['fj_id']));
            $xs_content = spClass('lib_xscontent');
            $xs_content->delete(array('parent_id'=>$args['fj_id']));
            echo 'yes';
        }else{
           $this->error('分卷名不存在',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id']))); 
        }
    }
    function art_edit()
    {
        $args = $this->spArgs('content_id');
        $xs_content = spClass('lib_xscontent');
        $re = $xs_content->find(array('content_id'=>$args));
        $this->result = $re;
        $this->xs_id = $_SESSION['xs_id'];
    }
    function art_edit_do()
    {
        $args = $this->spArgs();
        $xs_content = spClass('lib_xscontent');
        $re = $xs_content->find(array('content_id'=>$args['content_id'],'parent_id'=>$args['parent_id']));
        if($re)
        {
            $xs_list = spClass('lib_xslist');
            $xs_list->update(array('id'=>$args['content_id']),array('list_name'=>$args['title']));
            $value = array(
                'title'=>$args['title'],
                'content'=>$args['content']
            );
            $xs_content->update(array('content_id'=>$args['content_id']),$value);
            $this->error('修改成功',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id'])));
        }else{
            $this->error('文章不存在',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id']))); 
        }
    }
    function art_del()
    {
        $args = $this->spArgs();
        $xs_content = spClass('lib_xscontent');
        $re = $xs_content->find(array('content_id'=>$args['content_id']));
        if($re)
        {
            $xs_list = spClass('lib_xslist');
            $xs_list->delete(array('id'=>$args['content_id']));
            $xs_content->delete(array('content_id'=>$args['content_id']));
            echo 'yes';
        }else{
            $this->error('文章不存在',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id']))); 
        }
    }
    function myworks()
    {
        $xsinfo = spClass('lib_xs');
        $this->xsinfo = $xsinfo->spLinker()->findAll(array('user_id'=>$_SESSION['logined_userid']));
    }
    function del_book()
    {
        $args = $this->spArgs();
        $xs = spClass('lib_xs');
        $xslist = spClass('lib_xslist');
        $ty_xslist = spClass('lib_tyxslist');
        $ty_xslist->delete(array('xs_id'=>$args['xs_id']));
        $rev = $xslist->findAll(array('xs_id'=>$args['xs_id']));
        $xs_content = spClass('lib_xscontent');
        foreach($rev as $re)
        {
            $xs_content->delete(array('parent_id'=>$re['parent_id']));
        }
        $xs->linker[1]['enabled'] = FALSE;
        $xs->spLinker()->delete(array('xs_id'=>$args['xs_id']));
        echo 'yes';
    }
    function editjs()
    {
        $args = $this->spArgs();
        if(trim($args['intro']) == '')
        {
            $this->error('简介不得为空',spUrl('author','manage',array('xs_id'=>$args['xs_id'])));
        }elseif( ! preg_match("/[\x{4e00}-\x{9fa5}]/u",$args['intro'])){
            $this->error('简介不得为空',spUrl('author','manage',array('xs_id'=>$args['xs_id'])));
        }else{
            $xsinfo = spClass('lib_xs');
            $xsinfo->update(array('xs_id'=>$args['xs_id']),array('xs_jieshao'=>$args['intro']));
            $this->success('修改成功',spUrl('author','manage',array('xs_id'=>$args['xs_id'])));
        }
        
    }
    function change_fm()
    {
        $this->xsimg = $_SESSION['xsimg'];
    }
    function change_fm_do()
    {
        if($this->spArgs('path') !== '')
        {
            $re = upload_img($_FILES['pic_face'],'2');
            if($re)
            {
                $xs = spClass('lib_xs');
                $xs->update(array('xs_id'=>$_SESSION['xs_id']),array('xs_img'=>$_SESSION['img_save_path']));
                error_inframes('更换成功',spUrl('center','index'));
            }else{
                $this->error($re,spUrl('center','index'));
            }
        }else{
            $this->error('请先上传封面',spUrl('author','change_fm'));
        }
    } 
    function qqc_edit()
    {
        $args = $this->spArgs();
        $qq_c = spClass('lib_qqcomments');
        $this->xs_id = $_SESSION['xs_id'];
        $this->result = $qq_c->find(array('qqc_id'=>$args['qqc_id'])); 
    } 
    function qqc_edit_do()
    {
        $args = $this->spArgs();
        if(trim($args['qqc_content']) == '')
        {
            $this->error('精选内容不得为空',spUrl('author','qqc_edit',array('qqc_id'=>$args['qqc_id'])));
        }elseif( ! preg_match("/[\x{4e00}-\x{9fa5}]/u",$args['qqc_content'])){
            $this->error('精选内容不得为空',spUrl('author','qqc_edit',array('qqc_id'=>$args['qqc_id'])));
        }else{
            $qq_c = spClass('lib_qqcomments');
            $qq_c->update(array('qqc_id'=>$args['qqc_id']),array('qqc_content'=>$args['qqc_content']));
            $this->success('修改成功',spUrl('author','manage',array('xs_id'=>$_SESSION['xs_id'])));
        }
    }
    function qqc_del()
    {
        $args = $this->spArgs();
        $qq_c = spClass('lib_qqcomments');
        $qq_c->delete(array('qqc_id'=>$args['qqc_id']));
        echo 'yes';
    } 
    function sys_fabu()
    {
        $xs = spClass('lib_xs');
        $xs_list = spClass('lib_xslist');
        $res = $xs->findAll(array('user_id'=>0));
        foreach($res as $re)
        {
            $xs_fj[] = $xs_list->find(array('xs_id'=>$re['xs_id'],'parent_id'=>0));
        }
        $this->xs_fj = $xs_fj;
    }
    function sys_fabu_do()
    {
        $args = $this->spArgs();
        $xs_info = explode(',',$args['xs_info']);
        $xs_list = spClass('lib_xslist');
        $condition = array(
            'list_name' => $args['title'],
            'parent_id' => $xs_info[0],
            'xs_id' => $xs_info[1]
        );
         $now_date = date('Y-m-d',time());
         $result = $xs_list->create($condition,null,'content_id');
         $condition2 = array(
            'parent_id' => $xs_info[0],
            'title' => $args['title'],
            'content' => $args['content'],
            'content_id' => $result,
            'author' => '系统',
            'update_time' => $now_date,
         );
        $xs_content = spClass('lib_xscontent');
        $re = $xs_content->create($condition2);
    }
}