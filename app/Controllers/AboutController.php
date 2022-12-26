<?php

namespace App\Controllers;

use Core\Controllers\AppController;

class AboutController extends AppController
{
    public function index($request, $response, $args)
    {
        return $this->view->render($response, 'views/about/about.php', [
            'title' => 'About page',
            'description' => 'this is About page'
        ]);
    }
}
