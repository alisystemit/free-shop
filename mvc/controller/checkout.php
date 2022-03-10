<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/24/2019
 * Time: 07:56 PM
 */
class checkout extends useful {
    function __construct($id=null)
    {

    }
    function index($id=null){
        $id=htmlspecialchars($id);
       if (!isset($id)){
           if (!empty($_SESSION['checkout'])){
               $id=$_SESSION['checkout'];
           }

       }else{
           $_SESSION['checkout']=$id;
       }
        $id = htmlspecialchars($id);
        if (isset($id)) {
            useful::modellod('mdl_checkout');
            $y = new mdl_checkout();
            $id = $y->index($id);
        }
        $s = useful::settings();
           useful::viewlod('include/header',$s);
            useful::viewlod('checkout',array($id));
    }
    function us_set($id=null){
        $id=htmlspecialchars($id);
        session_unset($id);
        redirect( useful::url_site());
    }


}