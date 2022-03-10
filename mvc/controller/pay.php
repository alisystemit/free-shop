<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 06/02/2019
 * Time: 11:14 PM
 */
class pay extends useful
{
    public function index()
    {
        $mobi = htmlspecialchars($_POST['mobi']);
        $email = htmlspecialchars($_POST['email']);
        $fullname = htmlspecialchars($_POST['fullname']);
        useful::modellod('admin/mdl_orders');
        $orders = new mdl_orders();
        $_SESSION['id_insert'] =$orders->new_orders($fullname, $email, $mobi, $_SESSION['operator_pay'], md5(rand(1, 1000000000000)), $_SESSION['name_change_pay'], $_SESSION['amount_pay']);
        //////////////////////////////////////////////////
        useful::modellod('admin/mdl_settings');
        $Settings = new mdl_settings();
        $Settings = $Settings->settings();
        $_SESSION['api_pay_ir'] = $Settings[0]['api_pay_ir'];
        $_SESSION['api_zarinpal'] = $Settings[0]['api_zarinpal'];
        $_SESSION['mobi']= $_POST['mobi'];
        $_SESSION['email']=$_POST['email'];
        redirect( useful::url_site().'/pay/'.pay_sharj);
    }
    public function zarinpal(){

            require_once getcwd().'/include/lib/nusoap.php';
            $MerchantID =  $_SESSION['api_zarinpal']; //Required
            $Amount = $_SESSION['amount_pay']; //Amount will be based on Toman - Required
            $Description = 'خرید شارژ یا بسته به مبلغ'.$_SESSION['amount_pay'] ; // Required
            $Email =$_SESSION['mobi']; // Optional
            $Mobile =$_SESSION['email']; // Optional
            $CallbackURL =  useful::url_site().'Success/zarinpal'; // Required
            $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
            $client->soap_defencoding = 'UTF-8';
            $result = $client->call('PaymentRequest', [
                [
                    'MerchantID'     => $MerchantID,
                    'Amount'         => $Amount,
                    'Description'    => $Description,
                    'Email'          => $Email,
                    'Mobile'         => $Mobile,
                    'CallbackURL'    => $CallbackURL,
                ],
            ]);

            //Redirect to URL You can do it also by creating a form
            if ($result['Status'] == 100) {
                redirect('https://www.zarinpal.com/pg/StartPay/' . $result['Authority']);
              //  Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result['Authority']);
                //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
              //  Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
            } else {
                echo 'ERR: ' . $result['Status'];
            }

        }
          public function pay_ir(){
              function curl_post($url, $params)
              {
                  $ch = curl_init();
                  curl_setopt($ch, CURLOPT_URL, $url);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_HTTPHEADER, [
                      'Content-Type: application/json',
                  ]);
                  $res = curl_exec($ch);
                  curl_close($ch);

                  return $res;
              }
              function send($api, $amount, $redirect, $mobile = null, $factorNumber = null, $description = null) {
                  return curl_post('https://pay.ir/pg/send', [
                      'api'          => $api,
                      'amount'       => $amount,
                      'redirect'     => $redirect,
                      'mobile'       => $mobile,
                      'factorNumber' => $factorNumber,
                      'description'  => $description,
                  ]);
              }
              $api = $_SESSION['api_pay_ir'];
              $amount = $_SESSION['amount_pay']."0";
              $mobile = $_SESSION['mobi'];
              $factorNumber = $_SESSION['email'];
              $description =  'خرید شارژ یا بسته به مبلغ'.$_SESSION['amount_pay'];
              $redirect =  useful::url_site().'/Success/pay_ir';
              $result = send($api, $amount, $redirect, $mobile, $factorNumber, $description);
              $result = json_decode($result);
              if($result->status) {
                  $go = "https://pay.ir/pg/$result->token";
                  header("Location: $go");
              } else {
                  echo $result->errorMessage;
              }




          }
}