<?php
/**
 * 会员到角色的中间表
 */
class lib_mtorole extends spModel

{

    public $pk = 'id';

    public $table = 'mtorole';

    public $linker = array(

        array(

            'type' => 'hasone',

 			'map' => 'user_detail',    

			'mapkey' => 'user_id', 

			'fclass' => 'lib_member', 

			'fkey' => 'user_id',

			'enabled' => true

        )

    );

}