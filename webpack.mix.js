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

mix.sass('resources/sass/app.scss', 'public/css')   // app.css
    .options({
        postCss: [
            require('autoprefixer')
        ]
    })
    .copy('node_modules/intl-tel-input/build/css/intlTelInput.css', 'public/css/intl-tel-input/intlTelInput.css')
    .copy('node_modules/intl-tel-input/build/img/*', 'public/images/intl-tel-input')
    .copy('node_modules/intl-tel-input/build/js/*', 'public/js/intl-tel-input')
    .js('resources/js/app.js','public/js/app.js').vue()
    .extract(["axios","vue","bootstrap"])
    .version();
