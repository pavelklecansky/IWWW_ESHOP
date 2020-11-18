<?php

function __autoload($class)
{
    require_once $_SERVER["DOCUMENT_ROOT"] . '/classes/' . $class . '.php';
}


ob_start();
session_start();


$conn = Connection::getPdoInstance();
$user = new User();