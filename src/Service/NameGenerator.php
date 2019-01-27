<?php

namespace App\Service;

class NameGenerator
{
  public function randomName()
  {
    $names = [
      'Ayşe',
      'Fatma',
      'Hayriye'
    ];

    $index = array_rand($names);

    return $names[$index];
  }
}