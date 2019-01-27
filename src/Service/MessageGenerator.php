<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class MessageGenerator
{
  /**
   * @var NameGenerator
   */
  private $nameGenerator;
  /**
   * @var RequestStack
   */
  private $requestStack;

  public function __construct(NameGenerator $nameGenerator, RequestStack $requestStack)
  {
    $this->nameGenerator = $nameGenerator;
    $this->requestStack = $requestStack;
  }

  public function helloMessage()
  {
    $name = $this->requestStack->getCurrentRequest()->get('name');
    if(empty($name)){
      $name = $this->nameGenerator->randomName();
    }
    $message = 'Hello '.$name;
    return $message;
  }
}