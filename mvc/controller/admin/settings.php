<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:46 PM
 */
class Settings extends useful
{

    function index(){
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::modellod('admin/mdl_settings');
        $Settings = new mdl_settings();
        $Settings =$Settings->settings();
        useful::viewlod('admin/include/header');
        useful::viewlod('admin/settings',$Settings);
        useful::viewlod('admin/include/footer');


    }
    function send(){
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        $_SESSION['success_settings'] = '1';
        $fullname = htmlspecialchars($_POST['fullname']);
        $logo = htmlspecialchars($_POST['logo']);
        $tel = htmlspecialchars($_POST['tel']);
        $tel_api = htmlspecialchars($_POST['tel_api']);
        $app = htmlspecialchars($_POST['app']);
        $number  =(htmlspecialchars($_POST['number']));
        $api_zarinpal  =(htmlspecialchars($_POST['api_zarinpal']));
        $api_payir  =(htmlspecialchars($_POST['api_payir']));
        $id_teleg  =(htmlspecialchars($_POST['id_teleg']));
        $email  =(htmlspecialchars($_POST['email']));
        useful::modellod('admin/mdl_settings');
        $Settings = new mdl_settings();
        $Settings->chang($fullname,$logo,$tel, $number,$app,$tel_api,$api_zarinpal,$api_payir,$id_teleg, $email);
        redirect( useful::url_site() ."/admin/settings/");
    }

}