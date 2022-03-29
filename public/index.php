<?php
use App\Config;
use Monolog\Logger;
use Slim\Factory\AppFactory;
use Monolog\Handler\StreamHandler;
use App\Controllers\HomeController;
use Monolog\Handler\FirePHPHandler;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';
require 'app/functions.php';

$app = AppFactory::create();
$logger = new Logger('logger', [new StreamHandler(Config::LOG_FILE, Logger::DEBUG)]);

//routing
$app->get('/', [HomeController::class, 'index']);
$app->run();