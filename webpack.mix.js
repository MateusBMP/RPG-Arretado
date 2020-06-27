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

mix.js('resources/js/auth/register.js', 'public/js/auth')
   .js('resources/js/app.js', 'public/js')
   .js('resources/js/home.js', 'public/js')
   .js('resources/js/mesa.js', 'public/js')
   .sass('resources/sass/auth/register.scss', 'public/css/auth')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/home.scss', 'public/css')
   .sass('resources/sass/mesa.scss', 'public/css')
   .extract(['vue'])
   .sourceMaps()
   .disableNotifications();
