<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/view', name: 'app_view')]
    public function index(): Response
    {
        $day = date("l");
        $user = [
            'name' =>'Jan',
            'familyName' => 'Janssens',
            'age' => '99'
        ];
        $a =array("apple", "pear", "hello","world");

        return $this->render('view/index.html.twig', [
            'd' => $day,
            'user' => $user,
            'a' => $a,
        ]);
    }
}
