<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DistributedTracePayloadSymfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\MakerBundle\Doctrine;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(ManagerRegistry $doctrine): Response
    {
    $article = new Article();
    $article ->setTitle("first article");

    $em = $doctrine ->getManager();
    $em ->persist($article);
    $em ->flush();

    return new Response('Article was created');

       /*return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
       */
    }
}
