<?php
$to      = 'mateusztracz.gda@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message'];
$name = $_POST['name'];
$headers = 'From: ' . $_POST['email'] . "\r\n" .
    'Content-type: text/html; charset-utf-8';

mail($to, $subject, $message, $name, $headers);
?>