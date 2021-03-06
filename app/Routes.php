<?php

/** Create alias for Router. */
use Core\Router;
use Helpers\Hooks;

/** Get the Router instance. */
$router = Router::getInstance();
$console_dir = "/console";
$logout = "/logout";
$login = "/login";
$loginAdmin = "/loginAdmin";
$rolePath = "/role";

/** Define static routes. */


// Default Routing
Router::get($console_dir, 'App\Controllers\Console@index');
//user
Router::get($console_dir.'/user', 'App\Controllers\Console@userPage');
//
Router::get($console_dir.'/role', 'App\Controllers\Console@rolePage');

// Login Routing
Router::get($login, 'App\Controllers\Login@index');
Router::get($logout, 'App\Controllers\Login@logout');
Router::post($loginAdmin, 'App\Controllers\Login@login');

// Role
Router::get($rolePath.'/table','App\Controllers\Role@showTable');

//Common
Router::get('/(:any)/create', 'App\Controllers\Console@createPage');
Router::get('/(:any)/edit', 'App\Controllers\Console@editPage');

/** End default routes */

/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');
/** End Module routes. */

/** If no route found. */
Router::error('Core\Error@index');

/** Execute matched routes. */
$router->dispatch();
