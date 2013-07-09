<?php
/**
 * QQȺģ��
 */
class lib_qqgroup extends spModel

{

    public $pk = 'qqgroup_id';

    public $table = 'qqgroup';

    public $linker = array(

        //���û���Ķ�Զ��ϵ����  

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