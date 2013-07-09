<?php
class commonController extends spController{
    function __construct()
    {
        parent::__construct();
        /*天涯API账号*/
        define('TY_AKEY','8b0cd1094c95e94180c47caf4ab9655b05196e829');
        define('TY_SKEY','029da1f0886fd729adfd84dcbedf04c7');
    }
    //验证码
    function _vcode()
    {
        $vcode = spClass('spVerifyCode');
        $vcode->display();
    }
    //校验验证码
    function _vcode_check($verifycode)
    {
        $vcode = spClass('spVerifyCode'); 
        if ($vcode->verify($verifycode)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    //Ajax验证验证码
    function _vcode_ajax()
    {
        $verifycode = $this->spArgs('name');
        $vcode = spClass('spVerifyCode'); 
        if ($vcode->verify($verifycode)) {
            echo 'yes';
        }
    }
}