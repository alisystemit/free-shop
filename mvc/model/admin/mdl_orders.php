<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:42 PM
 */
class mdl_orders extends model
{
    function __construct()
    {
    }
    function orders_num_rows(){
        $stmt = $this->db()->prepare("SELECT * FROM orders");
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->num_rows;
        return  $result;
    }
    function new_orders($w,$q,$y,$x,$r,$t,$i)
    {
        $stmt = $this->db()->prepare("INSERT INTO `orders` (`fullname`, `email`, `number1`, `category`, `key_tracking`, `name_change`, `price`) VALUES ( ?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("sssssss", $w,$q,$y,$x,$r,$t,$i);
        $stmt->execute();
        return $stmt->insert_id;
        $stmt->close();
    }
    function index($email){
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM orders  WHERE email = ? ORDER BY `time` DESC ");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function invoice($id){
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM orders  WHERE id = ? ORDER BY `time` DESC ");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function all($i){
      $y = $i-10;
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM `orders` ORDER BY `orders`.`time` DESC LIMIT ? ,? ");
        $stmt->bind_param("ss",$y,$i);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function sacss1($id,$id2){

        $stmt2 = $this->db()->prepare("UPDATE `orders` SET `bio` = ?  WHERE `id` = ?;");
        $stmt2->bind_param("ss",$id2,$id);
        $stmt2->execute();
        $stmt2->close();

    }
    function sacss($id,$x,$id2){

        $stmt2 = $this->db()->prepare("UPDATE `orders` SET `bio` = ? , cod_charge = ?  WHERE `id` = ?;");
        $stmt2->bind_param("sss",$id2,$x,$id);
        $stmt2->execute();
        $stmt2->close();

    }
    function delete($id){
        $stmt = $this->db()->prepare("DELETE FROM `orders` WHERE id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();

    }
}