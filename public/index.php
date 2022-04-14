<?php

use Dotenv\Dotenv;
use App\ErrorRenderer;
use Slim\Factory\AppFactory;

chdir(dirname(__DIR__));
session_start();
require 'vendor/autoload.php';
require 'app/functions.php';

$app = AppFactory::create();

$errorMiddleware = $app->addErrorMiddleware(false, true, true, logger());
$errorHandler = $errorMiddleware->getDefaultErrorHandler();
$errorHandler->registerErrorRenderer('text/html', ErrorRenderer::class);

$dotenv = Dotenv::createImmutable('.');
$dotenv->load();

require 'routes/web.php';

$app->run();