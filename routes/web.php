<?php
use App\Controllers\IndexController;

$app = \InfinyHost\InfinyMini\App::getInstance();

return [
    [
        'path' =>   '/',
        'method' => 'GET',
        'callback' => [IndexController::class, 'index']
    ]
];