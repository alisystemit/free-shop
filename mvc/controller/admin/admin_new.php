<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/30/2019
 * Time: 10:16 PM
 */
class admin_new extends useful
{
    function __construct()
    {
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site(). "/admin/login/"); exit();}

    }

    function index()
    {
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/login/");  exit();}

        useful::modellod('admin/mdl_admin');
        $admin= new mdl_admin();
      if (isset($_POST['password2'])){
          if ($_POST['password1']==$_POST['password2']){
              $fullname = htmlspecialchars($_POST['fullname']);
              $email = htmlspecialchars($_POST['email']);
              $number = htmlspecialchars($_POST['number']);
              $password1  =(htmlspecialchars($_POST['password1']));
              $_SESSION['success_admin_new'] = '1';
              $admin->insert($fullname ,$email,$password1, $number);

          }

      }


        useful::viewlod('admin/include/header');

        $admin=$admin->all();
        useful::viewlod('admin/admin_new',$admin);
        useful::viewlod('admin/include/footer');
    }

    function delete($id)
    {
        $id=htmlspecialchars($id);
        if (!isset($_SESSION['success_panel'])){redirect( useful::url_site(). "/admin/login/");  exit();}

        if ($id!="1"){
            useful::modellod('admin/mdl_admin');
            $register = new mdl_admin();
            $register->delete($id);
            $_SESSION['success_admin_new'] = '1';

        }
        redirect( useful::url_site(). "/admin/admin_new/");

    }

}