<?php
include_once ("admin_functions.php");
if(isset($_POST['forgot_password'])){
    $email = $_POST['forgot_password'];
    $query = "SELECT * FROM users WHERE email = '{$email}'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1){
        $length = 50;
        $token = bin2hex(openssl_random_pseudo_bytes($lenght));
        $query = "UPDATE users SET token = '{$token}' WHERE email = '{$email}' ";
        $result = mysqli_query($connection, $query);

        //code to send mail

        $to = "mohittnagpal@gmail.com";
        $subject = "TEST MAIL";

        $message = "<b>To reset your password pls click the link below...</b>";
        $message .= "<a href='http://localhost/cms/admin/reset.php?token={$token}'>http://localhost/cms/admin/reset.php?token={$token}</a>";

        $header = "From:shubhamvira@gmail.com\r\n";
        $header .= "MIME-version: 1.0\r\n";
        $header .= "Content-Type: text/html\r\n";

        if(mail($to, $subject, $message, $header)){
            echo "sent";
        }else{
            echo "failed";
        }
    }
}