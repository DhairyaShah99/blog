<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 03-02-2019
 * Time: 20:14
 */

$to = "mohittnagpal@gmail.com";
$subject = "TEST MAIL";

$message = "<b>This is message</b>";
$message .= "<b>This is message second line</b>";

$header = "From:shubhamvira@gmail.com\r\n";
$header .= "CC:mohittnagpal@gmail.com\r\n";
$header .= "MIME-version: 1.0\r\n";
$header .= "Content-Type: text/html\r\n";
error_reporting(E_ALL);
if(mail($to, $subject, $message, $header)){
    echo "sent";
}else{
    echo "failed";
}
