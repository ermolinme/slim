<?php

use Slim\Factory\AppFactory;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';
require 'app/functions.php';

$app = AppFactory::create();

require 'routes/web.php';

$app->run();