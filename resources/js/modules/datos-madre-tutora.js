export function initDatosMadreTutora() {
    const ingresoMensual = document.getElementById('ingresoMensualMadre');
    const celular = document.getElementById('celularMadre');

    if (ingresoMensual) {
        ingresoMensual.addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
        });
    }

    if (celular) {
        celular.addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
        });
    }
}