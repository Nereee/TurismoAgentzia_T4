function formularioakIkusi(hasieraId, formularioaId) {
    let hasiera = document.getElementById(hasieraId);
    let formularioa = document.getElementById(formularioaId);
    console.log(hasiera);
    console.log(formularioa);
        if (hasiera.checked) {
            alert("hartu");
            formularioa.style.display = "block";
        } else if(!hasiera.checked) {
            formularioa.style.display = "none";
        }
    }
