const mix = require('laravel-mix');

mix.styles([
    'resources/plantilla/css/font-awesome.min.css',
    'resources/plantilla/css/simple-line-icons.min.css',
    'resources/plantilla/css/style.css'
], 'public/css/plantilla.css')

mix.scripts([
    'resources/plantilla/js/jquery.min.js',
    'resources/plantilla/js/popper.min.js',
    'resources/plantilla/js/bootstrap.min.js',
    'resources/plantilla/js/Chart.min.js',
    'resources/plantilla/js/pace.min.js',
    'resources/plantilla/js/template.js',
    'resources/plantilla/js/sweetalert2.all.js'
], 'public/js/plantilla.js')
.js(['resources/js/app.js'],'public/js/app.js');