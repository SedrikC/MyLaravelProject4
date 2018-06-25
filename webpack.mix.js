let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'public/css/Admin.css',
    'public/css/Datenschutz.css',
    'public/css/EasyPlanHome.css',
    'public/css/Erstellen.css',
    'public/css/Kontakt.css',
    'public/css/Mein_Profil.css',
    'public/css/PollErstellen.css',
    'public/css/Profile.css',
    'public/css/Startseitecss.css',
    'public/css/VProfil.css'

],'public/css/combinedCss.css');

