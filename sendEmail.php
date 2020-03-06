<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['from'];
    $to = "jgoh1994@gmail.com";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to, $message, $headers);
    echo "message was sent";
?>