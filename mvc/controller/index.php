<?php
class index extends useful {
    function __construct()
    {

    }


    function index($id='irancell')
    {
        $id = htmlspecialchars($id);
        if (isset($id)) {
            useful::modellod('mdl_grouping',array());
            $y = new mdl_grouping();
            $id = $y->index($id);
            $i = $y->all();
            $s = useful::settings();
            useful::viewlod('include/header',$s);
            useful::viewlod('index', array($id, $i),$s);

        }
    }
}



?>