<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    require_once "./config.php";


    if ($user->login($username,$password)) {
        header("location: ../index.php");
        exit();
    }else{
        header("location: ../index.php?page=login");
        exit();
    }

} else {
    header("location: ../index.php?page=login");
    exit();
}