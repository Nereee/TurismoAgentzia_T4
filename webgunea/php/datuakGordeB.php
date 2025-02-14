<?php
session_start();
require 'conexioa.php';

$izen = htmlspecialchars(trim($_POST['izena']));
$bidaiaMota = htmlspecialchars(trim($_POST['bidaiaMota']));
$hasieraData = htmlspecialchars(trim($_POST['hasieraData']));
$amaieraData = htmlspecialchars(trim($_POST['amaieraData']));
$herrialdea = htmlspecialchars(trim($_POST['herrialdea']));
$deskribapena = htmlspecialchars(trim($_POST['deskribapena']));



$sql = "INSERT INTO Bidaia (Izena, Desk, hasiera_data, amaiera_data, agentzia_id, herrialde_kod, bidai_mota_kod) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($sql);

// s = string, i = integer
$stmt->bind_param("ssssiss", $izen, $deskribapena, $hasieraData, $amaieraData, $agentzia_id, $herrialdea, $bidaiaMota);

if ($stmt->execute()) {
    $_SESSION['bidaia_id'] = $conn->insert_id;

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