<?php

if (file_exists('vendor/autoload.php')) {
	// load via composer
	require_once('vendor/autoload.php');
	$f3 = \Base::instance();
} elseif (!file_exists('lib/base.php')) {
	die('fatfree-core not found. Run `git submodule init` and `git submodule update` or install via composer with `composer install`.');
} else {
	// load via submodule
	/** @var Base $f3 */
	$f3=require('lib/base.php');
}

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<8.0)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

if($f3->get('DEBUG') == 0) {
	$f3->set('ruta', 'https://' . $f3->get('HOST') . '/');
}
else {
	$f3->set('ruta', 'http://' . $f3->get('HOST') . ':' . $f3->get('PORT') . '/');
}

$f3->route('GET /', "controllers\HomeController->HomeView");
$f3->route('GET /servicios', "controllers\HomeController->ServicesView");
$f3->route('GET /nosotros', "controllers\HomeController->AboutView");
$f3->route('GET /contacto', "controllers\HomeController->ContactView");
$f3->route('POST /enviar', "controllers\HomeController->SendContactForm");

$f3->run();
