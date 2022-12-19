<?php 

use Admin\Controllers\DashboardController;

require __DIR__.'/../../vendor/autoload.php';

$app->get('/', [DashboardController::class, 'index'])->setName('dashboard');
