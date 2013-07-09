<?php
class manger extends adminController
{
	function __construct()
	{
		parent::__construct();	
	}
	function index()
    {
        $lib_administor = spClass('lib_administor');
        $result = $lib_administor->spLinker()->findAll();
        $this->administor = $result;
    }	
    function addition()
    {
    		
    }
    function mrole()
    {
    		
    }
}