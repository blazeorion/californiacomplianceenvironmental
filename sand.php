<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

ini_set('SMTP','localhost');
ini_set('smtp_port',25);

$to = 'blazeorion@gmail.com';
// Subject
$subject = 'CCE Website Contact Form';

// Message
$message = '<html><body>';
$message .= 'test';
$message .= "</body></html>";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'From: Invoice Portal <donotreply@convoy-connect.com>';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));