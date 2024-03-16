<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$banco = "impacta";
$db_host = "localhost";
$db_user = "root";
$db_password = "root";

$pdo = new PDO("mysql:dbname=$banco;host=$db_host", $db_user, $db_password);

//json https://www.youtube.com/watch?v=Bih5md-PRbs