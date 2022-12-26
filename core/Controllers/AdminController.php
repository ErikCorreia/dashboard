<?php

namespace Core\Controllers;

use DI\Container;
use Core\Controllers\BaseController;

class AdminController extends BaseController
{
    public function __construct(Container $container){
        parent::__construct($container);
        $this->view->setTemplatePath(__DIR__.'/../../admin/resources/');
        $container->get('session')->has('user') ? $this->view->setLayout('layout/default.php') : $this->view->setLayout('layout/default-not-loged.php');
        $this->view->addAttribute('modules', $this->modules);
    }
}
