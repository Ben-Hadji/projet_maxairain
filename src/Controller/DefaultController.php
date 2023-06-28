<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;

use App\Entity\faceModel;

class DefaultController extends AbstractController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        $users = $this->userRepository->findAll(User::class);

        $facemodel = new faceModel();

        $res=$facemodel->compare('public/image/pic1.jpg','public/image/pic1.png');
        /**test */

        

        return $this->render('default/index.html.twig', [
            'users' => $users,'res'=>$res
        ]);     
    }

   



    #[Route('/a_propos', name: 'laSociete')]
    public function aPropos(): Response
    {
        return $this->render('default/laSociete.html.twig');
    }
}
