<?php
/**
 * QQȺ����ģ��
 */
class lib_qqgroup_affiche extends spModel

{

    public $pk = 'aff_id';

    public $table = 'qqgroup_affiche';

    public $linker = array(

        //���û���Ķ�Զ��ϵ����  

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