<?php 

use Admin\Modules\Dashboard\Controller\DashboardController;

require __DIR__.'/../../vendor/autoload.php';

$app->get('/', [DashboardController::class, 'index'])->setName('dashboard');
