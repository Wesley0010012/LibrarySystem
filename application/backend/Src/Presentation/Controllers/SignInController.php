<?php

namespace Src\Presentation\Controllers;

use Src\Presentation\Protocols\Controller;
use Src\Presentation\Protocols\HttpRequest;
use Src\Presentation\Protocols\HttpResponse;

class SignInController implements Controller {
  public function handle(HttpRequest $request): HttpResponse {
    $response = new HttpResponse;

    $response->statusCode = 400;
    $response->body['message'] = "Invalid Email was provided";

    return $response;
  }
}