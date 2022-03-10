<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/27/2019
 * Time: 04:23 PM
 */
class mdl_checkout extends model
{
    function __construct()
    {
    }
    function index($id){
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM chargers WHERE id = ? ");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
        $stmt->close();

    }
}