<?php

namespace App\Controllers;

use Core\Controllers\AppController;

class MinigamesController extends AppController
{
    public function index($request, $response, $args)
    {
        return $this->view->render($response, 'views/grid/grid.php', [
            'title' => 'About page',
            'description' => 'this is About page'
        ]);
    }

    public function getGridCatchGame($request, $response, $args)
    {
        return $this->view->render($response, 'views/minigames/grid-catch.php', [
            'title' => 'About page',
            'description' => 'this is About page'
        ]);
    }
}
