export function initDomicilio() {
    const camposNumericos = [
        'codigoPostal',
        'numeroDomicilio',
        'telefonoCelularDomicilio',
        'telefonoLocalDomicilio'
    ];

    camposNumericos.forEach(id => {
        const campo = document.getElementById(id);
        if (campo) {
            campo.addEventListener('input', function () {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        }
    });
}