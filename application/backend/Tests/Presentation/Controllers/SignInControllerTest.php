<?php

namespace Tests\Presentation\Controllers;

use PHPUnit\Framework\TestCase;
use Src\Presentation\Controllers\SignInController;
use Src\Presentation\Protocols\Controller;
use Src\Presentation\Protocols\HttpRequest;

class SignInControllerTest extends TestCase {
  private readonly Controller $sut;
  
  public function setUp(): void {
    $this->sut = new SignInController;
  }
  
  public function testShouldReturn400IfNoEmailIsProvided(): void {
    $request = new HttpRequest;

    $request->body = [
      'email' => '',
      'password' => 'any_password'
    ];
    
    $response = $this->sut->handle($request);
    
    $this->assertEquals(400, $response->statusCode);
  }
}