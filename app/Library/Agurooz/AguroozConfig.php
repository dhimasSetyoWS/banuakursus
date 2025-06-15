<?php

namespace App\Library\Agurooz;
use Illuminate\Support\Facades\Session;
class AguroozConfig
{
    public static $institution_code = "0030010000002E";
    public static $institution_id = 2;
    public static $client_key_front = "jRc6ktmfQQ8CmCa1J22aiArKRm1wnr3URpduAQ";
    public static $client_key_back = "LdBUxuQWSah2hVepkY6TEEGcdwuCRRPCV4ec";
    public static $institution_api_key = "UEUh8CRHiaPWADz9APMxkhmxtLY0uuVNwY2vfJLJDAhpKKwezjpdfuF0PZctxx9ESQ9NWYG0wymYvpyhYEvL48UWGvxeSaUEK4hAbyeBFamAWJf4QTF5UxHXX3xHMyvDgcPmd1vDqad7Ju11mNb4fryQuiZuSNXaWcXxQLFDK8WCiLGmN7GteCStf7yWi";
    public static $agurooz_url = 'https://agurooz.com/';
    public static $agurooz_token = "";

    public static function initToken(){
        $session_token = Session::get('agurooz_token');
        if($session_token){
            self::$agurooz_token = $session_token;
        }else{
            self::$agurooz_token = "";
        }
    }
}

?>
