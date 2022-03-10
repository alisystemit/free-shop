<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/30/2019
 * Time: 03:48 PM
 */
class mdl_admin extends model
{
    function changpass($id,$email,$pass,$fullname,$number){
        $stmt2 = $this->db()->prepare("UPDATE `admin` SET `fullname` = ?, `email` = ?, `password` = ?, `number1` = ? WHERE `admin`.`id` = ?;");
        $stmt2->bind_param("sssss",$fullname,$email,$pass,$number,$id);
        $stmt2->execute();
        $stmt2->close();

    }
    function admin_num_rows(){
        $stmt = $this->db()->prepare("SELECT * FROM admin ");
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->num_rows;
        return  $result;
    }
    function all(){
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM `admin` ORDER BY `id` DESC ");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function delete($id){
        $stmt = $this->db()->prepare("DELETE FROM admin WHERE id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();

    }
    function  insert($w,$q,$y,$x){
        $stmt = $this->db()->prepare("INSERT INTO `admin` (fullname, email,password,number1) VALUES (?, ?,?,?)");
        $stmt->bind_param("ssss", $w,$q,$y,$x);
        $stmt->execute();
        $stmt->close();
    }
}