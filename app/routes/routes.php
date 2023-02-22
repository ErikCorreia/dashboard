<?php 

use App\Controllers\HomeController;
use App\Controllers\AboutController;
use App\Controllers\ErrorPageController;
use App\Controllers\MinigamesController;
use Core\Exception\CustomException;

require __DIR__.'/../../vendor/autoload.php';

$app->get('/', [HomeController::class, 'index'])->setName('home');

$app->get('/minigames/grid-catch', [MinigamesController::class, 'getGridCatchGame'])->setName('minigames');

$app->get('/{page}', ErrorPageController::class)->setName('error');
