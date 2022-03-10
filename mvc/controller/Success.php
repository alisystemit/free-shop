<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 06/03/2019
 * Time: 01:12 PM
 */
class Success extends useful
{
    function zarinpal()
    {
        if (isset($_GET['Status'])){
            useful::modellod('admin/mdl_settings');
            $Settings = new mdl_settings();
            $Settings = $Settings->settings();
            $api_zarinpal = $Settings[0]['api_zarinpal'];
            $MerchantID = $api_zarinpal;
            $Amount = $_SESSION['amount_pay']; //Amount will be based on Toman
            $Authority = $_GET['Authority'];
            if ($_GET['Status'] == 'OK') {
                $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
                $result = $client->PaymentVerification(
                    [
                        'MerchantID' => $MerchantID,
                        'Authority' => $Authority,
                        'Amount' => $Amount,
                    ]
                );

                if ($result->Status == 100 or $result->Status == 101 ) {
                    $_SESSION['Status']='100';
                    redirect( useful::url_site() . "/Success/Success_shop/");
                } else {
                    echo 'Transaction failed. Status:' . $result->Status;

                }
            } else {
                echo 'Transaction canceled by user';
            }
        }else{
            echo "Forbidden Request";
        }
    }
    function pay_ir()
    {
        useful::modellod('admin/mdl_settings');
        $Settings = new mdl_settings();
        $Settings = $Settings->settings();
        $api =   $Settings[0]['api_pay_ir'];
        $token = $_GET['token'];
        function verify($api, $token) {
            return curl_post('https://pay.ir/pg/verify', [
                'api' 	=> $api,
                'token' => $token,
            ]);
        }

        $result = json_decode(verify($api,$token));
        if(isset($result->status)){
            if($result->status == 1){
                $_SESSION['Status']='100';
                $this->Success();
            } else {
                echo "<h1>تراکنش با خطا مواجه شد</h1>";
            }
        } else {
            if($_GET['status'] == 0){
                echo "<h1>تراکنش با خطا مواجه شد</h1>";
            }
        }
    }

    function Success_shop()
    {

        if (isset($_SESSION['Status'])){
            $net=explode("ne",$_SESSION['operator_pay']);
            if (count($net)==1){

                useful::modellod('admin/mdl_orders');
                $orders = new mdl_orders();
                useful::modellod('admin/mdl_tank');
                $tank = new mdl_tank();

                $Single_charge=$tank->Single_charge($_SESSION['operator_pay'],$_SESSION['amount_pay']);
                $orders->sacss($_SESSION['id_insert'],$Single_charge[0]['coding'],1);
                $orders1 = $orders->invoice($_SESSION['id_insert']);

                //  var_dump($orders1);
                useful::modellod('admin/mdl_settings');
                $Settings = new mdl_settings();
                $Settings =$Settings->settings();
                useful::controller('api');
                $x='شماره موبایل : '.$_SESSION['mobi'];
                $x.=' / ';
                $x.='مقدار پرداختی به تومان : '.$_SESSION['amount_pay'];
                $x.=' / ';
                $x.=' Operator : '.$_SESSION['operator_pay'];
                $x.=' / ';
                $x.=' نام شارژ : '.$_SESSION['name_change_pay'];
                $x.=' / ';
                $api = new api();
                $api->SendMessage($x);

                $to = $Settings[0]['email'];
                $subject = "خرید شارژ از سایت";
                $txt = $x;
                useful::Send_email2($to,$x,$subject);

                useful::viewlod('Success',$orders1,$Settings);
                $tank->burn2(1,$Single_charge[0]['id']);
                // session_destroy();
            }elseif (count($net)==2){
                useful::modellod('admin/mdl_orders');
                $orders = new mdl_orders();
                $orders->sacss($_SESSION['id_insert'],'net',2);
                $orders1 = $orders->invoice($_SESSION['id_insert']);
                useful::modellod('admin/mdl_settings');
                $Settings = new mdl_settings();
                $Settings =$Settings->settings();

                useful::controller('api');
                $x='شماره موبایل : '.$_SESSION['mobi'];
                $x.=' / ';
                $x.='مقدار پرداختی به تومان : '.$_SESSION['amount_pay'];
                $x.=' / ';
                $x.=' Operator : '.$_SESSION['operator_pay'];
                $x.=' / ';
                $x.=' نام شارژ : '.$_SESSION['name_change_pay'];
                $x.=' / ';
                $api = new api();
                $api->SendMessage($x);

                $to = $Settings[0]['email'];
                $subject = "خرید بسته از سایت";
                useful::Send_email($to,$x,$subject);

                useful::viewlod('Success',$orders1,$Settings);
                session_destroy();
            }

        }else{
            echo "Forbidden Request";
        }


    }
}