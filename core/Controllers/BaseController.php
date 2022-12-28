<?php

namespace Core\Controllers;

use DI\Container;

class BaseController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->view = $container->get('view');
        $this->em = $container->get('entityManager');
        $this->modules = $container->get('modules')->getModules();
    }

    public function getContainerProperty($property)
    {
        return $this->container->get($property) ? $this->container->get($property) : null;
    }
} 
