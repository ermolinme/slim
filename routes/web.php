<?php

use App\controllers\HomeController;

$app->get('/', [HomeController::class, 'index']);
$app->get('/admin', [HomeController::class, 'admin']);