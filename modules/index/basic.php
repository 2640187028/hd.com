<?php
class basic extends indexController
{
    function __construct()
	{
		parent::__construct();
	}
	function index(){
		if(!is_null($_COOKIE['hd_username']))
        {
            /*如果有记住密码，读取Cookie判断*/
            $user = $_COOKIE['hd_username'];
            $pwd = $_COOKIE['hd_password'];
            $member = spClass('lib_member');
            $condition = array(
                'user_id'=>$user,
                'member_pwd'=>$pwd
            ); 
            $result = $member->find($condition);
            if($result)
            {
                $_SESSION['logined_userid'] =  $user;
                $this->jump(spUrl('center','iframe'));
            }
        }else if( ! is_null($_SESSION['logined_userid'])){
            $this->jump(spUrl('center','iframe'));
        }

	}
    //用户注册
    function reg()
    {
        $member = spClass('lib_member');
        //设置注册数位
        $num_min = 5; //最小位
        $num_max = 7; //最大位
        $rand_num = create_randnum($num_min,$num_max);//成生随机数的函数
        $result = $member->find(array('user_id'=>$rand_num),null,'user_id');
        while($result != FALSE)
        {
            $rand_num = create_randnum($num_min,$num_max);
            $result = $member->find(array('user_id'=>$rand_num),null,'user_id');
        }
        $this->rand_num = $rand_num;
    }
    //注册提交
    function regadd(){
        $post_value = $this->spArgs();//接收传入的值
        $member = spClass('lib_member');
        $tip = $member->spVerifier($post_value);//全部进行验证
        if( ! $tip)//验证通过后才进行添加
        {
            if($post_value['member_tjid'] !== '')//如果有输入伯乐id则验证
            {
                if( ! preg_match('/^[0-9]{1,11}$/',$post_value['member_tjid']))
                {
                    $this->error('请输入正确的伯乐id',spUrl('basic','reg'));
                    exit();
                }else if($post_value['user_id'] == $post_value['member_tjid']){
                    $this->error('伯乐ID不能是自己的用户ID',spUrl('basic','reg'));
                    exit();
                }
            }
            $init_copper = '200';
            $now_time = time();//注册时间
            $arr_value = array(
                'user_id' => $post_value['user_id'],
                'member_nickname' => $post_value['member_nickname'],
                'member_pwd' => md5($post_value['member_pwd']),
                'member_email' => $post_value['member_email'],
                'member_regtime' => $now_time,
                'member_tjid' => $post_value['member_tjid'],
                'member_copper' => '200.00',
                'member_active'=> 0
            );            
            $result = $member->create($arr_value);//添加进数据库
            if( ! $result)
            {
                $this->error('添加失败',spUrl('basic','reg'));
            }else{
                //添加用户身份，默认为注册用户
                $mtorole = spClass('lib_mtorole');
                $condition = array('user_id'=>$post_value['user_id'],'role_id'=>1);
                $mtorole->create($condition);
                $subinfo = spClass('lib_subinfo');
                $subinit = array(
                    'user_id' => $post_value['user_id'],
                    'daren_id' => '123456789',
                    'source_id' => '5'
                );
                $subinfo->create($subinit);
                $_SESSION['user_info'] = $post_value;//保存注册信息，用于激活
                $this->jump(spUrl('basic','waitactive'));
            }
        }else{
            $this->error('添加失败',spUrl('basic','reg'));
        }           
    }
    //注册ajax验证
    function reg_ajax()
    {
        $auth_name = $this->spArgs('name');//通过ajax传入的表单名
        $auth_value = $this->spArgs('post_value');//通过ajax传入的对应的表单值
        $member = spClass('lib_member');
        if($auth_name == 'member_tjid')
        {
            $re = $member->find(array('user_id'=>$auth_value),null,'user_id');
            if($re)
            {
                echo 'yes';
            }else{
                echo '不存在的伯乐ID,请检查';
            }
        }else{
            $auth_array = array(
                $auth_name => $auth_value
                );
            $tip = $member->spVerifier($auth_array);
            $re_tip = $tip[$auth_name][0];
            if( ! $re_tip)
            {
                echo 'yes';   
            }else{
                echo $re_tip;
            }
        }

    }
    //等待激活
    function waitactive(){
        $user_id = $_SESSION['user_info']['user_id'];
        $member = spClass('lib_member');
        $m_stau = $member->find(array('user_id'=>$user_id),null,'member_active');
        if($user_id == NULL)
        {
            $this->error('找不到该页面',spUrl('basic','index'));
        }else if($m_stau['member_active'] == 0){
            $nickname = $_SESSION['user_info']['member_nickname'];
            $active_email = $_SESSION['user_info']['member_email'];
            $result = $this->send_active_email($user_id,$nickname,$active_email,'注册激活','send_email.html');
            if( ! $result)
            {
                $this->error('邮箱发送失败,正在重发',spUrl('basic','waitactive'));
                exit();
            }
            $this->active_email = $active_email;
            $this->display('basic_waitactive.html');
        }else{
            $this->error('你已经激活过了',spUrl('basic','index'));
        }                 
    }
    //重新发送
    function resend_active()
    {
        $user_id = $_SESSION['user_info']['user_id'];
        $member = spClass('lib_member');
        $m_stau = $member->find(array('user_id'=>$user_id),null,'member_active');
        if($m_stau == 1)
        {
            $this->error('你已经激活过了',spUrl('basic','index'));
        }else{
            $this->jump(spUrl('basic','waitactive'));
        }
    }
    //激活验证(包含注册激活及找回密码激活)
    function member_active()
    {
        $args = $this->spArgs();//接收URL传入的值
        if( is_numeric($args['user_id']) && preg_match('/^\w{32}$/',$args['unique']))
        {
            $member_active = spClass('lib_member_active');
            $now_time = time();
            $sql = "DELETE FROM wx_member_active WHERE expire_time < $now_time"; 
            $member_active->query($sql);
            $condition = array(
                'user_id' => $args['user_id'],
                'md6' => $args['unique']
            );
            //判断URL是否存在
            $result = $member_active->find($condition,null,'expire_time');
            if($result)
            {   
                //判断是来自找回密码的链接还是用户注册激活的URL
                $id_condition = array('user_id' => $args['user_id']);
                if($this->spArgs('type') == md5('findpwd'))
                {
                    $_SESSION['unique_findpwd'] = 1;
                    $member_active->delete($id_condition);//清除URL
                    $this->display('basic_findpwd_do.html');//发送给用户修改密码的界面
                }else{                                      
                    $member = spClass('lib_member');
                    $member->update(array('user_id'=>$args['user_id']),array('member_active'=>1));
                    $member_active->delete($id_condition);//清除URL
                    unset($_SESSION['user_info']);//清空注册时保存的信息
                    $this->jump(spUrl('basic','asuccess'));//跳转至注册成功页面
                } 
            }else{
                $this->error('找不到该页面',spUrl('basic','index'));
            }
        }else{
            $this->error('找不到该页面',spUrl('basic','index'));
        }
    }
    //登陆验证
    function login()
    {
       $login_val = $this->spArgs();            
        if ($this->_vcode_check($login_val['yzm']))
        {
            $member = spClass('lib_member');
            //选取登陆判断规则
            $member->verifier = $member->verifier_login;
            $tip = $member->spVerifier($login_val);
            //验证通过后才进行下一步            
            if( ! $tip)
            {
                $condition = '';
                $pwd = md5($login_val['member_pwd']);
                if(is_numeric($login_val['loginname']))
                {
                    $condition = array(
                        'user_id'=>$login_val['loginname'],
                        'member_pwd'=>$pwd
                    ); 
                }else{
                    $condition = array(
                        'member_email'=>$login_val['loginname'],
                        'member_pwd'=>$pwd
                    );
                }
                $result = $member->find($condition,null,'user_id');
                if($result)
                {    
                    if($login_val['auto_login'] == 1)
                    {
                        setcookie('hd_username',$result['user_id'],time()+3600*24*7);
                        setcookie('hd_password',$pwd,time()+3600*24*7);
                    }
                    echo 'yes';
                    $_SESSION['logined_userid'] = $result['user_id'];
                }else{
                    echo '用户名或者密码错误';
                }
            }else{
                echo $tip['loginname'][0];
            }           
        }else{
            echo '验证码错误';
        }
    }
    function sys_login()
    {
        
    }
    function sys_login_do()
    {
        $login_val = $this->spArgs();
        if($login_val['loginname'] == 0)
        {
           $member = spClass('lib_member');         
           $pwd = md5($login_val['member_pwd']);
           $condition = array(
                'user_id'=>$login_val['loginname'],
                'member_pwd' => $pwd
           );
           $result = $member->find($condition,null,'user_id');
           if($result)
           {    
                $_SESSION['logined_userid'] = $result['user_id'];
                $this->jump(spUrl('author','sys_fabu'));
           }        
        }
    }
    //更换注册邮箱发送
    function change_email()
    {
        $user_id = $_SESSION['user_info']['user_id'];
        $member = spClass('lib_member');
        $m_stau = $member->find(array('user_id'=>$user_id),null,'member_active');
        if($user_id == NULL)
        {
            $this->error('找不到该页面',spUrl('basic','index'));
        }else if($m_stau['member_active'] == 0){
            $new_email = $this->spArgs('new_email');
            if(preg_match('/^[A-Za-z0-9]+([._\-\+]*[A-Za-z0-9]+)*@([A-Za-z0-9-]+\.)+[A-Za-z0-9]+$/',$new_email))
            {
                $member = spClass('lib_member');
                $result = $member->find(array('member_email'=>$new_email),null,'user_id');
                if( ! $result)
                {
                    $condition = array('user_id'=>$user_id);
                    $member_active = spClass('lib_member_active');
                    $member_active->delete($condition);
                    $member->update($condition,array('member_email'=>$new_email));
                    $_SESSION['user_info']['member_email'] = $new_email;
                    echo 'yes';
                }else{
                    echo '邮箱已被注册';
                }
            }else{
                echo '邮箱格式不正确';
            }
        }else{
            $this->error('你已经激活过了',spUrl('basic','index'));
        } 
    }
    function asuccess(){}
    function findpwd()
    {
        if( ! is_null($this->spArgs('yzm')))
        {
            $result = $this->_vcode_check($this->spArgs('yzm'));
            if($result)
            {
                $user = $this->spArgs('user');
                $condition = '';
                if(is_numeric($user))
                {
                    $condition = array(
                        'user_id' => $user
                    );
                }else if(preg_match('/^[A-Za-z0-9]+([._\-\+]*[A-Za-z0-9]+)*@([A-Za-z0-9-]+\.)+[A-Za-z0-9]+$/',$user)){
                    $condition = array(
                        'member_email' =>$user
                    );
                }else{
                   $this->error('格式错误',spUrl('basic','findpwd')); 
                }
                $member = spClass('lib_member');
                $result = $member->find($condition,null,'user_id,member_nickname,member_email');
                if(! $result)
                {
                    $this->error('不存在的用户ID/邮箱',spUrl('basic','findpwd')); 
                }else{
                    $send_statu = $this->send_active_email($result['user_id'],$result['member_nickname'],$result['member_email'],'找回密码','email_findpwd.html',1);
                    if($send_statu)
                    {
                        $_SESSION['findpwd_user_id'] = $result['user_id'];
                        $this->success('邮件已发送成功，请注意查收',spUrl('basic','findpwd'));
                    }else{
                        $this->error('系统繁忙，邮件未发送',spUrl('basic','findpwd'));
                    }  
                }
            }else{
                $this->error('验证码错误',spUrl('basic','findpwd'));
            }
        }    
    }
    function findpwd_do()
    {
        if($_SESSION['unique_findpwd'] == 1)
        {
            $user_id = $_SESSION['findpwd_user_id'];
            $pwd = md5($this->spArgs('pwd'));
            $member = spClass('lib_member');
            $result = $member->update(array('user_id'=>$user_id),array('member_pwd'=>$pwd));
            if($result)
            {
                unset($_SESSION['unique_findpwd']);
                unset($_SESSION['findpwd_user_id']);
                $this->success('修改成功,请用新密码再次登陆',spUrl('basic','index'));
            }else{
                $this->error('发生错误，请重新输入',spUrl('basic','findpwd'));
            }
            
        }else{
            $this->error('不存在的页面',spUrl('basic','index'));
        }
    }
    function logout()
    {
        session_destroy();
        setcookie('hd_username','',time()-3600);
        setcookie('hd_password','',time()-3600);
        echo "<script type='text/javascript'>top.location.href = '".spUrl('basic','index')."'</script>";    
    }
}