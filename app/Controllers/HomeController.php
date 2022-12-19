<?php

namespace App\Controllers;

use Entity\User;
use Core\Controllers\AppController;

class HomeController extends AppController
{
    public function index($request, $response, $args)
    {
        $user = $this->em->getRepository(User::class)->findOneBy(['username' => 'admin']);

        return $this->view->render($response, 'views/home/home.php', [
            'user' => $user,
            'title' => 'Home Page',
            'description' => 'This is the home page',
        ]);
    }
}
