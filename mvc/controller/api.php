<?php

/**
 * Created by PhpStorm.
 * User: ali.system
 * Date: 06/05/2019
 * Time: 04:29 AM
 */
class api extends useful
{
   function telBot($method, $datas = [])
    {
        useful::modellod('admin/mdl_settings');
        $Settings = new mdl_settings();
        $Settings = $Settings->settings();
        $url = "https://api.telegram.org/bot" . $Settings[0]['tle_api'] . "/" . $method;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        $res = curl_exec($ch);
        if (curl_error($ch)) {
            var_dump(curl_error($ch));
        } else {
            return json_decode($res);
        }
    }
   public function SendMessage($text=null)
    {
        useful::modellod('admin/mdl_settings');
        $Settings = new mdl_settings();
        $Settings = $Settings->settings();
        $this->telBot('sendMessage', [
                'chat_id' => $Settings[0]['id_teleg'],
                'text' => $text,
                'parse_mode' => 'MarkDown']
        );
    }

}