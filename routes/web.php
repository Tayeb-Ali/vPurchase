<?php

/** @var \Laravel\Lumen\Routing\Router $router */

    $router->get('/', 'HomeController@index');

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('verifycode', 'VerifyCodeController@index');
    $router->get('check/{domain}', 'VerifyCodeController@check');
    $router->post('verifycode', 'VerifyCodeController@verify');
    $router->get('bugfix', 'VerifyCodeController@bugfix');


});
