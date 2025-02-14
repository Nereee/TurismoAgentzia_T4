<?php
session_start();
require 'conexioa.php';

$izena = $_POST['hizena'];
$hiria = $_POST['hiria'];
$prezioa = $_POST['prezioa4'];
$hasiera_data = htmlspecialchars(trim($_POST['sarrera']));
$amaiera_data = $_POST['irteera4'];
$logela_mota_kod = $_POST['logelaMota'];

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

$sql = "INSERT INTO ostatu (zerbitzua_id, izena, hiria, prezioa, hasiera_data, amaiera_data, logela_mota_kod)
        VALUES ('$zerbitzua_id', '$izena', '$hiria', '$prezioa', '$hasiera_data', '$amaiera_data', '$logela_mota_kod')";


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