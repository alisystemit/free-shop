<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 02:28 PM
 */
class register extends useful
{
    public function index($id = 1)
    {
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        $id = $id * 10;
        useful::modellod('admin/mdl_register');
        $register = new mdl_register();
        $register = $register->all($id);
        useful::viewlod('admin/include/header');
        useful::viewlod('admin/register', $register);
        useful::viewlod('admin/include/footer');
    }

    function delete($id)
    {
        $id=htmlspecialchars($id);
        $_SESSION['unsuccess_register_delete'] = '1';
        useful::modellod('admin/mdl_register');
        $register = new mdl_register();
        $register->delete($id);
        redirect( useful::url_site() . "/admin/register/");

    }

}