<?php

namespace App\Controllers;

use Core\Controllers\AppController;

class ErrorPageController extends AppController
{
    public function __invoke($request, $response, $args)
    {

        $this->view->addAttribute('pageTitle', 'Erro');

        return $this->view->render($response ,'views/error/page-not-found.php', [
            'args' => $args
        ]);
    }
}
