export function initInformacionEstudiante() {
    const trabajasSelect = document.getElementById('trabajasSelect');
    const extraCampos = document.getElementById('trabajaExtraCampos');

    if (trabajasSelect && extraCampos) {
        trabajasSelect.addEventListener('change', function () {
            if (this.value === 'SI') {
                extraCampos.classList.remove('d-none');
            } else {
                extraCampos.classList.add('d-none');
                extraCampos.querySelectorAll('input').forEach(input => input.value = '');
            }
        });
    }
}