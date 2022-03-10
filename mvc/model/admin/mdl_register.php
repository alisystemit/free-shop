<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/29/2019
 * Time: 03:24 AM
 */
class mdl_register extends model
{
function  register($w,$q,$y,$x){
    var_dump($w,$q,$y,$x);
    $stmt = $this->db()->prepare("INSERT INTO `user` (fullname, email,password,number1) VALUES (?, ?,?,?)");
    $stmt->bind_param("ssss", $w,$q,$y,$x);
    $stmt->execute();
    $stmt->close();
}
function register_num_rows (){
    $stmt = $this->db()->prepare("SELECT * FROM `user` ");
    $stmt->execute();
    $result = $stmt->get_result();
    $result = $result->num_rows;
    return  $result;
}
function all($i){
    $y = $i-10;
    $arr = [];
    $stmt = $this->db()->prepare("SELECT * FROM user ORDER BY `time` DESC LIMIT ? ,? ");
    $stmt->bind_param("ss",$y,$i);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
    return  $arr;
    $stmt->close();
}
function delete($id){
    $stmt = $this->db()->prepare("DELETE FROM user WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();

}
}