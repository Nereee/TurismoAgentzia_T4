document.addEventListener('DOMContentLoaded',  function(){
    const radios = document.querySelectorAll('input[name="zerbitzuMota"]');
    const aldakorra = document.getElementById('aldakorra');

    radios.forEach(radio => {
        radio.addEventListener('change', function(){
            aldakorra.innerHTML = '';
            if(this.value === 'hegaldia'){
                aldakorra.innerHTML = `
                    <label for="hegaldia">Hegaldia</label><br>
                    <label for="hegaldiMota">Zein hegaldia mota da?</label>
                    <div class="aukerak">
                        <div>
                            <input type="radio" name="hegaldiMota" value="joan" id="joan"> <label for="joan" id="textua">Joan</label>
                        </div>
                        <div>
                            <input type="radio" name="hegaldiMota" value="joanEtorri" id="joanEtorri"> <label for="joanEtorri" id="textua" >Joan / Etorri</label>
                        </div>
                    </div>
                `;
                const radioak = document.querySelectorAll('input[name="hegaldiMota"]');
                const subAldakorra = document.getElementById('subAldakorra');

                radioak.forEach(radio => {
                    radio.addEventListener('change', function(){
                        subAldakorra.innerHTML = '';
                        if(this.value === 'joan'){
                            subAldakorra.innerHTML = `
                                <label for="titulua" id="textua">Hegaldia (joana)</label><br>
                                <label for="jatorrizkoAireportua" id="textua">Jatorrizko Aireportua</label><br>
                                <select name="jatorrizkoAireportua" id="jatorrizkoAireportua>
                                    <option value"">--Aukeratu--</option>
                                </select>
                                <br><br>
                                <label for="helmugakoAireportua" id="textua">Helmugako Aireportua</label><br>
                                <select name="helmugakoAireportua" id="helmugakoAireportua>
                                    <option value"">--Aukeratu--</option>
                                </select>
                                <br><br>
                                <label for="hegaldiKodea" id="textua">Hegaldi Kodea:</label><br>
                                <input type="text" name="hegaldiKodea" id="hegaldiKodea">
                                <br><br>
                                <label for="airelinea" id="textua">Airelinea:</label><br>
                                <select name="airelinea" id="airelinea">
                                    <option value="">--Aukeratu--</option>
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
                            `;
                        }else if(this.value === 'joanEtorri'){
                            subAldakorra.innerHTML = `
                                <label for="titulua" id="textua">Hegaldia (joana)</label><br>
                                <label for="jatorrizkoAireportua" id="textua">Jatorrizko Aireportua</label><br>
                                <select name="jatorrizkoAireportua" id="jatorrizkoAireportua>
                                    <option value"">--Aukeratu--</option>
                                </select>
                                <br><br>
                                <label for="helmugakoAireportua" id="textua">Helmugako Aireportua</label><br>
                                <select name="helmugakoAireportua" id="helmugakoAireportua>
                                    <option value"">--Aukeratu--</option>
                                </select>
                                <br><br>
                                <label for="hegaldiKodea" id="textua">Hegaldi Kodea:</label><br>
                                <input type="text" name="hegaldiKodea" id="hegaldiKodea">
                                <br><br>
                                <label for="airelinea" id="textua">Airelinea:</label><br>
                                <select name="airelinea" id="airelinea">
                                    <option value="">--Aukeratu--</option>
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
                                <label for"itzulera" id="textua">Itzulera Data:</label><br>
                                <input type="date" name="itzulera" id="itzulera">
                                <br><br>
                                <label for="ordua2" id="text">Itzulera Ordua:</label>
                                <input type="time" name="ordua2" id="ordua2">
                                <br><br>
                                <label for="iraupena2" id="textua">Bueltako Bidaiaren Iraupena (orduetan):</label><br>
                                <input type="number" name="iraupena2" id="iraupena2">
                                <br><br>
                                <label for="bHegaldiKodea" id="textua">Bueltako Hegaldi Kodea:</label><br>
                                <input type="text" name="bHegaldiKodea" id="bHegaldiKodea">
                                <br><br>
                                <label for="bAirelinea" id="textua">Bueltako Airelinea:</label><br>
                                <select name="bAirelinea" id="bAirelinea">
                                    <option value="">--Aukeratu--</option>
                                </select>
                            `;
                        }
                    });
                });
            }else if(this.value === 'ostatua'){
                aldakorra.innerHTML = `
                    <label for="hotelIzena">Hotelaren izena:</label><br>
                    <input type="text" name="hizena" id"hizena">
                    <br><br>
                    <label for"hiria" id="textua">Hiria:</label><br>
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
                    </select>
                `;
            }else if(this.value === 'besteBatzuk'){
                aldakorra.innerHTML = `
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
                `;
            }
        });
    });
});