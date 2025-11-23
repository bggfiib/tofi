<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');

$filepath = 'loginStatus.txt';
header('Content-Type: application/json');

if (file_exists($filepath)) {
    $content = file_get_contents($filepath);
    $data = array(
        'status' => trim($content)
    );
    echo json_encode($data);
} else {
    $data = array(
        'status' => "WAITING"
    );

    echo json_encode($data);

}
