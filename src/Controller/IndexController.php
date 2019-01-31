<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index()
    {
      return new JsonResponse(['message' => 'Merhaba Dünya']);
    }

  /**
   * @Route("/request", name="request_test")
   * @param RequestStack $requestStack
   */
  public function requestTest(RequestStack $requestStack)
  {
    $request = $requestStack->getCurrentRequest();

    // $_POST
    $request->request->get("name");

    // $_GET
    $request->query->get("name");

    // $_COOKIE
    $request->cookies->get("username");

    // karsiliği yok
    $request->attributes->get("name");

    // $_FILES
    $request->files->get("filename");

    // $_SERVER
    $request->server->all();

    // Headers
    $request->headers->all();
  }
}
