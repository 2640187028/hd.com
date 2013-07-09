<?php
/**
 * 会员到QQ群的中间表
 */
class lib_mtoqqgroup extends spModel

{

    public $pk = 'id';

    public $table = 'mtoqqgroup';

    public $linker = array(

       array(

            'type'=>'hasmany',

            'map'=>'qqgg',

            'mapkey'=>'qqgroup_id',

            'fclass'=>'lib_qqgg',

            'fkey'=>'qun_id',

            'enabled'=>TRUE

       ),

       array(

            'type'=>'hasmany',

            'map'=>'author_qun',

            'mapkey'=>'qqgroup_id',

            'fclass'=>'lib_qqgroup',

            'enabled'=>FALSE

       )

    );

}