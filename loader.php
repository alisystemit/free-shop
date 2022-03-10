<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/22/2019
 * Time: 06:05 PM
 */

if(!defined('abcd')){echo 'Forbidden Request';exit;}
include_once getcwd().'/config.php';
require getcwd() . '/system/zhaket-api.class.php';
if (!empty(DOCUMENT_ROOT)){
    define('DOCUMENT_slash','/');
}else{
     define('DOCUMENT_slash','');
}
 // Your license token
/*
 * @param : license token
 * replace it with your own license token :)
 */
global $license_token;
/*
 * @param : license token
 * replace it with your own license token :)
 */
 $license_token =trim ($license_token);
$result = Zhaket_License::isValid($license_token);


    include_once getcwd()."/mvc/model/model.php";
    include_once getcwd()."/mvc/controller/useful.php";
    include_once getcwd().'/include/function/useful.php';
    include_once getcwd()."/mvc/controller/useful.php";


?>
