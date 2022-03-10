<?php
class panel extends useful
{
    function __construct()
    {

    }

    function index()
    {
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::viewlod('admin/include/header');
        useful::modellod('admin/mdl_admin');
        $admin= new mdl_admin();
        useful::viewlod('admin/include/header');
        $data['admin']=$admin->admin_num_rows();
      //////////////////////////////////////////////
        useful::modellod('admin/mdl_contact');
        $contact  = new mdl_contact();
        $data['contact']  = $contact ->contact_num_rows();
        //////////////////////////////////
        useful::modellod('admin/mdl_newest');
        $contact  = new mdl_newest();
        $data['newest']  = $contact ->newest_num_rows();
        ////////////////////////////////////////
        useful::modellod('admin/mdl_orders');
        $contact  = new mdl_orders();
        $data['orders']  = $contact ->orders_num_rows();
        ////////////////////////////////////
        useful::modellod('admin/mdl_register');
        $contact  = new mdl_register();
        $data['register']  = $contact ->register_num_rows();
        ///////////////////////////////////////////
        useful::modellod('admin/mdl_tank');
        $contact  = new mdl_tank();
        $data['tank']  = $contact ->tank_num_rows();
        ////////////////////////////
        useful::viewlod('admin/panel',$data);
        useful::viewlod('admin/include/footer');

    }
    function logout($id=null)
    {
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        session_destroy();
     redirect( useful::url_site()."/admin/login/");
    }
}