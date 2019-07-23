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

mix .js('resources/js/youplay.js', 'public/js')
    .js('resources/js/youplay-init.js', 'public/js')
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/youplay.scss', 'public/css')

    /*
    * Stylesheets
    */
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
    .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .copy('node_modules/flickity/dist/flickity.min.css', 'public/css/flickity.min.css')
    .copy('node_modules/magnific-popup/dist/magnific-popup.css', 'public/css/magnific-popup.css')
    .copy('node_modules/bootstrap-sweetalert/dist/sweetalert.css', 'public/css/sweetalert.css')
    .copy('node_modules/social-likes/dist/social-likes_flat.css', 'public/css/social-likes_flat.css')


    /*
    * Scripts
    */
    .copy('node_modules/jarallax/dist/jarallax.min.js', 'public/js/jarallax.min.js')
    .copy('node_modules/@fortawesome/fontawesome-free/js/all.js', 'public/js/all.js')
    .copy('node_modules/@fortawesome/fontawesome-free/js/v4-shims.js', 'public/js/v4-shims.js')
    .copy('node_modules/object-fit-images/dist/ofi.min.js', 'public/js/ofi.min.js')
    .copy('node_modules/HexagonProgress/jquery.hexagonprogress.min.js', 'public/js/jquery.hexagonprogress.min.js')
    .copy('node_modules/flickity/dist/flickity.pkgd.min.js', 'public/js/flickity.pkgd.min.js')
    .copy('node_modules/jquery-countdown/dist/jquery.countdown.min.js', 'public/js/jquery.countdown.min.js')
    .copy('node_modules/moment/min/moment.min.js', 'public/js/moment.min.js')
    .copy('node_modules/moment-timezone/builds/moment-timezone-with-data.min.js', 'public/js/moment-timezone-with-data.min.js')
    .copy('node_modules/magnific-popup/dist/jquery.magnific-popup.min.js', 'public/js/jquery.magnific-popup.min.js')
    .copy('node_modules/imagesloaded/imagesloaded.pkgd.min.js', 'public/js/imagesloaded.pkgd.min.js')
    .copy('node_modules/isotope-layout/dist/isotope.pkgd.min.js', 'public/js/isotope.pkgd.min.js')
    .copy('node_modules/bootstrap-validator/dist/validator.min.js', 'public/js/validator.min.js')
    .copy('node_modules/bootstrap-sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert.min.js')
    .copy('node_modules/social-likes/dist/social-likes.min.js', 'public/js/social-likes.min.js')

     .version();
