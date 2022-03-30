<?php
namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    public function index(Request $request, Response $response)
    {
        $response->getBody()->write(view('index'));
        return $response;
    }

    public function admin(Request $request, Response $response)
    {
        $response->getBody()->write('admin');
        return $response;
    }
}
