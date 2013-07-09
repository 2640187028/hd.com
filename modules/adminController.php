<?php
class adminController extends commonController{
    function __construct()
    {
        parent::__construct();
        define('BS_PATH','/public/admin');
        $this->CSS_PATH = BS_PATH.'/css/';
        $this->IMG_PATH = BS_PATH.'/images/';
        $this->JS_PATH = BS_PATH.'/js/';
    }

}