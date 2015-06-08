var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
});

/**



// to compile, run gulp
// to compile on the fly, run gulp watch
// to minimize, run gulp --production

	mix.styles([
		'vendor/normalize.css',
		'app.css'
	], 'public/output/final.css', 'public/css');

// public/css is the base directory where it is looking for input. no need since we have our stuff in resources/assets

	mix.version('all.css'); // prevents caching thorugh versioning - not 100% sure how to do 


// to minimize and merge javascript, use mix.scripts
// scripts will look in resources/js

mix.scripts([
	'vendor/jquery.js',
	'main.js',
	'coupon.js'

], 'public/output/scripts.js', 'public/js');

**/