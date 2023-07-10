<?php

namespace Src\Presentation\Protocols;

interface Controller {
  public function handle(HttpRequest $request): HttpResponse;
}