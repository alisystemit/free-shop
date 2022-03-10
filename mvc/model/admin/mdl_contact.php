<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/29/2019
 * Time: 12:27 PM
 */
class mdl_contact extends model
{
function index($w,$q,$y,$x){
    $stmt = $this->db()->prepare("INSERT INTO `contact` ( name, email,text,number1) VALUES (?, ?,?,?)");
    $stmt->bind_param("ssss", $w,$q,$y,$x);
    $stmt->execute();
    $stmt->close();
}
 function all($i){
        $y = $i-10;
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM contact ORDER BY `time` DESC LIMIT ? ,? ");
        $stmt->bind_param("ss",$y,$i);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function each($i){
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM contact WHERE id = ? ");
        $stmt->bind_param("s",$i);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return  $arr;
        $stmt->close();
    }
    function contact_num_rows(){
        $stmt = $this->db()->prepare("SELECT * FROM contact ");
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->num_rows;
        return  $result;
    }
    function delete($id){
        $stmt = $this->db()->prepare("DELETE FROM contact WHERE id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();

    }

}