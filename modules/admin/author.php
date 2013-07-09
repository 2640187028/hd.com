<?php
class author extends adminController{
    function __construct()
    {
        parent::__construct();
    }
    function bind()
    {
        $xsinfo = spClass('lib_xs');
        $author = spClass('lib_mtorole');
        $this->all_author = $a =$author->spLinker()->findAll(array('role_id'=>'6'));
        $this->xsinfo = $xsinfo->spLinker()->findAll(array('public'=>'0'));
    }
    function bind_do()
    {
        $args = $this->spArgs();
        $xsinfo = spClass('lib_xs');
        if($args['xs_id'] == '')
        {
           $this->error('作品不得为空',spUrl('author','bind'));
        }
        $condition = array(
            'user_id' => $args['user_id']
        );
        $xsinfo->update(array('xs_id'=>$args['xs_id']),$condition);
        error_inframes('绑定成功',spUrl('main','index'));
    }
}