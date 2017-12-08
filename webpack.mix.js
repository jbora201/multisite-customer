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

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/components.css',
    'resources/assets/css/core.css',
    'resources/assets/css/icons.css',
	'resources/assets/css/pages.css',
	'resources/assets/css/responsive.css',
	'resources/assets/css/typicons.css',
	'resources/assets/css/variables.css'
    ], 'public/assets/css/styles.css');

mix.styles('resources/assets/css/builder.css', 'public/assets/css/builder.css');
	
mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');
mix.copyDirectory('resources/assets/images', 'public/assets/images');
mix.copyDirectory('resources/assets/js', 'public/assets/js');
mix.copyDirectory('resources/assets/less', 'public/assets/less');
mix.copyDirectory('resources/assets/pages', 'public/assets/pages');
mix.copyDirectory('resources/assets/plugins', 'public/assets/plugins');