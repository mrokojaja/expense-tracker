<?php

use App\Controllers;
use App\Filters\AuthFilter;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/auth', [Controllers\Auth\AuthenticateUser::class, 'show'], ['as' => 'auth']);
$routes->post('/auth', [Controllers\Auth\AuthenticateUser::class, 'store']);
$routes->put('/auth', [Controllers\Auth\RegisterUser::class, 'store']);

$routes->get('/', [Controllers\Home::class, 'index'], ['filter' => 'authenticate', 'as' => 'home']);
// $routes->get('/', 'Home::index', ['filter' => AuthFilter::class]);