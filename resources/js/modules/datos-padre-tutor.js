export function initDatosPadreTutor() {
    const ingresoMensual = document.getElementById('ingresoMensualPadre');
    const celular = document.getElementById('celularPadre');

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