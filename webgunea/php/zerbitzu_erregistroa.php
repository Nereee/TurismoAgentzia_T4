<?php
require 'conexioa.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zerbitzu Erregistroa</title>
    <link rel="icon" type="img/png" href="../img/bilboviajes.png">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/maketazioa.css">
    <script defer src="../javaScript/bola.js"></script>
    <script defer src="../javaScript/atzekoPlanoa.js"></script>
    <script defer src="../javaScript/zerbitzuErregistroa.js"></script>
    <script defer src="../javaScript/prueba.js"></script>
</head>

<body>
    <div id="container">
        <canvas id="atzekoPlanoa"></canvas>
        <header id="goiburua">
            <a href="index.html"><img src="../img/bilboviajes.png" alt="logo"></a>
            <nav>
                <ul>
                    <li><a href="index.html">Hasiera</a></li>
                    <li><a href="#">Agentziak</a></li>
                    <li><a href="aboutus.html">Nortzuk gara?</a></li>
                    <li><a href="#">Helmugak</a></li>
                    <li><a href="bidai_erregistroa.php">Bidaiak erregistratu</a></li>
                    <li><a href="#">Zerbitzuak erregistratu</a></li>
                    <li id="itxiSaioa"><a href="../index.html" class="btn">Itxi saioa</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <form action="#" method="POST">
                <label for="bidaia" class="textua">Aukeratu bidaia:</label><br>
                <select name="bidaia" class="bidaia">
                    <option value="">--Aukeratu--</option>
                    <?php
                //DATU BASETIK
                $sql = "select bidai_mota_kod, desk from Bidai_mota"; 
                $result = $conn->query($sql);//exekutatu
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['bidai_mota_kod'] . "'>" . $row['desk'] . "</option>";
                    }
                }
                ?>
                </select>
                <br><br>
                <label for="zerbitzuMota" id="textua">Zein zerbitzu erregistratu behar duzu?</label><br>
                <div class="zerbitzuMota">
                    <div>
                        <input type="radio" name="zerbitzuMota" value="hegaldia" id="hegaldia"> <label for="hegaldia"
                        class="textua" onclick="formularioakIkusi('aldakorra')">Hegaldia</label>

                    </div>
                    <div>
                        <input type="radio" name="zerbitzuMota" value="ostatua" id="ostatua"> <label for="ostatua"
                        class="textua" onclick="formularioakIkusi('ostatua')">Ostatua</label>
                    </div>
                    <div>
                        <input type="radio" name="zerbitzuMota" value="besteBatzuk" id="besteBatzuk"> <label
                            for="besteBatzuk" class="textua" onclick="formularioakIkusi('besteBatzuk')">Beste Batzuk</label>
                    </div>
                </div>
                <div id="aldakorra">
                        <label for="hegaldia">Hegaldia</label><br>
                        <label for="hegaldiMota">Zein hegaldia mota da?</label>
                        <div>
                            <input type="radio" name="hegaldiMota" value="joan" id="joan"> <label for="joan"
                            class="textua" onclick="formularioakIkusi('joan')">Joan</label>
                            <input type="radio" name="hegaldiMota" value="joanEtorri" id="joanEtorri"> <label
                                for="joanEtorri" class="textua" onclick="formularioakIkusi('joanEtorri')">Joan / Etorri</label>
                        </div>
                </div>
                <div id="subAldakorra">

                    <div class="joan">
                        <label for="titulua" class="textua">Hegaldia (joana)</label><br>
                        <label for="jatorrizkoAireportua" class="textua">Jatorrizko Aireportua</label><br>
                        <select name="jatorrizkoAireportua" id="jatorrizkoAireportua">
                                    <option>--Aukeratu--</option>
                        //DATU BASETIK
                        <?php
                            $sql = "select iata_kod, hiria from iata"; 
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['iata_kod'] . "'>" . $row['hiria'] . "</option>";
                                }
                             }
                        ?>
                                </select>
                                <br><br>
                                <label for=" helmugakoAireportua" id="textua">Helmugako Aireportua</label><br>
                            <select name="helmugakoAireportua" id="helmugakoAireportua">
                                    <option value="">--Aukeratu--</option>
                                    <?php
                                        $sql = "select iata_kod, hiria from iata"; 
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['iata_kod'] . "'>" . $row['hiria'] . "</option>";
                                            }
                                        }
                                    ?>
                                </select>
                                <br><br>
                                <label for=" hegaldiKodea" id="textua">Hegaldi Kodea:</label><br>
                                <input type="text" name="hegaldiKodea" id="hegaldiKodea">
                                <br><br>
                                <label for="airelinea" id="textua">Airelinea:</label><br>
                                <select name="airelinea" id="airelinea">
                                    <option value="">--Aukeratu--</option>
                                    <?php
                                        //DATU BASETIK
                                        $sql = "select airelinea_kod, izena from iata"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['airelinea_kod'] . "'>" . $row['izena'] . "</option>";
                                            }
                                        }
                                        ?>
                                </select>
                                <br><br>
                                <label for="prezioa" id="textua">Prezioa (€):</label><br>
                                <input type="number" name="prezioa" id="prezioa">
                                <br><br>
                                <label for="irteera" id="textua">Irteera Data:</label><br>
                                <input type="date" name="irteera" id="irteera">
                                <br><br>
                                <label for="ordua" id="textua">Irteera Ordua</label><br>
                                <input type="time" name="ordua" id="ordua">
                                <br><br>
                                <label for="iraupena" id="textua">Bidaiaren Iraupena (orduetan):</label><br>
                                <input type="number" name="iraupena" id="iraupena">
                    </div>

                    <div>
                        <div id="joanEtorri">
                            <label for="titulua" id="textua">Hegaldia (joana)</label><br>
                            <label for="jatorrizkoAireportua" id="textua">Jatorrizko Aireportua</label><br>
                            <select name="jatorrizkoAireportua" id="jatorrizkoAireportua">
                                    <option value="">--Aukeratu--</option>
                                    <?php
                                        //DATU BASETIK
                                        $sql = "select iata_kod, hiria from iata"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['iata_kod'] . "'>" . $row['hiria'] . "</option>";
                                            }
                                        }
                                        ?>
                                </select>
                                <br><br>
                                <label for=" helmugakoAireportua" id="textua">Helmugako Aireportua</label><br>
                                <select name="helmugakoAireportua" id="helmugakoAireportua">
                                    <option value="">--Aukeratu--</option>
                                </select>
                                <br><br>
                                <label for=" hegaldiKodea" id="textua">Hegaldi Kodea:</label><br>
                                    <input type="text" name="hegaldiKodea" id="hegaldiKodea">
                                    <br><br>
                                    <label for="airelinea" id="textua">Airelinea:</label><br>
                                    <select name="airelinea" id="airelinea">
                                        <option value="">--Aukeratu--</option>
                                        <?php
                                        //DATU BASETIK
                                        $sql = "select airelinea_kod, izena from iata"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['airelinea_kod'] . "'>" . $row['izena'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                    <br><br>
                                    <label for="prezioa" id="textua">Prezioa (€):</label><br>
                                    <input type="number" name="prezioa" id="prezioa">
                                    <br><br>
                                    <label for="irteera" id="textua">Irteera Data:</label><br>
                                    <input type="date" name="irteera" id="irteera">
                                    <br><br>
                                    <label for="ordua" id="textua">Irteera Ordua</label><br>
                                    <input type="time" name="ordua" id="ordua">
                                    <br><br>
                                    <label for="iraupena" id="textua">Bidaiaren Iraupena (orduetan):</label><br>
                                    <input type="number" name="iraupena" id="iraupena">
                                    <label for="titulua" id="textua">Hegaldia (joana)</label><br>
                                    <label for="jatorrizkoAireportua" id="textua">Jatorrizko Aireportua</label><br>
                                    <select name="jatorrizkoAireportua" id="jatorrizkoAireportua">
                                    <option value="">--Aukeratu--</option>
                                     <?php
                                        //DATU BASETIK
                                        $sql = "select iata_kod, hiria from iata"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['iata_kod'] . "'>" . $row['hiria'] . "</option>";
                                            }
                                        }
                                        ?>
                                </select>
                                <br><br>
                                <label for=" helmugakoAireportua" id="textua">Helmugako Aireportua</label><br>
                                        <select name="helmugakoAireportua" id="helmugakoAireportua">
                                    <option value="">--Aukeratu--</option>
                                     <?php
                                        //DATU BASETIK
                                        $sql = "select iata_kod, hiria from iata"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['iata_kod'] . "'>" . $row['hiria'] . "</option>";
                                            }
                                        }
                                        ?>
                                </select>
                                <br><br>
                                <label for="hegaldiKodea" id="textua">Hegaldi Kodea:</label><br>
                                            <input type="text" name="hegaldiKodea" id="hegaldiKodea">
                                            <br><br>
                                            <label for="airelinea" id="textua">Airelinea:</label><br>
                                            <select name="airelinea" id="airelinea">
                                                <option value="">--Aukeratu--</option>
                                                <?php
                                        //DATU BASETIK
                                        $sql = "select airelinea_kod, izena from iata"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['airelinea_kod'] . "'>" . $row['izena'] . "</option>";
                                            }
                                        }
                                        ?>
                                            </select>
                                            <br><br>
                                            <label for="prezioa" id="textua">Prezioa (€):</label><br>
                                            <input type="number" name="prezioa" id="prezioa">
                                            <br><br>
                                            <label for="irteera" id="textua">Irteera Data:</label><br>
                                            <input type="date" name="irteera" id="irteera">
                                            <br><br>
                                            <label for="ordua" id="textua">Irteera Ordua</label><br>
                                            <input type="time" name="ordua" id="ordua">
                                            <br><br>
                                            <label for="iraupena" id="textua">Bidaiaren Iraupena (orduetan):</label><br>
                                            <input type="number" name="iraupena" id="iraupena">
                                            <br><br>

                                            <label for="titulua2" id="textua">Hegaldia (etorria):</label><br>
                                            <label for="itzulera" id="textua">Itzulera Data:</label><br>
                                            <input type="date" name="itzulera" id="itzulera">
                                            <br><br>
                                            <label for="ordua2" id="text">Itzulera Ordua:</label>
                                            <input type="time" name="ordua2" id="ordua2">
                                            <br><br>
                                            <label for="iraupena2" id="textua">Bueltako Bidaiaren Iraupena
                                                (orduetan):</label><br>
                                            <input type="number" name="iraupena2" id="iraupena2">
                                            <br><br>
                                            <label for="bHegaldiKodea" id="textua">Bueltako Hegaldi Kodea:</label><br>
                                            <input type="text" name="bHegaldiKodea" id="bHegaldiKodea">
                                            <br><br>
                                            <label for="bAirelinea" id="textua">Bueltako Airelinea:</label><br>
                                            <select name="bAirelinea" id="bAirelinea">
                                                <option value="">--Aukeratu--</option>
                                                <?php
                                        //DATU BASETIK
                                        $sql = "select airelinea_kod, izena from iata"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['airelinea_kod'] . "'>" . $row['izena'] . "</option>";
                                            }
                                        }
                                        ?>
                                            </select>
                        </div>
                    </div>
                    <div id="ostatua">
                        <label for="hotelIzena">Hotelaren izena:</label><br>
                        <input type="text" name="hizena" id="hizena">
                        <br><br>
                        <label for="hiria" id="textua">Hiria:</label><br>
                        <input type="text" name="hiria" id="hiria">
                        <br><br>
                        <label for="prezioa">Prezioa (€):</label><br>
                        <input type="number" name="prezioa" id="prezioa">
                        <br><br>
                        <label for="sarrera">Sarrera Eguna:</label><br>
                        <input type="date" name="sarrera" id="sarrera">
                        <br><br>
                        <label for="irteera">Irteera Eguna:</label><br>
                        <input type="date" name="irteera" id="irteera">
                        <br><br>
                        <label for="logelaMota">Logela Mota:</label><br>
                        <select name="logela" id="logela">
                            <option value="">--Aukeratu--</option>
                            <?php
                                        //DATU BASETIK
                                        $sql = "select logela_mota_kod, desk  from logela_mota"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['logela_mota_kod'] . "'>" . $row['desk '] . "</option>";
                                            }
                                        }
                                        ?>
                        </select>
                    </div>
                    <div id="besteBatzuk">
                        <label for="izena" id="textua">Izena:</label><br>
                        <input type="text" name="bbizena" id="bbizena">
                        <br><br>
                        <label for="data" id="textua">Data:</label><br>
                        <input type="date" name="data" id="data">
                        <br><br>
                        <label for="deskribapena" id="textua">Deskribapena:</label><br>
                        <textarea name="deskribapena" id="deskribapena"></textarea>
                        <br><br>
                        <label for="prezioa" id="textua">Prezioa (€):</label><br>
                        <input type="number" name="prezioa" id="prezioa">
                    </div>
                    <br><br>
                    <input type="submit" name="gorde" id="gorde" value="Gorde">
            </form>
        </main>
    </div>
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
                <div class="lerroa">
                    <a href=""><img src="../img/Instagram-Icon.png" alt="instagram"></a>
                    <a href=""><img src="../img/Logo_de_Facebook.png" alt="facebook"></a>
                </div>
                <div class="lerroa">
                    <a href=""><img src="../img/tiktok_logojpg.jpg" alt="x"></a>
                    <a href=""><img src="../img/Linkedin-web-vt.png" alt=""></a>
                </div>
            </div>
            <div id="copyright">
                <p xmlns:cc="http://creativecommons.org/ns#">This work is licensed under <a
                        href="https://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank"
                        rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-ND 4.0<img
                            style="height:22px!important;margin-left:3px;vertical-align:text-bottom;"
                            src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt=""><img
                            style="height:22px!important;margin-left:3px;vertical-align:text-bottom;"
                            src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt=""><img
                            style="height:22px!important;margin-left:3px;vertical-align:text-bottom;"
                            src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt=""><img
                            style="height:22px!important;margin-left:3px;vertical-align:text-bottom;"
                            src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt=""></a>
                </p>
            </div>
        </footer>
    </div>
    <script src="../js/prueba.js"></script>
    <?php $conn->close(); ?>
</body>

</html>