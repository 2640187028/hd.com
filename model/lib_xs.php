<?php
/**
 * 小说模型
 */
class lib_xs extends spModel
{
    public $pk = 'xs_id';
    public $table = 'xs';
    public $addrules = array(
        'type_exist' => array('lib_xs','type_exist'),
        'xs_exist' => array('lib_xs','xs_exist'),
        'u_bookname'=> array('lib_xs','u_bookname')
    );
    public $linker = array(
		array(
			'type' => 'hasmany',   
			'map' => 'xs_list',    
			'mapkey' => 'xs_id',
			'fclass' => 'lib_xslist', 
			'fkey' => 'xs_id',    
			'enabled' => TRUE     
		),
        array(
            'type' => 'hasone',   
			'map' => 'xs_author',    
			'mapkey' => 'user_id',
			'fclass' => 'lib_member', 
			'fkey' => 'user_id',    
			'enabled' => TRUE
        )
	);
    public $verifier = array(
        'rules'=>array(
            'type'=>array(
                'notnull'=>TRUE,
                'type_exist'=>TRUE
            ),
            'book_name'=>array(
                'notnull'=>TRUE,
                'u_bookname'=>TRUE
            ),
            'intro'=>array(
                'notnull'=>TRUE
            )
        )
    );
    //检查分类是否存在
    function type_exist($val)
    {
        if(is_numeric($val))
        {
            if($val == '5' || $val == '8')
            {
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
    function u_bookname($val)
    {
        $re = $this->find(array('xs_name'=>$val));
        if($re)
        {
            return FALSE;
        }else{
            return TRUE;
        }             
    }
}