<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:53 PM
 */
class mdl_newest extends model
{
    function newest_num_rows() {
        $stmt = $this->db()->prepare("SELECT * FROM `chargers` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->num_rows;
        return  $result;
    }
    function all($i){
        $y = $i-10;
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM `chargers`  ORDER BY `id` DESC LIMIT ? ,?");
        $stmt->bind_param("ss", $y,$i);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function delete($id){
        $stmt = $this->db()->prepare("DELETE FROM `chargers` WHERE id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();

    }

    function  insert($w,$q,$y,$x){
        $stmt = $this->db()->prepare("INSERT INTO `chargers` ( name, name_change,price ,ching) VALUES (?, ?,?,?)");
        $stmt->bind_param("ssss", $w,$q,$y,$x);
        $stmt->execute();
        $stmt->close();
    }
    function  insert2($w,$q,$y,$x,$g){
    $stmt = $this->db()->prepare("INSERT INTO `chargers` (name, name_change,expiration,price,amount ) VALUES (?, ?,?,?,?)");
    $stmt->bind_param("sssss", $w,$q,$y,$x,$g);
    $stmt->execute();
    $stmt->close();
}



}