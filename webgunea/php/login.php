<?php
session_start();
require 'conexioa.php';

$nombre = htmlspecialchars(trim($_POST['erabiltzailea']));
$pasahitza = htmlspecialchars(trim($_POST['pasahitza']));

$sql = "SELECT Erabiltzailea, Pasahitza, Desk, Logoa FROM agentzia WHERE Erabiltzailea = '$nombre' and Pasahitza='$pasahitza'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nombre);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if ((string)$pasahitza === (string)$user['Pasahitza']) {
        session_regenerate_id(true);
        $_SESSION['Desk'] = $user['Desk'];
        $_SESSION['Logoa'] = $user['Logoa'];
        $_SESSION['erabiltzailea'] = $user['Erabiltzailea'];
        
        header("Location: login2.php");
        exit();
    } else {
        echo "<script>
            alert('Pasahitza okerra da. Saiatu berriro.');
            window.location.href = '../login.html';
        </script>";
    }         
} else {
    echo "<script>
        alert('Erabiltzailearen izena ez da existitzen.');
        window.location.href = '../login.html';
    </script>";
}

$conn->close();
?>

