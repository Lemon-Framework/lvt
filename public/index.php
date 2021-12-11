<?php

/**
 * Main endpoint of everything
 */

require __DIR__ . "/../vendor/autoload.php";

$app = require __DIR__ . "/../app.php";

$app->boot();


