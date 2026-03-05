import './bootstrap';

import * as bootstrap from 'bootstrap'
import Swal from 'sweetalert2';
import $ from 'jquery'


window.$ = window.jQuery = $;
window.bootstrap = bootstrap;
window.Swal = Swal;


import 'summernote/dist/summernote-lite.js';
import 'summernote/dist/summernote-lite.css';

import 'datatables.net'
import 'datatables.net-bs5'


$("#contenido").summernote({
    height: 500,
    placeholder: 'Redacción del artículo'
})

$("#tabla-articulos").DataTable()