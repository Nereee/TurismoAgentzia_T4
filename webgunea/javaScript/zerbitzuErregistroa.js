function formularioakIkusi() {
    let hegaldiaId = document.getElementById("hegaldia");
    let aldakorraForm = document.getElementById("aldakorra");
    let ostatuaId = document.getElementById("ostatua");
    let ostatuaForm = document.getElementById("ostatu");
    let besteBatzukId = document.getElementById("besteBatzuk");
    let besteBatzukForm = document.getElementById("besteBatzu");
    let joanId = document.getElementById("joan");
    let joanForm = document.getElementById("joana");
    let joanEtorriId = document.getElementById("joanEtorri");
    let joanEtorriForm = document.getElementById("joanEtorria");

    aldakorraForm.style.display = "none"; 
    ostatuaForm.style.display = "none";  
    besteBatzukForm.style.display = "none";  
    joanForm.style.display = "none";  
    joanEtorriForm.style.display = "none";  

    if (hegaldiaId.checked) {
        aldakorraForm.style.display = "block";
        joanForm.style.display = "none";  
         joanEtorriForm.style.display = "none";  
        if(joanId.checked){
            joanForm.style.display = "block";
        }
        if(joanEtorriId.checked){
            joanEtorriForm.style.display = "block";
        }
    }
    if(ostatuaId.checked){
        ostatuaForm.style.display = "block";
    }
    if(besteBatzukId.checked){
        besteBatzukForm.style.display = "block";
    }
}

function prezioaBalidatu(prezioa){
    let prezio=document.getElementById(prezioa).value;

if(prezio<0){
    alert("Mesedez, ondo jarri prezioa");
    return;
}

}

function datakBalidatu(hasieraData, amaieraData){
    let hasiDataInput = document.getElementById(hasieraData).value;
    let amaituDataInput = document.getElementById(amaieraData).value;

    let hasiData = new Date(hasiDataInput);
    let amaituData = new Date(amaituDataInput);

    if(amaituData<hasiData){
        alert("Mesedez ezarri ondo datak");
        document.getElementById(amaieraData).value = "";
    }
}

function zeinPhp(event){
    event.preventDefault();

    let formularioa=document.getElementById("formularioa");
    let joan=document.getElementById("joan");
    let joanEtorri=document.getElementById("joanEtorri");
    let ostatu=document.getElementById("ostatua");
    let besteBatzuk=document.getElementById("besteBatzuk");

    let url = ""; 

    if(joan.checked){
        url= '../php/datuakGordeZJ.php';
    }else if(joanEtorri.checked){
        url = '../php/datuakGordeZJE.php';
    }else if(ostatu.checked){
        url = '../php/datuakGordeZO.php';
    }else if(besteBatzuk.checked){
        url= '../php/datuakGordeZBB.php';
    }else{
        alert("Mesedez bete ezazu hutsune guztiak");
        return;
    }

    formularioa.action = url;
    formularioa.submit();
}

