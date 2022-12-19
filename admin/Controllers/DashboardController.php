<?php

namespace Admin\Controllers;

use Core\Controllers\AdminController;

class DashboardController extends AdminController
{
    public function index($request, $responce, $args)
    {
        return $this->view->render($responce, 'views/dashboard/dashboard.php', [
            'title' => 'Dashboard',
            'description' => 'dashboard'
        ]);
    }
}
