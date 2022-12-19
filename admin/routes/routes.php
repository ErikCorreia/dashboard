<?php 

use Admin\Modules\Dashboard\Controller\DashboardController;
use Admin\Modules\About\Controller\AboutController;

require __DIR__.'/../../vendor/autoload.php';

$app->get('/', [DashboardController::class, 'index'])->setName('dashboard');
$app->get('/about', [AboutController::class, 'index'])->setName('dashboard');
