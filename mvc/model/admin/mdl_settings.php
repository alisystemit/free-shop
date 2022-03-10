<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:47 PM
 */
class mdl_settings extends model
{

    function __construct()
    {
    }
    function chang($el,$p,$sp ,$ep ,$app ,$tel_api,$api_zarinpal,$api_payir, $id_teleg ,$email){
        var_dump($el,$p,$sp ,$ep ,$app ,$tel_api,$api_zarinpal,$api_payir, $id_teleg);
        $stmt2 = $this->db()->prepare("UPDATE settings SET namesite = ? , logo = ? , tel =? , number =? , app =?  , tle_api =? ,api_zarinpal =?,api_pay_ir =? , id_teleg = ? , email = ? WHERE id = 1");
        $stmt2->bind_param("ssssssssss",$el, $p,$sp, $ep,$app,$tel_api,$api_zarinpal,$api_payir, $id_teleg ,$email);
        $stmt2->execute();
        $stmt2->close();

    }
    function settings(){
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM settings ");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
}