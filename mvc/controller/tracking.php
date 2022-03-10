<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:03 PM
 */
class tracking extends useful{

    function __construct()
    {
    }
    function index(){

        useful::viewlod('tracking',array());
    }
    function page(){

        useful::modellod('mdl_tracking');
        $email = htmlspecialchars($_POST['email']);
        $number = htmlspecialchars($_POST['number']);
        $tracking = htmlspecialchars($_POST['tracking']);
        $x=new mdl_tracking();
        $x = $x->index($email,$number,$tracking);
        useful::viewlod('tracking_page', $x);
    }

}