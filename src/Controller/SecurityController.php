<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

//formulaire d'inscription
use App\Entity\User;
use App\Form\InscriptionType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

//ajouter des mots de passe hasher dans la base de données
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{
    private $passwordHasher;
   
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    #[Route(path: '/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /*fonction pour gérer les inscriptions */
    #[Route(path:'/inscription', name: 'inscription')]
    public function formulaire(Request $request, EntityManagerInterface $entityManager):Response
    {
    
        //on créer une instance de la class User
        $user= new User();
        //on fait appel au formulaire
        $form = $this->createForm(InscriptionType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { //si les infos sont valide et qu'on clique sur le boutton "envoyer"

            // Encodez le mot de passe de l'utilisateur (si vous utilisez un encodeur de mots de passe)
            $hashedPassword = $this->passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            
            // Traitez les données du formulaire ici
            $entityManager->persist($user);
            $entityManager->flush(); // ajoute les données dans la base !

            // on est ensuite rediriger vers la page d'accueil
            return $this->redirectToRoute('accueil');
        }

        return $this->render('security/inscription.html.twig', [
            'inscriptionForm' => $form->createView(),
        ]);
    }
}
