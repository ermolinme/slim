<?php

use App\Сontrollers\HomeController;

$app->get('/', [HomeController::class, 'index']);