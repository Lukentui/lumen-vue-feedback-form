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

$router->group(['prefix' => 'v1'], function () use ($router) {
    // crud, create
    $router->group(['prefix' => 'create'], function () use ($router) {
        $router->put('feedback', 'FeedbackController@create');
    });

    // crud, update
    // $router->group(['prefix' => 'update'], function () use ($router) {
    //     $router->put('feedback', 'FeedbackController@update');
    // });
});
