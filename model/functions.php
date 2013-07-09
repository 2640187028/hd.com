<?php
//这里全局通用函数
//自定义弹出错误窗口
function error_alert($error_tip)
{
    echo "<script type='text/javascript'>alert('{$error_tip}');history.go(-1);</script>";
}
//自定义在框架集时的错误提示
function error_inframes($error_tip,$url)
{
    echo "<script type='text/javascript'>alert('{$error_tip}');window.top.location.href='{$url}';</script>";
}
//自定义确认窗口
function error_confirm($error_tip,$right_url,$cancel_url)
{
    echo "<script type='text/javascript'>
            if (confirm('{$error_tip}'))
            {
                window.top.location.href='{$right_url}';
            }else{
                window.top.location.href='{$cancel_url}';    
            }
          </script>";
}
//公告按时间排序
function gg_sort($a,$b)
{
    $a = $a['posttime'];
    $b = $b['posttime'];
    if ($a == $b) return 0;
    return ($a > $b) ? -1 : 1;
}
//发送邮件函数
function send_stmp_email($address, $address_name, $subject, $body, $is_html = true)
{
    $mail = spClass('phpmailer');
    $mail->IsSMTP(); // 通过SMTP发送邮箱
    $mail->CharSet = 'utf-8';
    $mail->Host = "smtp.126.com"; // SMTP的服务器地址
    $mail->SMTPAuth = true; //  开启SMTP验证
    $mail->Username = "huidazx@126.com"; // 用户名
    $mail->Password = "778291@wx"; // 密码
    $mail->From = "huidazx@126.com"; //发件人邮箱
    $mail->FromName = "汇达咨询"; //发件人名称
    $mail->AddAddress($address, $address_name); //收件人地址('地址'，‘收件人名’)
    $mail->IsHTML($is_html); //是否使用HTML格式
    $mail->Subject = $subject; //邮件标题
    $mail->Body = $body; //邮件内容
    //$mail->AddReplyTo("", "");//抄送
    //$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
    //$mail->AltBody = "附加信息"; //附加信息，可以省略
    if (!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}
//生成随机注册ID(最小位为5，最大位为9)
//可以自动升位
function create_randnum($min, $max)
{
    switch ($max) {
        case 5:
            $num_min = 10000;
            break;
        case 6:
            $num_min = 100000;
            break;
        case 7:
            $num_min = 1000000;
            break;
        case 8:
            $num_min = 10000000;
            break;
        case 9:
            $num_min = 100000000;
            break;
        case 10:
            $num_min = 1000000000;
            break;
        case 11:
            $num_min = 10000000000;
            break;
    }
    switch ($max) {
        case 7:
            $num_max = 9999999;
            break;
        case 8:
            $num_max = 99999999;
            break;
        case 9:
            $num_max = 999999999;
            break;
        case 10:
            $num_max = 9999999999;
            break;
        case 11:
            $num_max = 99999999999;
            break;
    }
    $num = rand($num_min, $num_max);
    if (preg_match("/^[^0]{1}[0]{2,10}$/", $num)) {
        create_randnum($num_min, $num_max);
    } else {
        return $num;
    }
}
//图片上传生成缩略图函数
function upload_img($img,$u_type='1')
{
    if($img['error'] == 4)
    {
        return '请上传图片';
        exit();
    }
    if(is_uploaded_file($img['tmp_name']))
    {
        $type = array('image/jpg','image/png','image/gif','image/jpeg','image/pjpeg','image/x-png');
        $upload_type = $img['type'];
        if(in_array($upload_type,$type))
        {
            if($img['size'] > 2000000)
            {
                return '上传的图片太大了';
            }else{
                if($img['error'] == 0)
                {
                    $tmp_path = $img['tmp_name'];
                   	$info = pathinfo($img['name']);
                    $ext = $info['extension'];
                    $new_name = date('YmdHis').'.'.$ext;
                    if($u_type == '1')
                    {
                       $new_path = 'upload/fm/'.$new_name; 
                    }elseif($u_type == '2'){
                       $new_path = 'upload/face/'.$new_name; 
                    }
                    if(move_uploaded_file($tmp_path,$new_path))
                    {
                        $image = spClass('Image');
                        $image->load($new_path);
                        if($u_type == '1')
                        {
                            $image->resizeTo('200','276');
                            $image->save($new_path);
                            $_SESSION['img_save_path'] = $new_path; 
                        }elseif($u_type == '2'){
                            $image->resizeTo('180','180');
                            $image->save($new_path);
                            $_SESSION['img_save_path'] = $new_path; 
                        } 
                        return TRUE;
                        
                    }else{
                        return '上传失败，请重新上传';
                    }
                }else{
                    return '上传失败，请重新上传';
                }
            }
        }else{
            return '请上传jpg,jpeg,png,gif类型的图片';
        } 
    }
}
/*天涯接口验证及公用函数
* 
*/
//天涯发送通用函数
function ty_common($url,$param = null,$method = 'post')
{
    $data = ty_dopost($url, TY_AKEY, TY_SKEY, $_SESSION['ty_lastkey']['oauth_token'],$_SESSION['ty_lastkey']['oauth_token_secret'], $param);
    return json_decode($data);
}
//发送GET请求
function ty_doget($url, $appkey, $appsecret, $oauth_token, $oauth_token_secret,$param = null)
{
    $param['timestamp'] = time();
    $param['appkey'] = $appkey;
    $param['tempkey'] = strtoupper(md5($param['timestamp'] . $appkey . $oauth_token .
        $oauth_token_secret . $appsecret));
    $param['oauth_token'] = $oauth_token;
    $param['oauth_token_secret'] = $oauth_token_secret;
    $addstr = http_build_query($param);
    $url .= '?' . $addstr;
    return ty_request($url, null, 'get');
}
//发送POST请求
function ty_dopost($url, $appkey, $appsecret, $oauth_token, $oauth_token_secret,$param = null)
{
    $param['timestamp'] = time();
    $param['appkey'] = $appkey;
    $param['tempkey'] = strtoupper(md5($param['timestamp'] . $appkey . $oauth_token .
        $oauth_token_secret . $appsecret));
    $param['oauth_token'] = $oauth_token;
    if ($param['media'] && realpath($param['media']))
        $param['media'] = '@' . realpath($param['media']);
    $param['oauth_token_secret'] = $oauth_token_secret;
    //var_dump($param);
    return ty_request($url, $param);

}
//发送GET/POST请求
function ty_request($url, $param = null, $method = 'post')
{
    if ($method == 'get') {
        $send_data .= http_build_query($param);
        if (eregi('\?', $url)) {
            $url .= '&' . $send_data;
        } else {
            $url .= '?' . $send_data;
        }

    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    if ($method == 'post') {
        $send_data = $param;
        curl_setopt($ch, CURLOPT_POST, 1);
        //添加变量
        curl_setopt($ch, CURLOPT_POSTFIELDS, $send_data);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $MySources = curl_exec($ch);
    curl_close($ch);
    return $MySources;
}
