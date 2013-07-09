<?php
/**
 * 会员模型
 */
class lib_member extends spModel

{

    public $pk = 'member_id';

    public $table = 'member';

    public $linker = array(

    //与角色表的多对多关系设置

        array(

            'type'=>'manytomany',

            'map'=>'mrole',

            'midclass'=>'lib_mtorole',

            'mapkey'=>'user_id',

            'fclass'=>'lib_mrole',

            'fkey'=>'role_id',

            'enabled'=>TRUE

        ),

      //与QQ群表的多对多关系设置  

       array(

            'type'=>'manytomany',

            'map'=>'qun',

            'midclass'=>'lib_mtoqqgroup',

            'mapkey'=>'user_id',

            'fclass'=>'lib_qqgroup',

            'fkey'=>'qqgroup_id',

            'enabled'=>TRUE

        ),

        

        //与群公告的多对多关系设置  

       array(

            'type'=>'manytomany',

            'map'=>'xx',

            'midclass'=>'lib_mtoxiaoxi',

            'mapkey'=>'user_id',

            'fclass'=>'lib_qqgroup_affiche',

            'fkey'=>'aff_id',

            'enabled'=>TRUE

        ) 

        

    );

    public $addrules = array(

        'is_int' => array('lib_member','check_isint'),

        'u_userid' => array('lib_member','u_userid'),

        'is_nickname' => array('lib_member','check_nickname'),

        'is_pwd'=>array('lib_member','check_pwd'),

        'u_email'=>array('lib_member','u_email'),

        'check_float'=>array('lib_member','check_float'),

        //自定义登陆用户名判断

        'check_loginname'=>array('lib_member','check_loginname') 

    );

    //前台注册验证规则

    public $verifier = array(

        'rules'=>array(

            'user_id'=>array(

                'notnull'=>TRUE,

                'minlength'=>5,

                'maxlength'=>11,

                'is_int'=>TRUE,

                'u_userid'=>TRUE

            ),

            'member_nickname'=>array(

                'notnull'=>TRUE,

                'minlength'=>2,

                'maxlength'=>10,

                'is_nickname'=>TRUE,

            ),

            'member_pwd'=>array(

                'notnull'=>TRUE,

                'minlength'=>6,

                'maxlength'=>20,

                'is_pwd'=>TRUE

            ),            

            'member_email'=>array(

                'notnull'=>TRUE,

                'u_email'=>TRUE,

                'email'=>TRUE

            )

        ),

        'messages'=>array(

            'user_id'=>array(

                'notnull'=>'用户ID不得为空',

                'minlength'=>'用户ID不得小于5位',

                'maxlength'=>'用户ID不得大于11位',

                'is_int'=>'用户ID格式不对',

                'u_userid'=>'该用户ID已被注册'

            ),

            'member_nickname'=>array(

                'notnull'=>'昵称不得为空',

                'minlength'=>'昵称长度至少为2个中文或者英文',

                'maxlength'=>'昵称长度不得大于10个中文或者英文',

                'is_nickname'=>'昵称必须为中英文',

            ),

            'member_pwd'=>array(

                'notnull'=>'密码不得为空',

                'minlength'=>'密码不得少于6位',

                'maxlength'=>'密码不得大于20位',

                'is_pwd'=>'密码格式错误'

            ),

            'member_email'=>array(

                'notnull'=>'邮箱地址不得为空',

                'u_email'=>'邮箱已经被注册',

                'email'=>'邮箱格式错误'

            )

        )

    );

    //后台用户添加规则

