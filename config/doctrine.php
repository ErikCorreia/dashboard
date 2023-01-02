<?php

// Doctrine ORM
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require __DIR__. '/../vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__ . "/../entity"),
    isDevMode: true,
);

$conn = array(
    'driver'   => $_ENV['DRIVER'],
    'host'     => $_ENV['HOST'],
    'user'     => $_ENV['USER'],
    'password' => $_ENV['PASSWORD'],
    'dbname'   => $_ENV['DBNAME'],
    'port'     => $_ENV['PORT'],
    'charset'  => $_ENV['CHARSET'],
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
