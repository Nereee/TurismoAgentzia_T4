<?php
session_start();
require 'conexioa.php';

$hegaldiKod = $_POST['hegaldiKodea1'];
$ordua = $_POST['ordua1'];
$hasiera_data = $_POST['irteera3'];
$iraupen = htmlspecialchars(trim($_POST['iraupena1']));
$prezioa = htmlspecialchars(trim($_POST['prezioa3']));
$iata_kod_jatorri = htmlspecialchars(trim($_POST['jatorrizkoAireportua2']));
$iata_kod_helmuga = htmlspecialchars(trim($_POST['helmugakoAireportua3']));
$airelinea_kod = htmlspecialchars(trim($_POST['airelinea3']));
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
              </script>";
    }

$hegaldia_kod2 = $_POST['bHegaldiKodea'];
$ordua2 = $_POST['ordua2'];
$hasiera_data2 = $_POST['itzulera'];
$iraupena2 = htmlspecialchars(trim($_POST['iraupena2']));
$airelinea_kod2 = htmlspecialchars(trim($_POST['bAirelinea']));


$conn->query("INSERT INTO Zerbitzua (bidaia_id) VALUES ('$bidaia')");
$zerbitzua_id2 = $conn->insert_id;

$sql2 = "INSERT INTO joan_etorria (zerbitzua_id, hegaldi_kod, ordua, hasiera_data, iraupena, prezioa, airelinea_kod) 
        VALUES ('$zerbitzua_id2', '$hegaldia_kod2', '$ordua2', '$hasiera_data2', '$iraupena2', '$prezioa', '$airelinea_kod2')";

if ($conn->query($sql2)) {
    echo "<script>
            alert('Datuak ondo gorde dira');
            window.location.href = 'login2.php';
          </script>";
} else {
    echo "Errorea datuak gordetzeko (joan_etorria): " . $conn->error;
}

$conn->close();
?>
