
<?php

if (isset($_POST["submit"])) {
    require_once "./config.php";
    $username = $_POST["username"];
    $password = $_POST["password"];



    if (UserRepository::usernameExists($username) == true) {
        header("location: ../index.php?page=register");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    UserRepository::insertUser($username, $hashedPassword);

    header("location: ../index.php?page=login");
    exit();
} else {
    header("location: ../index.php?page=register");
    exit();
}