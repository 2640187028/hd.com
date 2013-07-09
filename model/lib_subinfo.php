<?php
/**
 * 用户订阅信息模型
 */
class lib_subinfo extends spModel

{

    public $pk = 'sub_id';

    public $table = 'subinfo';

    public $linker = array(

        array(

            'type' => 'hasmany',

            'map' => 'source',

            'mapkey'=> 'source_id',

            'fclass' => 'lib_subsource',

            'fkey' => 's_id',

            'enabled' => TRUE

        ),

        array(

            'type'=>'hasone',

            'map' => 'user_info',

            'mapkey' => 'user_id',

            'fclass' => 'lib_member',

            'fkey' => 'user_id',

            'enabled' => TRUE

        ),

        array(

            'type'=>'hasmany',

            'map'=>'drgg',

            'mapkey'=>'daren_id',

            'fclass'=>'lib_drgg',

            'fkey'=>'daren_id',

            'enabled'=>TRUE

        )

    );

}