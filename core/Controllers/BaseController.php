<?php

namespace Core\Controllers;

use DI\Container;
use Core\Module;

class BaseController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->view = $container->get('view');
        $this->em = $container->get('entityManager');
        $this->modules = $container->get('modules')->getModules();
    }
} 
