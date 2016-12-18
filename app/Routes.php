<?php

/** Create alias for Router. */
use Core\Router;
use Helpers\Hooks;

/** Get the Router instance. */
$router = Router::getInstance();

/** Define static routes. */


// Default Routing
Router::get('/console', 'App\Controllers\Console@index');

// Login Routing
Router::get('/login', 'App\Controllers\Login@index');


/** End default routes */

/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');
/** End Module routes. */

/** If no route found. */
Router::error('Core\Error@index');

/** Execute matched routes. */
$router->dispatch();
