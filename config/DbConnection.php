<?php

require "../vendor/autoload.php";
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$serverName = $_ENV["DB_SERVERNAME"];
$name       = $_ENV["DB_NAME"];
$userName   = $_ENV["DB_USERNAME"];
$password   = $_ENV["DB_PASSWORD"];


// echo $_ENV["DB_SERVERNAME"];

$connexion = mysqli_connect($serverName, $userName, $password, $name);
if (!$connexion) {
    die("faild to connect to database: " . mysqli_connect_error());
} else {
    echo "connected succesfully";
}


?>