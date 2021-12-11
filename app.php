<?php

use Lemon\Kernel\Application;

/**
 * Initializes whole application
 */
$app = new Application(__DIR__);

/**
 * Setting folders to load
 */
$app->load(
    "app",
    "routes"
);

// Setting view folder
$app->views("resources/views");

return $app;


