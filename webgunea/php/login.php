<?php
session_start();
require 'conexioa.php';

$nombre = htmlspecialchars(trim($_POST['erabiltzailea']));
$pasahitza = htmlspecialchars(trim($_POST['pasahitza']));

$sql = "SELECT Erabiltzailea, Pasahitza FROM agentzia WHERE Erabiltzailea = '$nombre' and Pasahitza = '$pasahitza'";
$result = $conn->query($sql);//exekutatu

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
        $_SESSION['erabiltzailea'] = $nombre;
        
        header("Location: login2.php");
        exit();
    } else {
        echo "<script>
            alert('Pasahitza edo erabiltzailea okerrak dira. Saiatu berriro.');
            window.location.href = '../login.html';
        </script>";
    }         

$conn->close();
?>
<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasiera</title>
    <link rel="icon" type="image/png" href="img/bilboviajes.png">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/maketazioa.css">
    <script defer src="javaScript/bola.js"></script>
    <script defer src="javaScript/atzekoPlanoa.js"></script>
</head>
<body>
    <div id="container">
        <canvas id="atzekoPlanoa"></canvas>
        <header>
            <a href="index.html"><img src="img/bilboviajes.png" alt="logo"></a>
            <nav>
                <ul>
                    <li><a href="index.html">Hasiera</a></li>
                    <li><a href="aboutus.html">Nortzuk gara?</a></li>
                    <li id="hasiSaioa"><button><a href="login.html">Hasi saioa</a></button></li>
                </ul> 
            </nav>
        </header>
    <main>
        <main>
        <footer>
            <div id="iformazioa">
                <h3>Informazioa</h3>
                <p>
                    <strong>Helbidea:</strong> Somera kalea, 45 48001 Bilbao, Bizkaia, Espainia
                    <br>    
                    <strong>Telefonoa:</strong> +34 944 123 456
                    <br>
                    <strong>Helbide elektronikoa:</strong> contacto@bilboviajes.com
                    <br>
                    <strong>Ordutegia:</strong> Astelehenetik ostiralera: 09:00 - 18:00 Larunbatetan: 10:00 - 14:00
                </p>
            </div>
            <div id="sareak">
                <h3>Sare sozialak</h3>
                <div id="lerroa">
                    <a href=""><img src="img/Instagram-Icon.png" alt="instagram"></a>
                    <a href=""><img src="img/Logo_de_Facebook.png" alt="facebook"></a>
                </div>
                <div id="lerroa">
                    <a href=""><img src="img/tiktok_logojpg.jpg" alt="x"></a>
                    <a href=""><img src="img/Linkedin-web-vt.png" alt=""></a>
                </div>
            </div>
            <div id="copyright">
            <p xmlns:cc="http://creativecommons.org/ns#" >This work is licensed under <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-ND 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt=""></a></p>
            </div>
        </footer>
    </div>
    <?php $conn->close(); ?>
</body>
</html>

