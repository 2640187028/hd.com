<?php
/**
 * QQ群公告模型
 */
class lib_qqgroup_affiche extends spModel

{

    public $pk = 'aff_id';

    public $table = 'qqgroup_affiche';

    public $linker = array(

        //与用户表的多对多关系设置  

       array(

            'type'=>'manytomany',

            'map'=>'xx',

            'midclass'=>'lib_mtoxiaoxi',

            'mapkey'=>'aff_id',

            'fclass'=>'lib_member',

            'fkey'=>'user_id',

            'enabled'=>TRUE

        ) 

    );

}