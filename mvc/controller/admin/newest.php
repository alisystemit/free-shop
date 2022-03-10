<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:53 PM
 */
class newest extends useful
{
    function index($id=1){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::modellod('admin/mdl_newest');
        $newest= new mdl_newest();
        if (isset($_POST['price'])){
            if (!isset($_POST['amount'])){
                $operator = htmlspecialchars($_POST['operator']);
                $name_change = htmlspecialchars($_POST['name_change']);
                $price = htmlspecialchars($_POST['price']);
                $ching  =(htmlspecialchars($_POST['ching']));
                $newest->insert($operator ,$name_change,$price, $ching);
                $_SESSION['success_newest'] = '1';
            }else{
                $operator = htmlspecialchars($_POST['operator']);
                $name_change = htmlspecialchars($_POST['name_change']);
                $expiration  =(htmlspecialchars($_POST['expiration']));
                $price = htmlspecialchars($_POST['price']);
                $amount  =(htmlspecialchars($_POST['amount']));
                $newest->insert2($operator ,$name_change, $expiration,$price,$amount);
                $_SESSION['success_newest'] = '1';
            }
        }

        useful::viewlod('admin/include/header');

        $id = $id * 10;
        $newest=$newest->all($id);
        useful::viewlod('admin/newest', $newest);
        useful::viewlod('admin/include/footer');
    }
    function delete($id){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        $_SESSION['unsuccess_newest'] = '1';
        useful::modellod('admin/mdl_newest');
        $tank = new mdl_newest();
        $tank->delete($id);
        redirect( useful::url_site()."/admin/newest/");

    }

}