function erakutsiTaula1() {
    let hegaldiKodea=document.getElementById("hegaldiKodea").value.trim();
    let ordua=document.getElementById("ordua").value.trim();
    let irteera=document.getElementById("irteera").value;
    let iraupena=document.getElementById("iraupena").value;
    let prezioa=document.getElementById("prezioa").value.trim();
    let jatorrizkoAireportua=document.getElementById("jatorrizkoAireportua1").value.trim();
    let helmugakoAireportua=document.getElementById("helmugakoAireportua").value.trim();
    let airelinea=document.getElementById("airelinea").value.trim();
    
    let botoia = document.getElementById("gorde1");


if(!hegaldiKodea || !ordua || !irteera || !iraupena || !prezioa || !jatorrizkoAireportua || !helmugakoAireportua || !helmugakoAireportua || !airelinea){

    alert("Mesedez bete ezazu hutsune guztiak");

}else{

     document.querySelector("#taula1").style.display = "table"; // Taula bistaratzea
     let filaNueva = `
         <tr>
             <td>${hegaldiKodea}</td>
             <td>${ordua}</td>
             <td>${irteera}</td>
             <td>${iraupena}</td>
             <td>${prezioa}</td>
             <td>${jatorrizkoAireportua}</td>
             <td>${helmugakoAireportua}</td>
             <td>${airelinea}</td>
         </tr>`;
         document.querySelector("#taula1 tbody").insertAdjacentHTML("beforeend", filaNueva);
 
         document.querySelector("#ikusi1").style.display = "block";
         botoia.style.display = "block"; 
}
 }

 function erakutsiTaula2() {
    let hegaldiKodea1 = document.getElementById("hegaldiKodea1").value.trim();
    let ordua1 = document.getElementById("ordua1").value;
    let hasieraData1 = document.getElementById("irteera3").value;
    let iraupena1 = document.getElementById("iraupena1").value;
    let prezioa1 = document.getElementById("prezioa3").value;
    let airelinea1 = document.getElementById("airelinea3").value;

    let hegaldiKodea2 = document.getElementById("bHegaldiKodea").value.trim();
    let ordua2 = document.getElementById("ordua2").value;
    let hasieraData2 = document.getElementById("itzulera").value;
    let iraupena2 = document.getElementById("iraupena2").value;
    let airelinea2 = document.getElementById("bAirelinea").value;

    let botoia = document.getElementById("gorde1");

console.log(hegaldiKodea1,ordua1, hasieraData1, prezioa1, airelinea1, hegaldiKodea2, ordua2, hasieraData2, iraupena2, airelinea2)

if (!hegaldiKodea1 || !ordua1 || !hasieraData1 || !iraupena1 || !prezioa1 || !airelinea1 ||
    !hegaldiKodea2 || !ordua2 || !hasieraData2 || !iraupena2 || !airelinea2) {
        alert("Mesedez bete ezazu hutsune guztiak");
        return; 

}else{

     document.querySelector("#taula2").style.display = "table"; // Taula bistaratzea
     let filaNueva = `
         <tr>
             <td>${hegaldiKodea1}</td>
             <td>${ordua1}</td>
             <td>${hasieraData1}</td>
             <td>${iraupena1}</td>
             <td>${prezioa1}</td>
             <td>${airelinea1}</td>
            <td>${hegaldiKodea2}</td>
             <td>${ordua2}</td>
             <td>${hasieraData2}</td>
             <td>${iraupena2}</td>
             <td>${airelinea2}</td>
         </tr>`;
         document.querySelector("#taula2 tbody").insertAdjacentHTML("beforeend", filaNueva);
 
         document.querySelector("#ikusi2").style.display = "block";
         botoia.style.display = "block"; 
 }
 }

 function erakutsiTaula3() {
    let izena=document.getElementById("hizena").value.trim();
    let hiria=document.getElementById("hiria").value.trim();
    let prezioa=document.getElementById("prezioa4").value.trim();
    let sarrera=document.getElementById("sarrera").value.trim();
    let irteera=document.getElementById("irteera4").value.trim();
    let logelaMota=document.getElementById("logelaMota").value.trim();
    
    let botoia = document.getElementById("gorde1");


if(!izena || !hiria || !prezioa || !sarrera || !irteera || !logelaMota ){

    alert("Mesedez bete ezazu hutsune guztiak");

}else{

     document.querySelector("#taula3").style.display = "table"; // Taula bistaratzea
     let filaNueva = `
         <tr>
             <td>${izena}</td>
             <td>${hiria}</td>
             <td>${prezioa}</td>
             <td>${sarrera}</td>
             <td>${irteera}</td>
             <td>${logelaMota}</td>
         </tr>`;
         document.querySelector("#taula3 tbody").insertAdjacentHTML("beforeend", filaNueva);
 
         document.querySelector("#ikusi3").style.display = "block";
         botoia.style.display = "block"; 
        }
 }

 function erakutsiTaula4() {
    let izena=document.getElementById("bbizena").value.trim();
    let data=document.getElementById("data").value.trim();
    let desk=document.getElementById("deskribapena").value.trim();
    let prezioa=document.getElementById("prezioa5").value.trim();
    
    let botoia = document.getElementById("gorde1");


if(!izena || !data || !desk || !prezioa ){

    alert("Mesedez bete ezazu hutsune guztiak");

}else{

     document.querySelector("#taula4").style.display = "table"; // Taula bistaratzea
     let filaNueva = `
         <tr>
             <td>${izena}</td>
             <td>${data}</td>
             <td>${desk}</td>
             <td>${prezioa}</td>
         </tr>`;
         document.querySelector("#taula4 tbody").insertAdjacentHTML("beforeend", filaNueva);
 
         document.querySelector("#ikusi4").style.display = "block";
         botoia.style.display = "block"; 
        }
}

function dataOndo(hasiData, amaituData){
    let hData=document.getElementById(hasiData).value;
    let aData=document.getElementById(amaituData).value;


    let kalkulatu = new Date(aData) - new Date(hData);

    if(kalkulatu < 0){
        alert("Mesedez ondo jarri datak");
        return;
    }


}
    