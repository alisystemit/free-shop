<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:41 PM
 */
class orders extends useful
{
    function index($id=1){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        $id=$id*10;
        useful::modellod('admin/mdl_orders');
        $orders = new mdl_orders();
        $orders = $orders->all($id);
        useful::viewlod('admin/include/header');
        useful::viewlod('admin/orders', $orders);
        useful::viewlod('admin/include/footer');

    }
    function invoice($id){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::modellod('admin/mdl_orders');
        $orders = new mdl_orders();
        $orders = $orders->invoice($id);
        $s = useful::settings();
        useful::viewlod('admin/include/header');
        useful::viewlod('admin/invoice', $orders,$s);
        useful::viewlod('admin/include/footer');

    }
    function delete($id){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::modellod('admin/mdl_orders');
        $orders  = new mdl_orders();
        $orders->delete($id);
        $_SESSION['success_orders_delete'] = '1';
        redirect( useful::url_site()."/admin/orders/");
    }


    function sacss($id=null){
        $id=htmlspecialchars($id);
        $id2=htmlspecialchars( $_GET['pid']);
        $_SESSION['success_orders_sacss']= "0";
        if (!isset($_SESSION['success_panel'])){redirect(  useful::url_site(). "/admin/login/");  exit();}
        useful::modellod('admin/mdl_orders');
        $orders = new mdl_orders();
        $orders->sacss1($id,$id2);
        redirect( useful::url_site()."/admin/orders/");
    }
}