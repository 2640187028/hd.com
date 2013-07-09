<?php
class main extends adminController
{
    function __construct()
    {
        parent::__construct();
    }
    //登陆
    function login()
    {
        if( ! is_null($_SESSION['username']))
        {
            $this->jump(spUrl('main','iframe'));
        }
    }
    //登陆验证
    function login_check()
    {
        $post_login = $this->spArgs();
        if ($this->_vcode_check($post_login['verifycode'])) {
            $condition = array('username' => $post_login['username'], 'pwd' => md5($post_login['password']));
            $lib_admin = spClass('lib_administor');
            $result = $lib_admin->spLinker()->find($condition);
            if ($result) {
                if ($result['active']) {
                    //登陆时间
                    $logintime = time();
                    //更新登陆时间及登陆IP
                    $row = array('lasttime' => $logintime, 'login_ip' => $_SERVER['REMOTE_ADDR']);
                    $lib_admin->update($condition, $row);
                    //acl类及SESSION设置
                    $spAcl = spClass('spAcl');
                    $_SESSION['username'] = $result['username'];
                    $_SESSION['identify'] = $result['role']['identify'];
                    //登陆管理员的权限身份
                    $authority = $result['role']['authority'];
                    $_SESSION['authority'] = $authority;
                    $spAcl->set($authority);
                    $this->jump(spUrl('main','iframe'));
                } else {
                    $this->error('你的账号被停用', spUrl('main', 'login'));
                }

            } else {
                $this->error('登陆名或者密码错误', spUrl('main', 'login'));
                
            }
        } else {
            $this->error('验证码错误', spUrl('main', 'login'));
        }

    }
    function index()
    {
    }
    function iframe()
    {
    }
    function top()
    {
        $this->username = $_SESSION['username'];
        $this->identify = $_SESSION['identify'];
    }
    function left()
    {
        $this->authority = $_SESSION['authority'];
    }
    function right()
    {
    }
    function statu()
    {
        $this->display('main_right.html');
    }
    //退出后台
    function logout()
    {
        spClass('spAcl')->set('');
        session_destroy();
        $this->jump('admin.php');
    }
    function test()
    {
        
    }
}
