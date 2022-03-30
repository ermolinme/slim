<?php

use App\Config;
use Monolog\Logger;
use Jenssegers\Blade\Blade;
use Monolog\Handler\StreamHandler;

function view($view, $data = []) 
{
    $blade = new Blade(Config::VIEWS_DIR, Config::VIEWS_CACHE);
    return $blade->render($view, $data);
}

function logger(?string $filename = null)
{
    $logfile = Config::LOG_DIR . '/' . ($filename ?? Config::LOG_FILENAME) . '.log';
    return new Logger('logger', [new StreamHandler($logfile, Logger::DEBUG)]);
}