<?php
require 'conexioa.php';
session_start();
?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasi saioa</title>
    <link rel="icon" type="image/png" href="img/bilboviajes.png">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/maketazioa.css">
    <script defer src="../javaScript/bola.js"></script>
    <script defer src="../javaScript/atzekoPlanoa.js"></script>
    <script defer src="../javaScript/login.js"></script>
</head>
<body>
    <div id="container">
        <canvas id="atzekoPlanoa"></canvas>
        <header id="goiburua">
            <a href="../index.html"><img src="../img/bilboviajes.png" alt="logo"></a>
            <nav>
                <ul>
                    <li><a href="../index.html">Hasiera</a></li>
                    <li><a href="../aboutus.html">Nortzuk gara?</a></li>
                    <li id="hasiSaioa"><button><a href="../login.html">Hasi saioa</a></button></li>
                </ul> 
            </nav>
        </header>
        <main>
        <?php
        ?> 
            <p id="mezua"> Kaixo 
                <?php
                    if(isset($_SESSION['erabiltzailea'])) {
                    echo $_SESSION['erabiltzailea']; }
                ?> 
            ,aukeratu erregistro mota </p>

        <nav>
    <ul id="erregistroak">
        <li><a href="bidai_erregistroa.php">Bidaiak erregistratu</a></li>
        <li><a href="zerbitzu_erregistroa.php">Zerbitzuak erregistratu</a></li>
    </ul>
</nav>

        </main>
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
                    <a href=""><img src="../img/Instagram-Icon.png" alt="instagram"></a>
                    <a href=""><img src="../img/Logo_de_Facebook.png" alt="facebook"></a>
                </div>
                <div id="lerroa">
                    <a href=""><img src="../img/tiktok_logojpg.jpg" alt="x"></a>
                    <a href=""><img src="../img/Linkedin-web-vt.png" alt=""></a>
                </div>
            </div>
            <div id="copyright">
            <p xmlns:cc="http://creativecommons.org/ns#" >This work is licensed under <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-ND 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt=""></a></p>
            </div>
        </footer>
    </div>
</body>
</html>