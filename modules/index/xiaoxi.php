<?php
/**
 * 消息类
 */
class xiaoxi extends indexController

{

	function __construct()

	{

		parent::__construct();

	}

    function index()

    {

        $this->gg = $this->ggtj();

        $ggwd = spClass('lib_ggwd');

        $ggwd->update(array('user_id'=>$_SESSION['logined_userid']),array('num'=>'0'));    

    }

    function tj()

    {

        $args = $this->spArgs();

        $ggtj = spClass('lib_ggtj');

        $condition = array(

            'user_id' => $_SESSION['user_info'][0]['user_id'],

            'type' => $args['type'],

            'gg_id' => $args['id'],

            'yidu' => '1'

        );

        $result = $ggtj->find($condition);

        if( ! $result){

            $re = $ggtj->create($condition);

            if($re)

            {

                $tmp = spAccess('r','gg_num');            

                spAccess('w','gg_num',$tmp-1);

                echo 'yes';

            }else{

                echo '出错了';

            }

        }else{

           echo '你已经标注过了!'; 

        }

    }

}

