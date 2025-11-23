<?php
session_start();
function get_client_ip()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } else if (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    if ($ip == '::1') {
        return '127.0.0.1';
    }
    return  $ip;
}
if (isset($_GET['ip'])) {
    $filename = 'status/' . get_client_ip() . '.txt';

    $editTime = filemtime($filename);

    $creationTime = filectime($filename);

    $currentServerTime = time(); 
    $diff = $currentServerTime - $editTime;


    if ($diff > 2) {
        echo "Offline";
    } else {
        echo "Online";
    }
    die();
}
$fp = fopen('status/' . get_client_ip() . '.txt', 'wb');
fwrite($fp, 0);
fclose($fp);
