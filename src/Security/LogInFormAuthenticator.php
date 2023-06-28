<?php

namespace App\Security;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;


//ajouté
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\User;
use App\Entity\faceModel;

class LogInFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    //ajouté
    private $userRepository;

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(private UrlGeneratorInterface $urlGenerator,UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');

        //ajouté
        $image = $request->request->get('image', '');
        $user = $this->userRepository->findOneBy(['email' => $email]);

        if (!$user || $user->getImage() !== $image) {
            throw new CustomUserMessageAuthenticationException('adresse mail or image non valide');
        }

        

        $request->getSession()->set(Security::LAST_USERNAME, $email);

         // Comparer l'image saisie avec image/image_5.jpg
        $facemodel = new faceModel();
        $res = $facemodel->compare($image, 'image/image_5.jpg');
        //fin code ajouté

        if (strpos($res, 'true') === false) {
            throw new CustomUserMessageAuthenticationException('Invalid image');
        }
        return new Passport(
            new UserBadge($email, function () use ($user) {
                return $this->userRepository->findOneBy(['email' => $user->getEmail()]);
            }),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
            ],
            // Ajoutez le badge UserBadge pour le champ "image"
            new UserBadge($email, function () use ($user, $image) {
                // Vous pouvez également vérifier le champ "image" ici si nécessaire
                return new User($user->getUsername(), $user->getPassword(), $user->getRoles(), $image);
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            
            return new RedirectResponse($targetPath);
        }

        // For example:
        return new RedirectResponse($this->urlGenerator->generate('accueil'));
       // throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
