<?php
/**
 * QQ聊天精选模型
 */
class lib_qqcomments extends spModel

{

    public $pk = 'qqc_id';

    public $table = 'qqcomments';

    public $linker = array(

        //与小说表的一对一关系设置

        array(

            'type' => 'hasone',   // 关联类型，这里是一对一关联

			'map' => 'xs',    // 关联的标识

			'mapkey' => 'xs_id', // 本表与对应表关联的字段名

			'fclass' => 'lib_xs', // 对应表的类名

			'fkey' => 'xs_id',    // 对应表中关联的字段名

			'enabled' => true     // 启用关

        )

    );

}