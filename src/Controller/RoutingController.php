<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoutingController extends AbstractController
{
  /**
   * @Route({
   *   "en": "/about",
   *   "tr": "/hakkinda"
   *}, name = "about")
   * @return Response
   */
  public function hakkinda()
  {
    return new JsonResponse(['message' => 'Hakkında Sayfası']);
  }
}
