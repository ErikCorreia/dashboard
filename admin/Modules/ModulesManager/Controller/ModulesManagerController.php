<?php

namespace Admin\Modules\ModulesManager\Controller;

use Core\Controllers\AdminController;

class ModulesManagerController extends AdminController
{
    public function index($request, $response, $args)
    {
        return $this->view->render($response, 'views/modules-manager/modules-manager.php', [
            'title' => 'Modules Manager'
        ]);
    }
}