    public $verifier_bgaddm = array(

        'rules'=>array(

            //后台添加用户的ID位数不限制

            'admin_userid'=>array(

                'notnull'=>TRUE,

                'maxlength'=>11,

                'is_int'=>TRUE,

                'u_userid'=>TRUE

            ),

            'member_nickname'=>array(

                'notnull'=>TRUE,

                'minlength'=>2,

                'maxlength'=>10,

                'is_nickname'=>TRUE,

                'u_nickname'=>TRUE

            ),

            'member_pwd'=>array(

                'notnull'=>TRUE,

                'minlength'=>6,

                'maxlength'=>20,

                'is_pwd'=>TRUE

            ),   

            'member_email'=>array(

                'notnull'=>TRUE,

                'u_email'=>TRUE,

                'email'=>TRUE

            ),

            'silver_num'=>array(

                'notnull'=>TRUE,

                'check_float'=>TRUE

            ),

            'copper_num'=>array(

                'notnull'=>TRUE,

                'check_float'=>TRUE

            )

        ),

        'messages'=>array(

            'admin_userid'=>array(

                'notnull'=>'用户ID不得为空',

                'maxlength'=>'用户ID不得大于11位',

                'is_int'=>'必须是整数',

                'u_userid'=>'该用户ID已被注册'

            ),

            'member_nickname'=>array(

                'notnull'=>'昵称不得为空',

                'minlength'=>'昵称长度至少为2个中文或者英文',

                'maxlength'=>'昵称长度不得大于10个中文或者英文',

                'is_nickname'=>'昵称必须为中英文',

                'u_nickname'=>'该昵称已被注册'

            ),

            'member_pwd'=>array(

                'notnull'=>'密码不得为空',

                'minlength'=>'密码不得少于6位',

                'maxlength'=>'密码不得大于20位',

                'is_pwd'=>'密码格式错误'

            ),

            

            'member_email'=>array(

                'notnull'=>'邮箱地址不得为空',

                'u_email'=>'邮箱已经被注册',

                'email'=>'邮箱格式错误'

            ),

            'silver_num'=>array(

                'notnull'=>'银币数量不得为空',

                'check_float'=>'银币格式不对'

            ),

            'copper_num'=>array(

                'notnull'=>'铜币数量不得为空',

                'check_float'=>'铜币格式不对'

            )

        )

    );

    // 这是登录的验证

	public $verifier_login = array(

		"rules" => array( 

			'loginname' => array( 

				'notnull' => TRUE,

                'check_loginname'=>TRUE

			),

			'member_pwd' => array( 

				'notnull' => TRUE, 

                'is_pwd'=>TRUE

			)

		),

		"messages" => array( 

			'loginname' => array(  

				'notnull' => "用户名不能为空", 

				'check_loginname'=>'用户名格式错误'

			),

			'member_pwd' => array(  

				'notnull' => "密码不能为空", 

                'is_pwd'=>'密码格式错误'

			)

		)

	);

    //检查是否是可注册ID

    function check_isint($val)

    {

        if(is_numeric($val))

        {

            if(preg_match("/^[0]+/",$val))

            {

                return FALSE;

            }else{

                if(preg_match("/^[^0]{1}[0]{2,10}$/",$val))

                {

                    return FALSE;

                }else{

                    return TRUE;

                }

            }

        }else{

            return FALSE;

        }

    }

    //检查是否货币格式

    function check_float($val)

    {

    //$val[0]判断输入的货币值的第一位

        if($val == '0.00')

        {

            return TRUE;

        }else if($val[0] == '0'){

            return FALSE;

        }else if(preg_match("/^([0-9]{1,8})[.][0-9]{2}$/",$val)){

            return TRUE;

        }else{

            return FALSE;

        }

    }

    function check_loginname($val)

    {

        if(is_numeric($val))

        {

            return TRUE;

        }else if(preg_match('/^[A-Za-z0-9]+([._\-\+]*[A-Za-z0-9]+)*@([A-Za-z0-9-]+\.)+[A-Za-z0-9]+$/', $val)){

            return TRUE;

        }else{

            return FALSE;

        }

    }

    //检查是否是中英文

    function check_nickname($val)

    {

        if(preg_match("/[^a-zA-Z1-9\x{4e00}-\x{9fa5}]/u",$val))

        {

            return FALSE; 

        }else{

            return TRUE;

        }

    }

    //检查密码的格式

    function check_pwd($val)

    {

        if(preg_match("/[^a-zA-Z0-9_~!@#\$%\^&\*()\+]/",$val))

        {

            return FALSE; 

        }else{

            return TRUE;   

        }

    }

    //检查用户ID的唯一性

    function u_userid($val)

    {

        $condition = array('user_id'=>$val);

        $result = $this->find($condition,null,'member_id');

        if($result)

        {

           return FALSE;    

        }else{

           return TRUE;

        }

    }

    //检查邮箱的唯一性

    function u_email($val)

    {

        $condition = array('member_email'=>$val);

        $result = $this->find($condition,null,'member_id');

        if($result)

        {

           return FALSE;    

        }else{

           return TRUE;

        }

    }

    

    



}