<?php
/**
 * 用户类
 */
class member extends indexController

{

    function __construct()

	{

		parent::__construct();

	}
    //修改个人信息
    function change_info()

    {

        $args = $this->spArgs();

        if($args['nickname'] == '')

        {

            $this->error('用户昵称不得为空',spUrl('center','user_set'));

        }else{

            if(preg_match("/[^a-zA-Z\x{4e00}-\x{9fa5}]/u",$args['nickname']))

            {

                $this->error('昵称为中英文',spUrl('center','user_set')); 

            }elseif(mb_strlen($args['nickname']) < 2 || mb_strlen($args['nickname']) > 10){

                $this->error('长度在2-10位之间',spUrl('center','user_set'));

            }else{

                $sex = '';

                $old = '';

                $location = '';

                if($args['sex'] != '')

                {

                    $sex = $args['sex'];

                }

                if($args['old'] != '')

                {

                    if(is_numeric($args['old']))

                    {

                        $old = $args['old'];

                    }else{

                        $this->error('年龄为1-3位的整数',spUrl('center','user_set'));

                    }

                }

                if($args['location'] != '')

                {

                    if(preg_match("/[^a-zA-Z\x{4e00}-\x{9fa5}]/u",$args['location']))

                    {

                        $this->error('地址为中文、英文',spUrl('center','user_set')); 

                    }else{

                        $location = $args['location'];

                    }

                }

                $member = spClass('lib_member');

                $condition = array(

                    'member_sex' => $sex,

                    'member_age' => $old,

                    'member_location'=>$location

                );

                $member->update(array('user_id'=>$_SESSION['logined_userid']),$condition);

                $this->success('修改成功',spUrl('center','user_set'));

            }

        }

    }
    //修改密码
    function change_pwd()

    {

        $args = $this->spArgs();

        $member = spClass('lib_member');

        $old_pwd = md5($args['old_pwd']);

        $re = $member->find(array('user_id'=>$_SESSION['logined_userid'],'member_pwd'=>$old_pwd));

        if($re)

        {

            if($args['pwd'] !='')

            {

                if($args['pwd'] != $args['confirm_pwd'])

                {

                    $this->error('密码不一致',spUrl('center','user_set'));   

                }else{

                    $member->update(array('user_id'=>$_SESSION['logined_userid']),array('member_pwd'=>md5($args['pwd'])));

                    $this->success('修改成功',spUrl('center','user_set'));

                }

            }else{

                $this->error('新密码不得为空',spUrl('center','user_set'));

            }          

        }else{

            $this->error('原密码不正确',spUrl('center','user_set')); 

        }

    }
    //修改头像
    function change_face()

    {

        if($this->spArgs('path') !== '')

        {

            $re = upload_img($_FILES['pic_face'],'2');

            if($re)

            {

                $member = spClass('lib_member');

                $member->update(array('user_id'=>$_SESSION['logined_userid']),array('member_face'=>$_SESSION['img_save_path']));

                $this->success('更换成功',spUrl('center','user_set'));

            }else{

                $this->error($re,spUrl('center','user_set'));

            }

        }else{

            $this->error('请先上传头像',spUrl('center','user_set'));

        }

    }

}