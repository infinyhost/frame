<?php

namespace App\Controllers;

use InfinyHost\InfinyMini\Controller;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;

class IndexController extends Controller
{
    public function index(): ResponseInterface
    {
        return $this->app->render('index.twig', ['name' => 'Hello world']);
    }
}