<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/29/2019
 * Time: 08:03 PM
 */
class contact extends useful
{
    function __construct()
    {
    }

    public function index($id=1)
    {
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}

        $id = $id * 10;
        useful::modellod('admin/mdl_contact');
        $contact  = new mdl_contact();
        $contact  = $contact ->all($id);
        useful::viewlod('admin/include/header');
        useful::viewlod('admin/contact', $contact );
        useful::viewlod('admin/include/footer');

    }
    public function about($id=null){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect(  useful::url_site(). "/admin/login/");  exit();}

        useful::modellod('admin/mdl_contact');
        $contact  = new mdl_contact();
        $contact  = $contact ->each($id);
        useful::viewlod('admin/include/header');
        useful::viewlod('admin/about', $contact );
        useful::viewlod('admin/include/footer');
    }
    function delete($id){
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::modellod('admin/mdl_contact');
        $contact  = new mdl_contact();
        $contact->delete($id);
        $_SESSION['success_contact'] = '1';
        redirect( useful::url_site()."/admin/contact/");
    }

}