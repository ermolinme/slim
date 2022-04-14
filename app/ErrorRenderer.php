<?php

namespace App;

use Slim\Error\Renderers\HtmlErrorRenderer;

class ErrorRenderer extends HtmlErrorRenderer
{
    /**
     * @param string $title
     * @param string $html
     * @return string
     */
    public function renderHtmlBody(string $title = '', string $html = ''): string
    {
        return view('error', [
            'title' => $title, 
            'html' => $html
        ]);
    }
}
