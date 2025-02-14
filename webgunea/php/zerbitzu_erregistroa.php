
 <?php
require 'conexioa.php';
session_start();
?> 

<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zerbitzu Erregistroa</title>
    <link rel="icon" type="img/png" href="../img/bilboviajes.png">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/maketazioa.css">
    <link rel="stylesheet" href="../style/erregistroa.css">
    <script defer src="../javaScript/bola.js"></script>
    <script defer src="../javaScript/atzekoPlanoa.js"></script>
    <script defer src="../javaScript/balidatu.js"></script>
    <script defer src="../javaScript/zerbitzuErregistroa.js"></script>
    <!--<script defer src="../javaScript/zerbitzuErregistroa.js"></script>-->
</head>

<body>
    <div id="container">
        <canvas id="atzekoPlanoa"></canvas>
        <header id="goiburua">
            <a href="index.html"><img src="../img/bilboviajes.png" alt="logo"></a>
            <nav>
                <ul>
                    <li><a href="../index.html">Hasiera</a></li>
                    <li><a href="../aboutus.html">Nortzuk gara?</a></li>
                    <li><a href="bidai_erregistroa.php">Bidaiak erregistratu</a></li>
                    <li><a href="#">Zerbitzuak erregistratu</a></li>
                    <li id="itxiSaioa"><button><a href="../index.html">Itxi saioa</a></button></li>
                </ul>
            </nav>
        </header>

        <main>
            <form action="#" id="formularioa" method="POST">
                <label for="bidaia" class="textua">Aukeratu bidaia:</label><br>
                <select name="bidaia" class="bidaia">
                    <option value="">--Aukeratu--</option>
                    <?php
                //DATU BASETIK
                $sql = "select Izena, Bidaia_id from bidaia"; 
                $result = $conn->query($sql);//exekutatu
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['Bidaia_id'] . "'>" . $row['Izena'] . "</option>";
                    }
                }
                ?>
                </select>
                <br><br>
                <label for="zerbitzuMota" id="textua">Zein zerbitzu erregistratu behar duzu?</label><br>
                <div class="zerbitzuMota">
                    <div>
                        <input type="radio" name="zerbitzuMota" value="hegaldia" id="hegaldia" onclick="formularioakIkusi()"> <label for="hegaldia"
                        class="textua">Hegaldia</label>

                    </div>
                    <div>
                        <input type="radio" name="zerbitzuMota" value="ostatua" id="ostatua" onclick="formularioakIkusi()"> <label for="ostatua"
                        class="textua">Ostatua</label>
                    </div>
                    <div>
                        <input type="radio" name="zerbitzuMota" value="besteBatzuk" id="besteBatzuk" onclick="formularioakIkusi()"> <label
                            for="besteBatzuk" class="textua" >Beste Batzuk</label>
                    </div>
                </div>
                <div id="aldakorra">
                        <label for="hegaldia">Hegaldia</label><br>
                        <label for="hegaldiMota">Zein hegaldia mota da?</label>
                        <div>
                            <label for="joan" class="textua" >Joan</label>
                            <input type="radio" name="hegaldiMota" value="joan" id="joan" onclick="formularioakIkusi()"> 
                        </div>
                        <div>
                            <label for="joanEtorri" class="textua">Joan / Etorri</label>
                            <input type="radio" name="hegaldiMota" value="joanEtorri" id="joanEtorri" onclick="formularioakIkusi()"> 
                        </div>
                </div>
                

                    <div id="joana">
                        <label for="titulua" class="textua">Hegaldia (joana)</label><br>
                        <label for="jatorrizkoAireportua1" class="textua">Jatorrizko Aireportua</label><br>
                        <select name="jatorrizkoAireportua1" id="jatorrizkoAireportua1" required>
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
                                <label for=" helmugakoAireportua" id="textua">Helmugako Aireportua</label><br>
                            <select name="helmugakoAireportua" id="helmugakoAireportua" required>
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
                                <input type="text" name="hegaldiKodea" id="hegaldiKodea" required>
                                <br><br>
                                <label for="airelinea" id="textua">Airelinea:</label><br>
                                <select name="airelinea" id="airelinea" required>
                                    <option value="">--Aukeratu--</option>
                                    <?php
                                        //DATU BASETIK
                                        $sql = "select airelinea_kod, izena from airelinea"; 
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
                                <input type="number" name="prezioa" id="prezioa" required onblur="prezioaBalidatu('prezioa')">
                                <br><br>
                                <label for="irteera" id="textua">Irteera Data:</label><br>
                                <input type="date" name="irteera" id="irteera" required onclick="gaurkoData('irteera')">
                                <br><br>
                                <label for="ordua" id="textua">Irteera Ordua</label><br>
                                <input type="time" name="ordua" id="ordua" required>
                                <br><br>
                                <label for="iraupena" id="textua">Bidaiaren Iraupena (orduetan):</label><br>
                                <input type="number" name="iraupena" id="iraupena" required><br><br>
                                <input type="button" name="ikusi1" id="ikusi1" onclick="erakutsiTaula1()" value="Ikusi">
                    </div>

