<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/27/2019
 * Time: 11:52 PM
 */
class user extends useful {
    function __construct()
    {
    }
    public function index(){

    }
    function check_register (){
        global $Salt;
        if ($_POST['pass1']==$_POST['pass2']){
            useful::modellod('admin/mdl_register');
            $fullname = htmlspecialchars($_POST['fullname']);
            $email = htmlspecialchars($_POST['email']);
            $number = htmlspecialchars($_POST['number']);
            $pass1  =md5($Salt.htmlspecialchars($_POST['pass1']));
            $x=new mdl_register();
             $x->register($fullname,$email,$pass1,$number);
                redirect(  useful::url_site()."/user/login");
        }else{
            $_SESSION['error']='Unsuccessful_rows_2';
            redirect( useful::url_site()."/user/register");
        }

    }
    function login(){
        if (isset($_SESSION['user_admin'])){redirect( useful::url_site() . "/admin/panel/");  exit();}
      //  global $Salt;
     //   echo md5($Salt.htmlspecialchars('1234'));
        useful::viewlod('userlogin', array());
    }
    function checkloginuser($username=null,$password=null){
        if (!isset($_POST['crf'])){echo 'Forbidden Request'; exit();}
        if ($_POST['crf']!=$_SESSION['cfr']){echo 'Forbidden Request';exit();}
        useful::modellod('admin/mdl_login');
        $username = htmlspecialchars($_POST['username']);
        global $Salt;
        $password =md5($Salt.htmlspecialchars($_POST['password'])) ;
        if (empty($username)and empty($password)){
            $_SESSION['error']='Unsuccessful_empty';
            redirect( useful::url_site()."/user/panel/");
        }
        if (isset($_POST['username']) and isset($_POST['password'])) {
            $login = new mdl_login();
            $login = $login->loginuser($username, $password);
            if (count($login)==0){
                $_SESSION['1error']='Unsuccessful_rows_2';
                redirect( useful::url_site()."/user/login");
            }elseif (count($login)==1){
                $_SESSION['user_admin']='successfully';
                $_SESSION['user'] =$login[0]['fullname'];
                $_SESSION['email'] =$login[0]['email'];
                $_SESSION['number'] =$login[0]['number'];

                redirect( useful::url_site()."/user/panel/");
            }else{
                $_SESSION['1error']='Unsuccessful_rows_2';
                redirect( useful::url_site()."/user/login");
            }
        } else {

        }
    }
    function panel(){
        if (!isset($_SESSION['user_admin'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::modellod('admin/mdl_orders');
         $x=new mdl_orders();
         $x = $x->index($_SESSION['email']);
        useful::viewlod('userpanel',$x);
    }
    function register(){
        useful::viewlod('register',array());
    }
    function logout(){
        if (!isset($_SESSION['user_admin'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        session_destroy();
        redirect( useful::url_site()."/user/login/");
    }
    function password(){
        if (!isset($_SESSION['user_admin'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        useful::viewlod('userpass',array());


    }
    function changpass(){
        if (!isset($_SESSION['user_admin'])){redirect( useful::url_site() . "/admin/login/");  exit();}
        global $Salt;
        useful::modellod('admin/mdl_login');
        $login = new mdl_login();
        if ($_POST['pass1']==$_POST['pass2']){
            $password =md5($Salt.htmlspecialchars($_POST['pass2'])) ;
            $login->changpass($_SESSION['email'],$password);
            $_SESSION['successfully']="0";
            redirect( useful::url_site()."/user/password/");
        }else{
            $_SESSION['1error']="0";


          redirect( useful::url_site()."/user/password/");
        }

    }

}