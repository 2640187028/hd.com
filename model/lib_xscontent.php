<?php
/**
 * 小说内容模型
 */
class lib_xscontent extends spModel

{

    public $pk = 'id';

    public $table = 'xscontent';

   	public $linker = array(

        array(

            'type' => 'hasone',

            'map' => 'xs_fj',

            'mapkey' => 'parent_id',

            'fclass' => 'lib_xslist',

            'fkey' => 'id',

            'enabled' => TRUE

        )

	);



}