<div id="joanEtorria">
    <label for="titulua">Hegaldia (joana)</label><br>
    <label for="jatorrizkoAireportua2">Jatorrizko Aireportua</label><br>
    <select name="jatorrizkoAireportua2" id="jatorrizkoAireportua2">
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
    
    <label for="helmugakoAireportua3">Helmugako Aireportua</label><br>
    <select name="helmugakoAireportua3" id="helmugakoAireportua3">
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

    <label for="hegaldiKodea1">Hegaldi Kodea:</label><br>
    <input type="text" name="hegaldiKodea1" id="hegaldiKodea1">
    <br><br>

    <label for="airelinea3">Airelinea:</label><br>
    <select name="airelinea3" id="airelinea3">
        <option value="">--Aukeratu--</option>
        <?php
        $sql = "select airelinea_kod, izena from airelinea"; 
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['airelinea_kod'] . "'>" . $row['izena'] . "</option>";
            }
        }
        ?>
    </select>
    <br><br>

    <label for="prezioa3">Prezioa (€):</label><br>
    <input type="number" name="prezioa3" id="prezioa3" onblur="prezioaBalidatu('prezioa3')">
    <br><br>

    <label for="irteera3">Irteera Data:</label><br>
    <input type="date" name="irteera3" id="irteera3" onclick="gaurkoData('irteera3')">
    <br><br>

    <label for="ordua1">Irteera Ordua:</label><br>
    <input type="time" name="ordua1" id="ordua1">
    <br><br>

    <label for="iraupena1">Bidaiaren Iraupena (orduetan):</label><br>
    <input type="number" name="iraupena1" id="iraupena1">
    <br><br>

    <label for="titulua2">Hegaldia (etorria):</label><br>

    <label for="itzulera">Itzulera Data:</label><br>
    <input type="date" name="itzulera" id="itzulera" onclick="gaurkoData('itzulera')" onblur="dataOndo('irteera3', 'itzulera')">
    <br><br>

    <label for="ordua2">Itzulera Ordua:</label><br>
    <input type="time" name="ordua2" id="ordua2">
    <br><br>

    <label for="iraupena2">Bueltako Bidaiaren Iraupena (orduetan):</label><br>
    <input type="number" name="iraupena2" id="iraupena2">
    <br><br>

    <label for="bHegaldiKodea">Bueltako Hegaldi Kodea:</label><br>
    <input type="text" name="bHegaldiKodea" id="bHegaldiKodea">
    <br><br>

    <label for="bAirelinea">Bueltako Airelinea:</label><br>
    <select name="bAirelinea" id="bAirelinea">
        <option value="">--Aukeratu--</option>
        <?php
        $sql = "select airelinea_kod, izena from airelinea"; 
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['airelinea_kod'] . "'>" . $row['izena'] . "</option>";
            }
        }
        ?>
    </select>

    <input type="button" name="ikusi2" id="ikusi2" onclick="erakutsiTaula2()" value="Ikusi">
