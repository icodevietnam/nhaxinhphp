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

/** Define static routes. */


// Default Routing
Router::get($console_dir, 'App\Controllers\Console@index');
//user
Router::get($console_dir.'/user', 'App\Controllers\Console@userPage');

// Login Routing
Router::get($login, 'App\Controllers\Login@index');
Router::get($logout, 'App\Controllers\Login@logout');
Router::post($loginAdmin, 'App\Controllers\Login@login');


/** End default routes */

/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');
/** End Module routes. */

/** If no route found. */
Router::error('Core\Error@index');

/** Execute matched routes. */
$router->dispatch();
