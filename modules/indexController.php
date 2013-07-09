<?php
class indexController extends commonController
{
    function __construct()
    {
        parent::__construct();
        $user_role = $_SESSION['user_info'][0]['mrole'];
        foreach($user_role as $role)
        {
            if($role['role_id'] == '2' || $role['role_id'] == '3' || $role['role_id'] == '6')
            {
                $this->is_daren = '1';
            }elseif($role['role_id'] == '9'){
                $this->is_qqadmin = '1';
            }
        }
    }
    //公告统计
    function ggtj()
    {
        $gg = array();
//        $ggtj = spClass('lib_ggtj');
//        $re_gg = $ggtj->findAll(array('user_id'=>$_SESSION['user_info'][0]['user_id'],'yidu'=>'1'));
//        $yd_dr = array();
//        $yd_qq = array();
//        foreach($re_gg as $yidu)
//        {
//            if($yidu['type'] == 'dr')
//            {
//                $yd_dr[] = $yidu['gg_id'];
//            }elseif($yidu['type'] == 'qq'){
//                $yd_qq[] = $yidu['gg_id'];
//            }
//        }
        foreach($_SESSION['subinfo'] as $subinfo)
        {
            foreach($subinfo['drgg'] as $drgg)
            {
//                if( ! in_array($drgg['id'],$yd_dr))
//                {
                    
                    $gg[] = $drgg;
                //}
            }       
        }
        $qqgroup = spClass('lib_mtoqqgroup');
        $qqgg = $qqgroup->spLinker()->findAll(array('user_id'=>$_SESSION['user_info'][0]['user_id']));
        foreach($qqgg as $qg)
        {
            foreach($qg['qqgg'] as $groupgg)
            {
//                if( ! in_array($groupgg['id'],$yd_qq))
//                {
                    $gg[] = $groupgg;
                //}
            }
        }
        //spAccess('w','gg_num',count($gg));
        usort($gg,'gg_sort');
        return $gg;
    }
    //发送唯一认证链接的邮箱
    function send_active_email($user_id,$username,$active_email,$email_title,$tpl,$type=0,$role='注册用户')
    {
        $this->username = $username;
        //生成唯一数;
        $salt = md5(substr(uniqid(rand()),-6));
        $args = array(
            'user_id'=>$user_id,
            'unique'=>$salt
        );
        //生成激活链接;
        $this->http = 'http://'.$_SERVER['HTTP_HOST'];
        if($type == 0 )
        {
            $this->salt_url = spUrl('basic','member_active',$args);            
        }else if($type == 1 ){
            $type = md5('findpwd');
            $args['type'] = $type;
            $this->salt_url = spUrl('basic','member_active',$args);
        }

        //将参数存入数据库
        $member_active = spClass('lib_member_active');
        $expire_time = time()+3600;
        $condition = array(
            'user_id' => $user_id,
            'md6' => $salt,
            'expire_time'=>$expire_time
            );
        $member_active->create($condition);
        $this->e_time = date('Y-m-d H:i:s',$expire_time);
        $email_body = $this->display($tpl,FALSE);
        $result = send_stmp_email($active_email,$role,$email_title,$email_body);
        if($result)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}