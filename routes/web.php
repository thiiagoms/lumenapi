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
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'series'], function () use ($router) {
        $router->get('', ['uses' => 'SeriesController@index']);
        $router->get('{id}', ['uses' => 'Seriescontroller@show']);
        $router->post('', ['uses' => 'SeriesController@store']);
        $router->put('{id}', ['uses' => 'SeriesController@update']);
        $router->delete('{id}', ['uses' => 'SeriesController@destroy']);
    });
});
