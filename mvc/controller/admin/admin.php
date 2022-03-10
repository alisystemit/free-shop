<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/30/2019
 * Time: 02:56 PM
 */
class admin extends useful{

    function index(){
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::viewlod('admin/include/header');
        useful::viewlod('admin/admin');
        useful::viewlod('admin/include/footer');

    }
    function changpas(){
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        global $Salt;
        useful::modellod('admin/mdl_admin');
        $login = new mdl_admin();
        if ($_POST['pass1']==$_POST['pass2']){
            $email =htmlspecialchars($_POST['email']) ;
            $number =htmlspecialchars($_POST['number']) ;
            $fullname =htmlspecialchars($_POST['fullname']) ;
            $password =md5($Salt.htmlspecialchars($_POST['pass2'])) ;
            $login->changpass($_SESSION['admin_id'],$email,$password,$fullname,$number);
            $_SESSION['success_admin']="0";
            redirect( useful::url_site()."/admin/admin/");
        }else{
            $_SESSION['success_admin']="1";
            redirect( useful::url_site()."/admin/admin/");
        }


    }

}