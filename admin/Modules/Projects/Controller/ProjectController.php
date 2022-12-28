<?php

namespace Admin\Modules\Projects\Controller;

use Core\Controllers\AdminController;

class ProjectController extends AdminController
{
    public function index($request, $response, $args)
    {
        return $this->view->render($response, 'views/users/users.php', [
            'title' => 'Users',
            'users' => $this->em->getRepository(\Entity\User::class)->findAll(),
        ]);
    }
}
