<?php
class member extends adminController
{
    function __construct()
    {
        parent::__construct();
    }
    function setting()
    {
        
    }
    function add()
    {
        //将所有的身份输出到界面
        $all_role = spClass('lib_mrole');
        $this->result = $all_role->findAll();
    }
    function add_do()
    {
        //接收传入的值
        $post_value = $this->spArgs();
        $member = spClass('lib_member');
        //全部进行验证
        $member->verifier = $member->verifier_bgaddm;
        $tip = $member->spVerifier($post_value); 
        //验证通过后才进行添加
        if( ! $tip)
        {
            $now_time = time();
            $arr_value = array(
                'user_id' => $post_value['admin_userid'],
                'member_nickname' => $post_value['member_nickname'],
                'member_pwd' => md5($post_value['member_pwd']),
                'member_email' => $post_value['member_email'],
                'member_gold' => '0.00',
                'member_silver' => $post_value['silver_num'],
                'member_copper' => $post_value['copper_num'],
                'member_regtime' => $now_time,
                'member_active' => $post_value['active']
            );
            $result = $member->create($arr_value);
            if( ! $result)
            {
                $this->error('添加失败');
                $this->jump(spUrl('member','add'));
            }else{
                $mtorole = spClass('lib_mtorole');
                $arr_role = $post_value['role'];
                //判断传入的角色的值，如果没有输入则自己添加为“注册用户”身份
                //之后根据管理员的选择添加用户的身份
                if(empty($arr_role))
                {
                    $arr_role[0] = 1;
                }
                if(count($arr_role) == 1)
                {
                    $mtorole->create(array(
                    'user_id'=>$post_value['admin_userid'],
                    'role_id'=>$arr_role[0])
                    );
                }else{
                    foreach($arr_role as $r)
                    {
                    $mtorole->create(array(
                        'user_id'=>$post_value['admin_userid'],
                        'role_id'=>$r)
                        ); 
                    }
                }
                $this->success('添加成功',spUrl('member','add'));
            }
        }else{
            $this->error('添加失败',spUrl('member','add'));
        }    
    }
    function add_ajax()
    {    
        //接收由JS传入的表单名及表单的值
        $auth_name = $this->spArgs('name');
        $auth_value = $this->spArgs('post_value');
        //进行单个验证
        $auth_array = array(
            $auth_name => $auth_value
        );
        $member = spClass('lib_member');
        $member->verifier = $member->verifier_bgaddm;
        $tip = $member->spVerifier($auth_array);
        $re_tip = $tip[$auth_name][0];
        //验证通过则返回成功字符，不通过则返回相应错误提示
        if( ! $re_tip)
        {
            echo 'yes';   
        }else{
            echo $re_tip;
        }
      
    }
    function mrole()
    {
        
    }
    function index()
    {
    }
}