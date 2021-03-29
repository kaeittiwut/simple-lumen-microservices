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

$router->group(['middleware' => 'client.credentials'], function () use ($router) {

    /* Routes for Author service */
    $router->get('/authors', 'ApiAuthorServiceController@index');
    $router->post('/authors', 'ApiAuthorServiceController@store');
    $router->get('/authors/{id}', 'ApiAuthorServiceController@show');
    $router->put('/authors/{id}', 'ApiAuthorServiceController@update');
    $router->patch('/authors/{id}', 'ApiAuthorServiceController@update');
    $router->delete('/authors/{id}', 'ApiAuthorServiceController@destroy');

    /* Routes for Book service */
    $router->get('/books', 'ApiBookServiceController@index');
    $router->post('/books', 'ApiBookServiceController@store');
    $router->get('/books/{id}', 'ApiBookServiceController@show');
    $router->put('/books/{id}', 'ApiBookServiceController@update');
    $router->patch('/books/{id}', 'ApiBookServiceController@update');
    $router->delete('/books/{id}', 'ApiBookServiceController@destroy');
});
