<?php

namespace App\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Entity\User;

class UserController extends Controller
{
  public function index(Request $request, Response $response, $args)
  {
    $users = User::all();

    return $response->withJson($users);
  }
}
