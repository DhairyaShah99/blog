<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 09-02-2019
 * Time: 20:13
 */

include_once ("../../includes/functions.php");
if(isset($_POST['reset_password'])){
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password){
        $result = getAllUsers("token = '$token'");
        if ($row = mysqli_fetch_assoc($result)){
            $email= $row['email'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "UPDATE users SET password = '$hashed_password', token='' WHERE email= '$email'";
            mysqli_query($connection, $query);

            header("Location: ../../index.php");
        }
    }else{
        header("Location: ../reset.php?token=$token");
    }
}