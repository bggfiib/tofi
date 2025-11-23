<?php


$apiToken = "6946508050:AAFoLDeAXCgbVAzYtaACact7UiqaVius6D8";#=====> Your IpToken
$id = "891906517";#=====> Your Chatb ID


function getIPAddress() 
{  
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
    {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    else{  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }
    return $ip;  
}  