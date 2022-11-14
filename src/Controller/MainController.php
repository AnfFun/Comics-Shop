<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route ("/")]
    public function homepage() : Response
    {
        $comfun = "hello";
    return $this->render('homepage.html.twig',[
        'comfun' => $comfun

    ]);
    }

}