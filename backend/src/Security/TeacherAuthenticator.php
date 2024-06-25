<?php
// src/Security/TeacherAuthenticator.php
namespace App\Security;
use App\Repository\TeacherRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\AuthenticatorInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class TeacherAuthenticator extends AbstractAuthenticator
{
    private RouterInterface $router;

    public function __construct(RouterInterface $router,private TeacherRepository $TeacherRepository)
    {
        $this->router = $router;
    }

 public function supports(Request $request): ?bool
    {
        return $request->isMethod('POST') && $request->getPathInfo() === '/api/login';
    }

   public function authenticate(Request $request): Passport
    {
        $data = json_decode($request->getContent(), true);

    $email = $data['email'] ?? '';
    $password = $data['password'] ?? '';
    // dd($email);


    if (empty($email) || empty($password)) {
        throw new CustomUserMessageAuthenticationException('Email and password are required.');
    }

    // Example: Perform actual authentication against a database or external service
    $teacher = $this->TeacherRepository->findOneByEmail($email);

    // if (!$teacher || !$this->isPasswordValid($teacher, $password)) {
    //     throw new CustomUserMessageAuthenticationException('Invalid credentials.');
    // }

    return new Passport(
        new UserBadge($email),
        new PasswordCredentials($password)
    );
}


    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        return new JsonResponse(['status' => 'success'], Response::HTTP_OK);
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        return new JsonResponse(['status' => 'failure', 'message' => $exception->getMessageKey()], Response::HTTP_UNAUTHORIZED);
    }
}
