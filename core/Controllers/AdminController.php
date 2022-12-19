<?php

namespace Core\Controllers;

use DI\Container;
use Core\Controllers\BaseController;

class AdminController extends BaseController
{
    public function __construct(Container $container){
        parent::__construct($container);
        $this->view->setTemplatePath(__DIR__.'/../../admin/resources/');
        $this->view->setLayout('layout/default.php');
    }
}
