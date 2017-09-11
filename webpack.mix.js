const mix = require('laravel-mix');

mix.js('resources/assets/js/head.js', 'public/assets/js/head.js')
    .sass('resources/assets/sass/main.scss', 'public/assets/css/main.css')
    .options({
        processCssUrls: false,
    });