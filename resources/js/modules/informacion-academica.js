export function initInformacionAcademica() {
    const promedio = document.getElementById('promedioGeneral');

    if (promedio) {
        promedio.addEventListener('input', function () {
            // Permite solo dígitos y un único punto decimal
            let valor = this.value.replace(/[^0-9.]/g, '');

            const partes = valor.split('.');
            if (partes.length > 2) {
                valor = partes[0] + '.' + partes.slice(1).join('');
            }

            // Limita a un decimal después del punto (ej. 8.5, 10.0)
            if (valor.includes('.')) {
                const [entero, decimal] = valor.split('.');
                valor = entero.slice(0, 2) + '.' + decimal.slice(0, 1);
            } else {
                valor = valor.slice(0, 2);
            }

            this.value = valor;
        });
    }
}