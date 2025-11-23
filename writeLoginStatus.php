<?php
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $filepath = 'loginStatus.txt';
    $fileHandler = fopen($filepath, 'w');

    fwrite($fileHandler, $status . PHP_EOL);

    fclose($fileHandler);
    echo "Done ✅: $status";
} else {
    echo "Invalid url";
}
