<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/29/2019
 * Time: 01:58 AM
 */
class mdl_tracking extends model{

    function __construct()
    {
    }
    function index($email,$number,$key_tracking){
        $arr = [];
       $stmt = $this->db()->prepare("SELECT * FROM orders WHERE email = ? AND  number1 = ? AND key_tracking = ? ");
        $stmt->bind_param("sss",$email,$number,$key_tracking);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
}