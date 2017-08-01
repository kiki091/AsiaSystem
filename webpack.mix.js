const { mix } = require('laravel-mix');

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

mix.styles([
    'public/themes/css/bootstrap.min.css',
    'public/themes/css/framework.css',
    'public/themes/css/layout.css',
    'public/themes/css/custom.css',
    'public/themes/css/custom.flexslider.css',
    'public/themes/css/icomoon.css',
], 'public/build/css/plugins.css');


mix.scripts([
	'public/themes/js/jquery.min.js',
	'public/themes/js/custom.js',
], 'public/build/js/core.js');

mix.scripts([
	'public/themes/js/jquery.min.js',
	'public/themes/js/jquery.backtotop.js',
	'public/themes/js/jquery.mobilemenu.js',
	'public/themes/js/jquery.flexslider-min.js',
	'public/themes/js/smoothscroll.js',
	'public/themes/js/scrollreveal.js',
], 'public/build/js/plugins.js');
