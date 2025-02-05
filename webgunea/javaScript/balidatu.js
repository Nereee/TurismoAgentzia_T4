function bidaibal(){
    let izena = document.getElementById("izena").value.trim();
    let bidaiamota = document.getElementById("bidaiaMota").value.trim();
    let hasieraData = document.getElementById("hasieraData").value.trim();
    let amaieraData = document.getElementById("amaieraData").value.trim();
    let egunak = document.getElementById("egunak").value.trim();
    let herrialdea = document.getElementById("herrialdea").value.trim();
    let deskribapena = document.getElementById("deskribapena").value.trim();
    let kanpokoZerbitzuak = document.getElementById("kanpokoZerbitzuak").value.trim();

    // Verificar si hay campos vacíos
    if (!izena || !bidaiamota || !hasieraData || !amaieraData || !egunak || !herrialdea || !deskribapena || !kanpokoZerbitzuak) {
        alert("Mesedez bete ezazu hutsune guztiak");
        return;
    }else{
        erakutsiTaula();
    }

}
function gaurkoData(){
    // Obtener la fecha de hoy en formato YYYY-MM-DD
    let gaur = new Date();
    let urtea = gaur.getFullYear();
    let hilea = String(gaur.getMonth() + 1).padStart(2, '0'); // Meses empiezan en 0
    let eguna = String(gaur.getDate()).padStart(2, '0');

    let Minimoa = `${urtea}-${hilea}-${eguna}`;

    // Asignar la fecha mínima al input
    document.getElementById("hasieraData").setAttribute("min", Minimoa);
    document.getElementById("amaieraData").setAttribute("min", Minimoa);
            }

    function egunaKalkulatu(){

        let hasieraData = document.getElementById("hasieraData").value;
        let amaieraData = document.getElementById("amaieraData").value;

        if(!hasieraData || !amaieraData){
        alert("Mesedez bete ezazu hutsune guztiak");
        return;
    }

    let diff = new Date(amaieraData) - new Date(hasieraData);
            if (diff < 0) {
                alert("Errorea, amaiera data hasiera data baino handiagoa izan behar da");
                return;
            }

            // Calcular los días de diferencia
            let egunak = (diff / (1000 * 3600 * 24))+1; // convertir de milisegundos a días
            document.getElementById("egunak").value = egunak;
}

function erakutsiTaula() {
    let bidaia=document.getElementById("izena").value.trim();
    let bidaiMota=document.getElementById("bidaiaMota").value.trim();
    let hasieraData=document.getElementById("hasieraData").value;
    let amaieraData=document.getElementById("amaieraData").value;
    let egunak=document.getElementById("egunak").value.trim();
    let herrialdea=document.getElementById("herrialdea").value.trim();
    let deskribapena=document.getElementById("deskribapena").value.trim();
    
     document.querySelector("#taula").style.display = "table"; // Taula bistaratzea
     let filaNueva = `
         <tr>
             <td>${bidaia}</td>
             <td>${bidaiMota}</td>
             <td>${hasieraData}</td>
             <td>${amaieraData}</td>
             <td>${egunak}</td>
             <td>${herrialdea}</td>
             <td>${deskribapena}</td>
         </tr>`;
         document.querySelector("#taula tbody").insertAdjacentHTML("beforeend", filaNueva);
 
         document.querySelector("#bueltatu").style.display = "block";
 }

 function bueltatu(){
    window.location.href = '../index.html';
 }
    