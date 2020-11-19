<?php
require_once "./config.php";

if ($user->logout()) {
    header("location: ../index.php");
    exit();
}