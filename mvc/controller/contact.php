<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:18 PM
 */
class contact extends useful{

    function index(){
        useful::viewlod('contact',array());
    }
    function send(){
        useful::modellod('admin/mdl_contact');
        $email = htmlspecialchars($_POST['email']);
        $number = htmlspecialchars($_POST['number1']);
        $text = htmlspecialchars($_POST['text']);
        $fullname = htmlspecialchars($_POST['fullname']);
        $x=new mdl_contact();
        $x->index($fullname,$email,$text,$number);
        $_SESSION['scses']='1';
        redirect( useful::url_site()."/contact");

    }
}