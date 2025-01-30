<?php

// Datu baserako konexioko parametroak
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "db_erronka2";

// Konexioa egin
$conn = new mysqli($servername, $username, $password, $dbname);

// Konexioa egiaztatu
if ($conn->connect_error) {
    die("Errorea konexioan: " . $conn->connect_error);
}
?>
