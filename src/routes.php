<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/makeMeAPen', \Farm\Controllers\PenController::class);
