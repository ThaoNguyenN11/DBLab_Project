<?php
session_start();
include_once ("../../Models/user.php");
$message ='' ;
$user = new User();
if(!isset($_GET['username']) ||!isset($_GET['password'])){
    echo  "Please type username and password";
}
else{
    if($user->login($_GET['username'],$_GET['password'])){
        $_SESSION['username'] = $user->getUser();
        header("Location:/../../Views/home/homepageUser.php");
    }
    else{
        $_SESSION['error'] = "Tai khoan hoac mat khau khong dung";
        header("Location:/../../Views/error/loginError.php");
    }
}