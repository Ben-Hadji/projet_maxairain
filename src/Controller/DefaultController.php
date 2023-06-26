<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use \FaceRecognition\FaceRecognition;


class DefaultController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        /**teste */


        return $this->render('default/index.html.twig');
    }
}
