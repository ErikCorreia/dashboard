<?php

namespace Admin\Modules\About\Controller;

use Core\Controllers\AdminController;

class AboutController extends AdminController
{
    public function index($request, $response, $args)
    {
        return $this->view->render($response, 'views/about/about.php', [

        ]);
    }
}
