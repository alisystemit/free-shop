<?php
define('abcd',true);
include_once 'loader.php';

$REQUEST_URI = $_SERVER["REQUEST_URI"];
if (!empty(DOCUMENT_ROOT.DOCUMENT_slash)){
    $REQUEST_URI =   str_replace(DOCUMENT_ROOT.DOCUMENT_slash,'',$REQUEST_URI);
}

$SCRIPT_FILENAME =   str_replace('/index.php','',$_SERVER["SCRIPT_FILENAME"]);
$REQUEST_URI=explode("?",$REQUEST_URI);
$REQUEST_URI=explode("/",$REQUEST_URI[0]);
$REQUEST_URI_end=end($REQUEST_URI);
if (empty($REQUEST_URI_end)){
    array_pop($REQUEST_URI);
}


$REQUEST_URI_count = count($REQUEST_URI);

for ($i = 1; $i < $REQUEST_URI_count ; $i++) {
    $URI_[$i]=$REQUEST_URI[$i];
}

if (!empty($URI_['1'])== ""){
    $URI_['1']='index';
}

if (!empty($URI_['1']) and count($URI_)<=3 ) {
    $filename = $SCRIPT_FILENAME . '/mvc/controller' . '/' .$URI_['1'] . '.php';
    if (file_exists($filename)) {
        if (isset($URI_['2'])) {
            require_once $filename;
            $all = new $URI_['1']();
            if (method_exists($all, $URI_['2'])) {
                $URI_2 = $URI_['2'];
                if (!isset($URI_['3'])){
                    $all->$URI_2();
                }else{
                    $all->$URI_2($URI_['3']);
                }
                exit();
            } else {
                if (isset($URI_['2'])){
                    if (!method_exists($all, $URI_['1'])){
                        $all = new $URI_['1']();
                        $all->index($URI_['2']);
                        exit();
                    }else{
                        $all = new $URI_['1']();
                        $all->$URI_['2'];
                    }
                }else{
                    include_once $SCRIPT_FILENAME . '/include/404/404.php';
                    exit();
                }

            };
        }
        require_once $filename;
        $all = new $URI_['1']();
        $all->index();
        exit();
    } else {
        if (!empty($URI_['2'])){
            $filename = $SCRIPT_FILENAME . '/mvc/controller' . '/' . $URI_['1'] .'/'.$URI_['2']. '.php';
            if (file_exists($filename)) {
                require_once $filename;
                if (!isset($URI_['3'])){
                    $all = new $URI_['2']();
                    $all->index();
                }
            }else{
                include_once $SCRIPT_FILENAME . '/include/404/404.php';
            }
        }else{
            include_once $SCRIPT_FILENAME . '/include/404/404.php';
        }

    }
}
if (!empty($URI_['3']) and count($URI_)<=5 ) {
    $filename = $SCRIPT_FILENAME . '/mvc/controller' . '/' . $URI_['1'] . '/' .$URI_['2'].'.php';
    if (file_exists($filename)) {
        if (isset($URI_['3'])) {
            require_once $filename;
            $all = new $URI_['2']();
            if (method_exists($all, $URI_['3'])) {
                $URI_3 = $URI_['3'];
                if (!isset($URI_['4'])){
                    $all->$URI_3();
                }else{
                    $all->$URI_3($URI_['4']);
                }
                exit();
            } else {
                include_once $SCRIPT_FILENAME . '/include/404/404.php';
                exit();
            };
        }
    } else {
        $filename = $SCRIPT_FILENAME . '/mvc/controller' . '/' . $URI_['1'] . '/' . $URI_['2'].'/'.$URI_['3'].'.php';
        if (file_exists($filename)) {
            require_once $filename;
            $all = new $URI_['3']();
            $all->index();
        } else {
            include_once $SCRIPT_FILENAME . '/include/404/404.php';
        }
    }

}
?>