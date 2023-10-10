<?php

use App\Http\Controllers\GoodMoralRequestController;
use App\Models\GoodMoralRequest;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UsersController::class);
    $router->resource('teachers', TeachersController::class);
    $router->resource('certification-requests', CertificationsController::class);
    $router->resource('form137-requests', Form137RequestsController::class);
    $router->resource('good-moral-requests', GoodMoralRequestsController::class);

});
