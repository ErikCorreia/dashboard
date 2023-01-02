<?php 

namespace Core\Exception;

use DI\Container;

class CustomException extends \Exception
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}
