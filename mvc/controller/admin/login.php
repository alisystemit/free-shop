<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/22/2019
 * Time: 08:23 PM
 */
class login extends useful
{
    function __construct()
    {
    }

    function index()
    {
        if (isset($_SESSION['success_panel'])){redirect( useful::url_site() . "/admin/panel/");  exit();}
      //  global $Salt;
      //  echo md5($Salt.'alireza12345');
        useful::viewlod('admin/login');
    }

    function check()
    {

        if (!isset($_POST['crf'])){echo 'Forbidden Request'; exit();}
        if ($_POST['crf']!=$_SESSION['cfr']){echo 'Forbidden Request';exit();}
        useful::modellod('admin/mdl_login');
        $username = htmlspecialchars($_POST['username']);
        global $Salt;
        $password = md5($Salt . htmlspecialchars($_POST['password']));//
        if (empty($username) and empty($password)) {
            $_SESSION['error'] = 'Unsuccessful_empty';
            redirect( useful::url_site() . "/admin/login/");
        }
        $login=new mdl_login();
        if (isset($_POST['username']) and isset($_POST['password'])) {

            $login = $login->login($username, $password);
            if (count($login) == 0) {
                $_SESSION['1error'] = 'Unsuccessful';
                redirect( useful::url_site() . "/admin/login/");
            } elseif (count($login) == 1) {
                $_SESSION['success_panel'] = '1';
                $_SESSION['admin'] = $login [0]['fullname'];
                $_SESSION['admin_id'] = $login [0]['id'];
                $_SESSION['email'] = $login [0]['email'];
                $_SESSION['number'] = $login [0]['number'];
              //  var_dump( $_SESSION['admin_id']);
         redirect( useful::url_site() . "/admin/panel/");
            } else {
                $_SESSION['1error'] = '1';
                redirect( useful::url_site() . "/admin/login/");
            }
        } else {

        }

    }
}