<?php

use App\controllers\HomeController;

$app->get('/', [HomeController::class, 'index']);