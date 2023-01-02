<?php

use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require 'vendor/autoload.php';

require 'config/init.php';

$c = new Container();
$container = require 'config/container.php';
$container($c);

$app = AppFactory::createFromContainer($c);

$app->addRoutingMiddleware();

$setings = $app->getContainer()->get('settings');

$errorMiddleware = $app->addErrorMiddleware($setings['displayErrorDetails'], $setings['logErrorDetails'], $setings['logErrors']);

// Define app routes
require 'app/routes/routes.php';

// Run app
$app->run();


