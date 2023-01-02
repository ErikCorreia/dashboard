<?php

// container interface
use DI\Container;

// slim framework
use App\Factory\MyResponseFactory;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

require __DIR__.'/../vendor/autoload.php';

return function (Container $container) {

    // Slim config
    $container->set('settings', function () {
        return [
            'displayErrorDetails' => true,
            'logErrorDetails' => true,
            'logErrors' => true,
        ];
    });

    // Add all Doctrine ORM config in the container
    $container->set('entityManager', function () {
        require __DIR__ . '/doctrine.php';
        return $entityManager;
    });

    // View render instance
    $container->set('view', function () {
        $view = new PhpRenderer;
        return $view;
    });

    $container->set('session', function () {
        $session = new Core\Session();
        return $session;
    });
    
    $container->set('modules', function () {
        $modules = new Core\Module();
        return $modules;
    });
};
