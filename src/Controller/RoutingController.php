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

  /**
   * @Route("/blog/{page}", name = "blog_listele", requirements={"page" = "\d+"})
   */
  public function listele($page)
  {
    return new Response("Sayfa : ".$page);
  }

  /**
   * @Route("/blog-listele/{page<\d+>}", name = "blog_listele_1")
   */
  public function listeleBlog($page)
  {
    return new Response("Listeleme : ".$page);
  }

  /**
   * @Route("/blog/{postSlug}", name = "blog_listele_2")
   */
  public function listeleWithSlug($postSlug)
  {
    return new Response("Post Slug : ".$postSlug);
  }

  /**
   * @Route("/routing/hello/{_locale}", defaults={"_locale"="tr"}, requirements={"_locale"="en|tr"})
   */
  public function helloRouting($_locale)
  {
    return new Response("Locale is: ".$_locale);
  }

  /**
   * @Route("/api/posts/{id}", methods={"GET", "HEAD"})
   */
  public function showPost($id)
  {
    return new JsonResponse(['post' => $id]);
  }

  /**
   * @Route("/posts/{page}", name="post_listele", requirements={"page" = "\d+"})
   */
  public function postListeleme($page = 1)
  {
    return new JsonResponse(['default post liste' => $page]);
  }

  /**
   * @Route("/posts-listele/{page<\d+>?1903}")
   */
  //  ?1903  değeri ile default variable verdik.
  public function postListeleme2($page)
  {
    return new JsonResponse(['default post liste' => $page]);
  }
}
