<?php
namespace App\controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomeController
{
    public function index(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $response->getBody()->write(view('index'));
        
        return $response;
    }
}
