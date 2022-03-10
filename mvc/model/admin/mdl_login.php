<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/24/2019
 * Time: 09:55 PM
 */
class mdl_login extends model {
    function __construct()
    {

    }
    function login($user,$pass){
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM admin WHERE email = ? AND password = ? ");
        $stmt->bind_param("ss",$user,$pass);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
         return  $arr;
        $stmt->close();
    }
    function loginuser($user,$pass){
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM user WHERE email = ? AND password = ? ");
        $stmt->bind_param("ss",$user,$pass);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function changpass($email,$pass){
        $stmt2 = $this->db()->prepare("UPDATE user SET password = ? WHERE email = ?");
        $stmt2->bind_param("ss",$pass, $email);
        $stmt2->execute();
        $stmt2->close();

    }
}