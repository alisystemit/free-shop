<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/26/2019
 * Time: 01:21 PM
 */
class grouping extends useful {
    function __construct($id=null)
    {
    }
    function chargers ($id=null){
        $id = htmlspecialchars($id);
        if (isset($id)){
            useful::modellod('mdl_grouping');
            $y = new mdl_grouping();
            $id=$y->index($id);
            $i= $y->all();
            $s = useful::settings();
            useful::viewlod('include/header',$s);
            useful::viewlod('index',array($id,$i));

        }else{



        }



    }
}