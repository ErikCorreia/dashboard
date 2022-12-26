<?php 

use Admin\Middlewares\AuthMiddleware;

use Admin\Modules\Dashboard\Controller\DashboardController;
use Admin\Modules\About\Controller\AboutController;
use Admin\Modules\User\Controller\UserController;
use Admin\Modules\ModulesManager\Controller\ModulesManagerController;
use Admin\Modules\Authentication\Controller\AuthController;


require __DIR__.'/../../vendor/autoload.php';

$app->get('/', [DashboardController::class, 'index'])->setName('dashboard')->add(AuthMiddleware::class);
$app->get('/about', [AboutController::class, 'index'])->setName('about')->add(AuthMiddleware::class);

$app->get('/users', [UserController::class, 'index'])->setName('users')->add(AuthMiddleware::class)->add(AuthMiddleware::class);
$app->get('/modules-manager', [ModulesManagerController::class, 'index'])->setName('modules-manager')->add(AuthMiddleware::class);;

$app->get('/login', [AuthController::class, 'index'])->setName('login');
$app->post('/login', [AuthController::class, 'login']);

$app->get('/logout', [AuthController::class, 'logout']);
