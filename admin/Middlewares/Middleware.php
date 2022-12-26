<?php 

namespace Admin\Middlewares;

use DI\Container;

class Middleware 
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}
