<?php
/**
 * 评论模型
 */
class lib_comments extends spModel

{

    public $pk = 'c_id';

    public $table = 'comments';

    public $linker = array(

        //与小说表的一对一关系设置

        array(

            'type' => 'hasone',   // 关联类型，这里是一对一关联

			'map' => 'xs',    // 关联的标识

			'mapkey' => 'xs_id', // 本表与对应表关联的字段名

			'fclass' => 'lib_xs', // 对应表的类名

			'fkey' => 'xs_id',    // 对应表中关联的字段名

			'enabled' => true     // 启用关

        ),

         //与用户表的一对一关系设置

        array(

            'type' => 'hasone',   // 关联类型，这里是一对一关联

			'map' => 'user',    // 关联的标识

			'mapkey' => 'user_id', // 本表与对应表关联的字段名

			'fclass' => 'lib_member', // 对应表的类名

			'fkey' => 'user_id',    // 对应表中关联的字段名

			'enabled' => true     // 启用关

        ),

    );

}