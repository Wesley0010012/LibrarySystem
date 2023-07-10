<?php

namespace Src\Presentation\Protocols;

final class HttpResponse {
  public int $statusCode;
  public mixed $body = [];
}