<?php
require 'conexioa.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidai Erregistroa</title>
    <link rel="icon" type="image/png" href="img/bilboviajes.png">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/maketazioa.css">
    <script defer src="javaScript/bola.js"></script>
    <script defer src="javaScript/atzekoPlanoa.js"></script>
</head>
<body>
    <div id="container">
        <canvas id="atzekoPlanoa"></canvas>
        <a href="../index.html"><header id="goiburua"></a>
            <img src="../img/bilboviajes.png" alt="logo">
            <nav>
                <ul>
                    <li><a href="../index.html">Hasiera</a></li>
                    <li><a href="">Agentziak</a></li>
                    <li><a href="../aboutus.html">Nortzuk gara?</a></li>
                    <li><a href="">Helmugak</a></li>
                    <li><a href="../bidai_erregistroa.html">Bidaiak erregistratu</a></li>
                    <li><a href="">Zerbitzuak erregistratu</a></li>
                    <li id="itxiSaioa"><button><a href="index.html">Itxi saioa</a></button></li>
                </ul> 
            </nav>
        </header>
        <main>
            <form action="#">
                <label for="izena" id="textua">Izena:</label><br>
                <input type="text" name="izena" id="izena">
                <br><br>
                <label for="bidaiaMota" id="textua">Bidaia Mota</label><br>
                <select name="bidaiaMota" id="bidaiaMota">
                    <option value="">--Aukeratu--</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <br><br>
                <label for="hasieraData">Hasiera Data:</label><br>
                <input type="date" id="hasieraData">
                <br><br>
                <label for="amaieraData">Amaiera Data:</label><br>
                <input type="date" id="amaieraData">
                <br><br>
                <label for="egunak">Egunak:</label><br>
                <input type="number" id="egunak">
                <br><br>
                <label for="herrialdea">Herrialdea:</label><br>
                <select name="herrialdea" id="herrialdea">
                    <option value="">--Aukeratu--</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <br><br>
                <label for="deskribapena">Deskribapena:</label><br>
                <textarea name="deskribapena" id="deskribapena"></textarea>
                <br><br>
                <label for="kanpokoZerbitzuak">Kanpoan geratzen diren zerbitzuak:</label><br>
                <textarea name="kanpokoZerbitzuak" id="kanpokoZerbitzuak"></textarea>
                <br><br>
                <input type="submit" name="gorde" id="gorde" value="Gorde">
            </form>
        </main>
        <footer>
            <div id="iformazioa">
                <h3>Informazioa</h3>
                <p>
                    <span>Helbidea:</span> Somera kalea, 45 48001 Bilbao, Bizkaia, Espainia
                    <br>    
                    <span>Telefonoa:</span> +34 944 123 456
                    <br>
                    <span>Helbide elektronikoa:</span> contacto@bilboviajes.com
                    <br>
                    <span>Ordutegia:</span> Astelehenetik ostiralera: 09:00 - 18:00 Larunbatetan: 10:00 - 14:00
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