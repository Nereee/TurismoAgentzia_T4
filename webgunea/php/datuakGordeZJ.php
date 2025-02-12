<?php
session_start();
require 'conexioa.php';

$hegaldiKod = $_POST['hegaldiKodea'];
$ordua = $_POST['ordua'];
$hasiera_data = $_POST['irteera'];
$iraupen = htmlspecialchars(trim($_POST['iraupena']));
$prezioa = htmlspecialchars(trim($_POST['prezioa']));
$iata_kod_jatorri = htmlspecialchars(trim($_POST['jatorrizkoAireportua1']));
$iata_kod_helmuga = htmlspecialchars(trim($_POST['helmugakoAireportua']));
$airelinea_kod = htmlspecialchars(trim($_POST['airelinea']));
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


$sql = "INSERT INTO Hegaldia (zerbitzua_id, hegaldi_kod, ordua, hasiera_data, iraupena, prezioa, iata_kod_jatorri, iata_kod_helmuga, airelinea_kod) 
        VALUES ('$zerbitzua_id', '$hegaldiKod', '$ordua', '$hasiera_data', '$iraupen', '$prezioa', '$iata_kod_jatorri', '$iata_kod_helmuga', '$airelinea_kod')";

    
    if ($conn->query($sql)) {
        echo "<script>
                alert('Datuak ondo gorde dira');
                window.location.href = 'login2.php';
              </script>";
    } else {
        echo "Errorea datuak gordetzeko " . $conn->error;
    }
?>