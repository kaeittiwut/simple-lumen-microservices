<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$router->get('/', function () use ($router) {
    return config('app.name');
});

/* Routes for Author service */
$router->get('/authors', 'ApiAuthorController@index');
$router->post('/authors', 'ApiAuthorController@store');
$router->get('/authors/{id}', 'ApiAuthorController@show');
$router->put('/authors/{id}', 'ApiAuthorController@update');
$router->patch('/authors/{id}', 'ApiAuthorController@update');
$router->delete('/authors/{id}', 'ApiAuthorController@destroy');

/* Routes for Book service */
$router->get('/books', 'ApiBookController@index');
$router->post('/books', 'ApiBookController@store');
$router->get('/books/{id}', 'ApiBookController@show');
$router->put('/books/{id}', 'ApiBookController@update');
$router->patch('/books/{id}', 'ApiBookController@update');
$router->delete('/books/{id}', 'ApiBookController@destroy');
