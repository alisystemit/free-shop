<?php
session_start();
date_default_timezone_set('Asia/Tehran');
$Salt="jksfhfgjbchf75464@@#xcvcv";
#اگر جای غیر از دایرکتوری های اصلی (ساب دامنه وادرس اصلی )در حال نصب این اسکریپت هستید لطفا نام پوشه را در این قسمت وارد کنید
define('DOCUMENT_ROOT','free-shop');
////////
#license_token
$license_token = ' '; // Your license token
////////////////////////////////////////////////////////////
#gmail
define('gmail_user_id','#');
define('gmail_password_id','#');

//////////////////////////////////////////////
###pay
define('pay_sharj','pay_ir');     //pay_ir    //zarinpal

///////////////////////////////////////////////////
#db
$uesr_db = "root";
$password_db = "root";
$name_db = "pxqckmzk_sharj";
$local_db = "localhost";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
set_exception_handler(function($e) {
    error_log($e->getMessage());
    exit('Error connecting to database'); //Should be a message a typical user could understand
});
$db = new mysqli($local_db,$uesr_db,$password_db,$name_db);
$db ->set_charset("utf8mb4");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>
 
 