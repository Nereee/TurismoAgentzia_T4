<?php
session_start();
require 'conexioa.php';

$izena = $_POST['bbizena'];
$data = $_POST['data'];
$desk = $_POST['deskribapena'];
$prezioa = $_POST['prezioa5'];

if(!isset($_SESSION['bidaia_id'])){
    echo "<script>
    alert('Mesedez egin lehenengo bidai erregistroa');
    window.location.href = 'bidai_erregistroa.php';
  </script>";
  exit();
}
$bidaia= $_SESSION['bidaia_id'];

$conn->query("INSERT INTO Zerbitzua (bidaia_id)
            VALUES ('$bidaia')");

$zerbitzua_id = $conn->insert_id;

$sql = "INSERT INTO beste_batzuk  (izena, data, Desk, prezioa, zerbitzua_id)
        VALUES ('$izena', '$data',  '$desk', '$prezioa', '$zerbitzua_id')";


if ($conn->query($sql)) {
    echo "<script>
            alert('Datuak ondo gorde dira');
            window.location.href = 'login2.php';
          </script>";
} else {
    echo "Errorea datuak gordetzeko " . $conn->error;
}

$stmt->close();
$conn->close();
?>