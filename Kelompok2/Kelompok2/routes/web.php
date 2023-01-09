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
 




$router->group(['middleware' => 'basicAuth'], function () use ($router) {

    $router->post('/mahasiswa','ControllerMahasiswa@create');

    $router->get('/mahasiswa', 'ControllerMahasiswa@index');

    $router->get('/detail/{id}', 'ControllerMahasiswa@detail');

    $router->put('/update/{id}', 'ControllerMahasiswa@update');

    $router->delete('/delete/{id}', 'ControllerMahasiswa@delete');

});

