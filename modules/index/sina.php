<?php
class sina extends indexController
{
    function __construct()
    {
        parent::__construct();
        define("WB_AKEY", ''); //KEY
        define("WB_SKEY", ''); //微博skey
        define("WB_CALLBACK_URL", 'http://' . $_SERVER['HTTP_HOST'] . spUrl('sina',
            'back_fun'));
    }
    function index()
    {
        $o = new SaeTOAuthV2(WB_AKEY, WB_SKEY);
        $code_url = $o->getAuthorizeURL(WB_CALLBACK_URL);
        $this->code_url = $code_url;
    }
    function back_fun()
    {
        $o = new SaeTOAuthV2(WB_AKEY, WB_SKEY);
        $keys = array();
        $keys['code'] = $_REQUEST['code'];
        $keys['redirect_uri'] = WB_CALLBACK_URL;
        $token = $o->getAccessToken('code', $keys);
        if ($token) {
            setcookie('weibojs_' . $o->client_id, http_build_query($token));
        }
    }
    function caiji()
    {
        dump('APPkey已过期');
        $new_bookid = $data->id;
        $re2 = $xs_info->create($_SESSION['condition']);
        $ty_xslist = spClass('lib_tyxslist');
        $con_list = array(
            'item' => $_SESSION['tianya_item'],
            'articleid' => $new_bookid,
            'title' => $_SESSION['tianya_title'],
            'user_id' => $_SESSION['logined_userid'],
            'xs_id' => $re2);
        $re = $ty_xslist->create($con_list);
        if ($re) {
            $this->success('发表成功', spUrl('author', 'myworks'));
        } else {
            $this->error('出错了', spUrl('author', 'addnew'));
        }
        unset($_SESSION['condition']);
    }
    function timing_cj()
    {
    	 dump('APPkey已过期');
        while ($next_content) {
            if ($has_next == 'yes') {
                $next_content = str_replace('\"', '"', $next_content);
                $next_content = str_replace('src="', 'src="http://www.huidazx.com', $next_content);
                echo "<script type='text/javascript'>alert('如果字数超过3000，需要等待较长时间,请耐心等待');</script>";
                $url = 'http://open.tianya.cn/api/bbs/replypost.php';
                $param['item'] = $_SESSION['ty_list'][0];
                $param['articleid'] = $_SESSION['ty_list'][1];
                $param['content'] = $next_content;
                $data = ty_common($url, $param);
            }
        }
        do (true);
    }
}
