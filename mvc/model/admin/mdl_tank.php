<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/28/2019
 * Time: 03:49 PM
 */
class mdl_tank extends model
{
    function tank_num_rows (){
        $stmt = $this->db()->prepare("SELECT * FROM tank ");
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->num_rows;
        return  $result;
    }
    function all($i){
        $y = $i-10;
        $arr = [];

        $stmt = $this->db()->prepare("SELECT * FROM `tank` ORDER BY `time` DESC LIMIT ? ,? ");
        $stmt->bind_param("ss",$y,$i);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function burn2($id,$id2){
        $stmt2 = $this->db()->prepare("UPDATE `tank` SET `condition` = ? WHERE `id` = ?;");
        $stmt2->bind_param("ss",$id,$id2);
        $stmt2->execute();
        $stmt2->close();

    }
    function Single_charge($y,$i){

        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM `tank` WHERE operator=? AND amount=? AND `condition`=0  LIMIT 1");
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
        $stmt = $this->db()->prepare("DELETE FROM tank WHERE id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();

    }
    function insert($w1,$q1,$y1,$x1){
        $x0="0";
        $stmt = $this->db()->prepare("INSERT INTO `tank` ( `operator`, `amount`, `coding`, `serial`, `condition`, `time`) VALUES (?,?,?,?,?, NOW())");
        $stmt->bind_param("sssss", $w1,$q1,$y1,$x1,$x0);
        $stmt->execute();
        $stmt->close();

    }
}