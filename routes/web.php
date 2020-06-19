<?php

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

$router->group(['middleware' => 'filter'], function () use ($router) {

    // Routers CRUD

    $router->get('/', 'ApiController@index');
    $router->post('/', 'ApiController@store');
    $router->post('/{id}', 'ApiController@update');
    $router->delete('/{id}', 'ApiController@delete');
    
});
