<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    require_once "./config.php";


    if ($user->login($username,$password)) {
        header("location: ../index.php");
        exit();
    }else{
        header("location: ../login.php?error=wronglogin");
        exit();
    }

} else {
    header("location: ../login.php");
    exit();
}