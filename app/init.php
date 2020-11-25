<?php
date_default_timezone_set('Europe/Belgrade');
use app\core\Router;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => DBHOST,
	'database' => DBNAME,
	'username' => DBUSER,
	'password' => DBPASSWORD,
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
$capsule->schema();

error_reporting(E_ALL);

ini_set('display_errors', TRUE);

ini_set('display_startup_errors', TRUE);

$url = $_SERVER['REQUEST_URI'];

$url = filter_var($url, FILTER_SANITIZE_URL);

$url = explode('/', $url);

Router::route($url);