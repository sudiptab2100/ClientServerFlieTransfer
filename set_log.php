<?php
    $log_file_name = 'data/mylog.txt';
    $message = $_POST['message']; // incoming message
    file_put_contents($log_file_name, $message, LOCK_EX);
    header('Location:/util/'); // redirect back to the main site
?>