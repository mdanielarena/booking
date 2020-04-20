const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.scripts([
    'resources/assets_js/jquery-2.1.4.min.js',
    'resources/assets_js/bootstrap.min.js',
    'resources/assets_js/jquery-ui.min.js',
    'resources/assets_js/DateTimePicker.min.js',
    'resources/assets_js/jquery.ba-throttle-debounce.min.js',
    'resources/assets_js/idangerous.swiper.min.js',
    'resources/assets_js/jquery.viewportchecker.min.js',
    'resources/assets_js/isotope.pkgd.min.js',
    'resources/assets_js/jquery.mousewheel.min.js',
    'resources/assets_js/base64.js',
    'resources/assets_js/all.js',
],'public/js/assets_js.js')
.styles([
    'resources/assets_css/bootstrap.min.css',
    'resources/assets_css/jquery-ui.structure.min.css',
    'resources/assets_css/jquery-ui.min.css',
    'resources/assets_css/font-awesome.min.css',
    'resources/assets_css/DateTimePicker.min.css',
    'resources/assets_css/style.css',
 ],'public/css/assets_css.css')
.js('resources/js/pages/searchResults.js','public/js')
.js('resources/js/pages/searchBar.js','public/js')
.js('resources/js/pages/login.js','public/js')
.version();
