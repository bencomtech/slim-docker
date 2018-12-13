<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/users', '\App\Controller\UserController:index');

$app->get('/', function(Request $request, Response $response, $args) {
  $this->logger->info("GET / route");

  return "Home";
});
