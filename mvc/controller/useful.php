<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/26/2019
 * Time: 04:44 PM
 */
class useful{
    function __construct()
    {


    }
    function viewlod($x,$y=null,$z=null){
        $data2 = $z;
        $data = $y;
        include_once getcwd()."/mvc/view/".$x.".php";
    }
    function controller($x,$y=null){


        $data = $y;
        include_once getcwd()."/mvc/controller/".$x.".php";
    }
    function modellod($x,$y=null){

        include_once getcwd()."/mvc/model/".$x.".php";
    }
    function settings(){
        useful::modellod('admin/mdl_settings',array());
        $j = new mdl_settings();
        $j= $j->settings();
        return $j;
    }
    function is_https()
    {
        if ( ! empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off')
        {
            return TRUE;
        }
        elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
        {
            return TRUE;
        }
        elseif ( ! empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off')
        {
            return TRUE;
        }

        return FALSE;
    }

    function base_url(){

        if (isset($_SERVER['HTTP_HOST']) && preg_match('/^((\[[0-9a-f:]+\])|(\d{1,3}(\.\d{1,3}){3})|[a-z0-9\-\.]+)(:\d+)?$/i', $_SERVER['HTTP_HOST']))
        {
            $base_url = ($this->is_https() ? 'https':'http').'://'.$_SERVER['HTTP_HOST']
                .substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], basename($_SERVER['SCRIPT_FILENAME'])));
        }
        else
        {
            $base_url = 'http://localhost/';
        }

        return $base_url;


    }
    function Send_email2($ids,$text,$sabject){
        include_once getcwd()."/include/mail/class.phpmailer.php";
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        try {
            $mail->Host       = "smtp.gmail.com"; // آدرس SMTP سرور شما
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;// استفاده از SMTP authentication
            $mail->Username   = gmail_user_id; // نام کاربری SMTP
            $mail->Password   = gmail_password_id;        // کلمه عبور SMTP
            $mail->AddReplyTo($ids); // افزودن پاسخ به ارسال کننده
            $mail->AddAddress($ids); // تنظیم آدرس گیرنده ایمیل
            $mail->SetFrom($ids); // تنظیم قسمت ارسال کننده ایمیل
            $mail->Subject = $sabject; // موضوع ایمیل
            $mail->AltBody = 'برنامه شما از این ایمیل پشتیبانی نمی کند، برای دیدن آن، لطفا از برنامه دیگری استفاده نمائید'; // متنی برای کاربرانی که نمی توانند ایمیل را به درستی مشاهده کنند
            $mail->CharSet = 'UTF-8'; // یونیکد برای زبان فارسی
            $mail->ContentType = 'text/html'; // استفاده از html
            $mail->MsgHTML($text);
            $mail->Send(); // ارسال

        }
        catch (phpmailerException $e) {
            echo $e->errorMessage(); // پیام خطا از phpmailer
        }
        catch (Exception $e) {
            echo $e->getMessage(); // سایر خطاها
        }
    }
    public function url_site(){
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
        if(!empty(DOCUMENT_ROOT)){
            $xy='/';
        }else{
            $xy='';
        }
        return $protocol.'://'.$_SERVER['SERVER_NAME'].$xy.DOCUMENT_ROOT ;
    }

}

?>