</div>

                <div id="ostatu">
                        <label for="hotelIzena">Hotelaren izena:</label><br>
                        <input type="text" name="hizena" id="hizena" name="hizena">
                        <br><br>
                        <label for="hiria" id="textua">Hiria:</label><br>
                        <input type="text" name="hiria" id="hiria" name="hiria">
                        <br><br>
                        <label for="prezioa4">Prezioa (€):</label><br>
                        <input type="number" name="prezioa4" id="prezioa4" onblur="prezioaBalidatu('prezioa4')">
                        <br><br>
                        <label for="sarrera">Sarrera Eguna:</label><br>
                        <input type="date" name="sarrera" id="sarrera" onclick="gaurkoData('sarrera')">
                        <br><br>
                        <label for="irteera4">Irteera Eguna:</label><br>
                        <input type="date" name="irteera4" id="irteera4" onclick="gaurkoData('irteera4')" onblur="dataOndo('sarrera', 'irteera4')">
                        <br><br>
                        <label for="logelaMota">Logela Mota:</label><br>
                        <select name="logelaMota" id="logelaMota">
                            <option value="">--Aukeratu--</option>
                          <?php
                                        //DATU BASETIK
                                        $sql = "select logela_mota_kod, desk  from logela_mota"; 
                                        $result = $conn->query($sql);//exekutatu
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['logela_mota_kod'] . "'>" . $row['desk'] . "</option>";
                                            }
                                        }
                                        ?>
                        </select>
                        <input type="button" name="ikusi3" id="ikusi3" onclick="erakutsiTaula3()" value="Ikusi">
            </div>
                    <div id="besteBatzu">
                        <label for="izena" id="textua">Izena:</label><br>
                        <input type="text" name="bbizena" id="bbizena">
                        <br><br>
                        <label for="data" id="textua">Data:</label><br>
                        <input type="date" name="data" id="data" onclick="gaurkoData('data')">
                        <br><br>
                        <label for="deskribapena" id="textua">Deskribapena:</label><br>
                        <textarea name="deskribapena" id="deskribapena"></textarea>
                        <br><br>
                        <label for="prezioa5" id="textua">Prezioa (€):</label><br>
                        <input type="number" name="prezioa5" id="prezioa5" onblur="prezioaBalidatu('prezioa5')"><br><br>
                        <input type="button" name="ikusi4" id="ikusi4" onclick="erakutsiTaula4()" value="Ikusi">
                </div>
                    <br><br>
            </form>
            <table id="taula1">
                <thead> 
            <tr>
                <th>Hegaldi izena</th>
                <th>Ordua</th>
                <th>Hasiera data</th>
                <th>Iraupena</th>
                <th>Prezioa</th>
                <th>Jatorrizko aieroportua</th>
                <th>Helmugako aireportua</th>
                <th>Airelinea</th>
            </tr>
        </thead>
            <tbody></tbody>
                </table>

            <table id="taula2">
                <thead> 
            <tr>
                <th colspan="6">Joan</th>
                <th colspan="5">Etorri</th>
            </tr>
            <tr>
                <th>Hegaldi izena</th>
                <th>Ordua</th>
                <th>Hasiera data</th>
                <th>Iraupena</th>
                <th>Prezioa</th>
                <th>Airelinea</th>
                <th>Hegaldi izena</th>
                <th>Ordua</th>
                <th>Hasiera data</th>
                <th>Iraupena</th>
                <th>Airelinea</th>
                </tr>
        </thead>
            <tbody></tbody>
                </table>

                <table id="taula3">
                    <thead> 
                <tr>
                    <th>Izena</th>
                    <th>Hiria</th>
                    <th>Prezioa</th>
                    <th>Hasiera data</th>
                    <th>Amaiera data</th>
                    <th>Logela mota</th>
                </tr>
            </thead>
                <tbody></tbody>

            </table>
            <table id="taula4">
                <thead> 
            <tr>
                <th>Izena</th>
                <th>Data</th>
                <th>Deskripzioa</th>
                <th>Prezioa</th>
            </tr>
        </thead>
            <tbody></tbody>
                </table>
         </select>
         <input type="submit" name="gorde1" id="gorde1" onclick="zeinPhp(event)" value="Gorde">
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
      <?php $conn->close(); ?>

</html>