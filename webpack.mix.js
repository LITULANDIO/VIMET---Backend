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
    'resources/assets/js/jquery/jquery-3.4.1.js',
    'resources/assets/js/bootstrap/bootstrap.js',
    'resources/assets/js/toastr/toastr.js',
    'resources/assets/js/vue/vue.js',
    'resources/assets/js/vue/axios.js',
    'resources/assets/js/vue/app.js',
    ],  'public/js/app.js')
    .styles([
    'resources/assets/css/bootstrap/bootstrap.css',
    'resources/assets/css/toastr/toastr.css',
    ], 'public/css/app.css');

  