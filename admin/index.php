<?php

use DI\Container;
use Slim\Factory\AppFactory;

require __DIR__.'/../vendor/autoload.php';

$c = new Container();

$container = require __DIR__.'/../config/container.php';
$container($c);

$app = AppFactory::createFromContainer($c);

$app->setBasePath('/admin');

$app->addRoutingMiddleware();

$setings = $app->getContainer()->get('settings');

$errorMiddleware = $app->addErrorMiddleware($setings['displayErrorDetails'], $setings['logErrorDetails'], $setings['logErrors']);

// Define app routes
require 'routes/routes.php';

// Run app
$app->run();

