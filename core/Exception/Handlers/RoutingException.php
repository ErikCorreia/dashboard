<?php
namespace Core\Exception\Handlers;

use Slim\Handlers\ErrorHandler;
use Slim\Interfaces\ErrorRendererInterface;
use Throwable;

class RoutingException implements ErrorRendererInterface
{
    public function __invoke(Throwable $exception, bool $displayErrorDetails): string
    {
        return 'My awesome format';
    }

    protected function logError($error): void
    {
        // Insert custom error logging function.
        // echo '<pre>';
        // echo $error;
        // die;
    }
}
