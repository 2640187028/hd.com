<?php
/**
 * QQ群模型
 */
class lib_qqgroup extends spModel

{

    public $pk = 'qqgroup_id';

    public $table = 'qqgroup';

    public $linker = array(

        //与用户表的多对多关系设置  

       array(

            'type'=>'manytomany',

            'map'=>'ren',

            'midclass'=>'lib_mtoqqgroup',

            'mapkey'=>'qqgroup_id',

            'fclass'=>'lib_member',

            'fkey'=>'user_id',

            'enabled'=>TRUE

       )

    );

}