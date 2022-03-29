<?php

use App\Config;
use Jenssegers\Blade\Blade;

function view($view, $data = []) 
{
    $blade = new Blade(Config::VIEWS_DIR, Config::VIEWS_CACHE);
    return $blade->render($view, $data);
}
