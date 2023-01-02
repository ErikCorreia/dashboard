<?php 

use App\Controllers\HomeController;
use App\Controllers\AboutController;
use App\Controllers\ErrorPageController;

require __DIR__.'/../../vendor/autoload.php';

$app->get('/', [HomeController::class, 'index'])->setName('home');
$app->get('/about', [AboutController::class, 'index']);

$app->get('/{page}', ErrorPageController::class)->setName('error');
