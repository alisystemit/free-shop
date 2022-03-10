<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/26/2019
 * Time: 01:26 PM
 */
class mdl_grouping extends model
{
    function __construct()
    {
    }

    function index($name)
    {
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM chargers WHERE name = ? ");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
        $stmt->close();
    }
    function all()
    {
        $arr = [];
        $stmt = $this->db()->prepare("SELECT * FROM grouping ");
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
        $stmt->close();
    }

}