import './bootstrap';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import { initInformacionEstudiante } from './modules/informacion-estudiante';
import { initDatosPadreTutor } from './modules/datos-padre-tutor';
import { initDatosMadreTutora } from './modules/datos-madre-tutora';
import { initInformacionAcademica } from './modules/informacion-academica';
import { initDomicilio } from './modules/domicilio';

document.addEventListener('DOMContentLoaded', function () {
    initInformacionEstudiante();
    initDatosPadreTutor();
    initDatosMadreTutora();
    initInformacionAcademica();
    initDomicilio();
});