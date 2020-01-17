Phumbor for Laravel 5/6
=====================

This Laravel package adds support for [the 99designs PHP interface](https://github.com/99designs/phumbor) to the [globocom Thumbor thumbnail service](https://github.com/globocom/thumbor).

It is compatible with Laravel 5+ and Laravel 6+.

Installation
------------

Simply run this command in your project root:

    composer require r0bdiablo/laravel5-phumbor
or require the package in your `composer.json` file:

    "r0bdiabl0/laravel5-phumbor": "^1.0"

Run `composer install` to download the package and have the autoloader updated.

Once installed, register the service provider with your Laravel application. Update the `providers` section of `config/app.php`:

	'providers' = array(
		// existing providers
		R0bdiabl0\Laravel5Phumbor\Laravel5PhumborServiceProvider::class,
	);

and register the facade in the `aliases` section:

	'aliases' => array(
		// existing aliases
		'Phumbor'   => R0bdiabl0\Laravel5Phumbor\Facades\Phumbor::class,
	);

Now, publish the package's config file:

    php artisan vendor:publish

which will publish the default configuration file to `config/laravel5-phumbor.php`.

You should modify this file to reflect your Thumbor installation's URL and secret key.

Usage
-----

The `Phumbor` facade exposes the API from [the 99designs PHP interface](https://github.com/99designs/phumbor).

For example:

    Phumbor::url('http://images.example.com/llamas.jpg')
	    ->fitIn(640, 480)
		->addFilter('fill', 'green');

License
-------

Licensed under the MIT license. See <https://github.com/r0bdiabl0/laravel5-phumbor/blob/master/LICENSE>
