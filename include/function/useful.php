<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 05/25/2019
 * Time: 11:47 AM
 */
function redirect($url){
    if (!headers_sent()){
        header('Location: '.$url);exit;
    }else{
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
    function get_gravatar( $email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array() )
    {
        $url = 'https://www.gravatar.com/avatar/';
        $url .= md5(strtolower(trim($email)));
        $url .= "?s=$s&d=$d&r=$r";
        if ($img) {
            $url = '<img src="' . $url . '"';
            foreach ($atts as $key => $val)
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';

        }
        return $url;
    }


}
