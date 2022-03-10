<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:48 PM
 */
class tank extends useful
{
    function index($id=1){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        $id=$id*10;
        useful::modellod('admin/mdl_tank');
        $tank = new mdl_tank();
        $tank = $tank->all($id);
        useful::viewlod('admin/include/header');
        useful::viewlod('admin/tank',$tank);
        useful::viewlod('admin/include/footer');

    }
    function send(){
        global $Salt;
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        if (isset($_POST['coding'])and isset($_POST['serial'])){
            useful::modellod('admin/mdl_tank');
            $coding = htmlspecialchars($_POST['coding']);
            $serial = htmlspecialchars($_POST['serial']);
            $amount = htmlspecialchars($_POST['amount']);
            $operator  =(htmlspecialchars($_POST['operator']));
            $x=new mdl_tank();
            $x->insert($operator,$amount,$coding,$serial);
            $_SESSION['success_tank_send'] = '1';
           redirect( useful::url_site()."/admin/tank");

        }else{
            $_SESSION['unsuccess2_tank'] = '1';
            redirect( useful::url_site()."/admin/tank");
        }

    }
    function delete($id){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::modellod('admin/mdl_tank');
        $tank = new mdl_tank();
        $tank->delete($id);
        $_SESSION['unsuccess_tank_send'] = '1';
        redirect( useful::url_site()."/admin/tank/");
    }

}