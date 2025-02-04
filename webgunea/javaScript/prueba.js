function formularioakIkusi(idFormulario) {
    const formularioa = document.querySelectorAll('div[id^="form-"]');
    formularioa.forEach(formulario => formulario.classList.add('hidden'));

    const formularioAukeratuta = document.getElementById(idFormulario);
    formularioAukeratuta.classList.remove('hidden');
}