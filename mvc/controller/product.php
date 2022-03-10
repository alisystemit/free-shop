<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/23/2019
 * Time: 10:22 PM
 */
class product extends useful {
    function __construct()
    {
    }
    function index(){
        $s = useful::settings();
        useful::viewlod('include/header', $s);
        useful::viewlod('product/index',array());
    }
}