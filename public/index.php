<?php
use Slim\Factory\AppFactory;
use App\Controllers\HomeController;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/functions.php';

$app = AppFactory::create();

$app->get('/', [HomeController::class, 'index']);

$app->run();