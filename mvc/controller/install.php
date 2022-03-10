<?php
/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 06/06/2019
 * Time: 05:22 PM
 */
class install {
    function index()
    {
       
     // require '/system/zhaket-api.class.php';


$produc_token = '81bdd022-6d29-4805-9c7a-e45e926cfb29'; // Your product token

/*
	@param1 : license_token
	@param2 : product_token
	replace it with your own license token and product token :)
*/
global $license_token ;
// echo $result->message;
$result = Zhaket_License::install($license_token, $produc_token);

if ($result->status=='successful') {
    echo $result->message; // License installed successful
} else {
    // License not installed / show message
    if (!is_object($result->message)) {// License is Invalid
        echo $result->message;
    } else {
        foreach ($result->message as $message) {
            foreach ($message as $msg) {
                echo $msg.'<br>';
            }
        }
    }
}
    }


}