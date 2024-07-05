<?PHP

namespace App\Security;

use Jose\Component\Checker\AlgorithmChecker;
use Jose\Component\Checker\HeaderCheckerManager;
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Core\JWK;
use Jose\Component\Signature\Algorithm\HS256;
use Jose\Component\Signature\JWSTokenSupport;
use Jose\Component\Signature\JWSVerifier;
use Jose\Component\Signature\Serializer\CompactSerializer;
use Jose\Component\Signature\Serializer\JWSSerializerManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;

class TeacherAuthenticator extends AbstractAuthenticator
{

    public function supports(Request $request): ?bool
    {
        // dd('home');
        // $tokenCHeck = $request->headers->has('Authorization');
        // dd($tokenCHeck);

        if (!$request->headers->has('Authorization')) {
            throw new CustomUserMessageAuthenticationException('No secure point');
        }

        return true;

        // return $request->headers->has('Authorization');
    }

    public function authenticate(Request $request): Passport
    {
        $authorizationHeader = $request->headers->get('Authorization');
        if (null === $authorizationHeader) {
            throw new CustomUserMessageAuthenticationException('No API token provided');
        }
        // dd('hello');
        $apiToken = str_replace('Bearer ', '', $authorizationHeader);
        // dd($apiToken);
        $algorithmManager = new AlgorithmManager([
            new HS256(),
        ]);
        $jwsVerifier = new JWSVerifier($algorithmManager);
        $jwk = new JWK([
            'kty' => 'oct',
            'k' => 'dzI6nbW4OcNF-AtfxGAmuyz7IpHRudBI0WgGjZWgaRJt6prBn3DARXgUR8NVwKhfL43QBIU2Un3AvCGCHRgY4TbEqhOi8-i98xxmCggNjde4oaW6wkJ2NgM3Ss9SOX9zS3lcVzdCMdum-RwVJ301kbin4UtGztuzJBeg5oVN00MGxjC2xWwyI0tgXVs-zJs5WlafCuGfX1HrVkIf5bvpE0MQCSjdJpSeVao6-RSTYDajZf7T88a2eVjeW31mMAg-jzAWfUrii61T_bYPJFOXW8kkRWoa1InLRdG6bKB9wQs9-VdXZP60Q4Yuj_WZ-lO7qV9AEFrUkkjpaDgZT86w2g',
            // 'k' => $_ENV['JWT_SECRET_KEY'],
        ]);

        $serializerManager = new JWSSerializerManager([
            new CompactSerializer(),
        ]);

        try {
            $jws = $serializerManager->unserialize($apiToken);
        } catch (\InvalidArgumentException $e) {
            throw new CustomUserMessageAuthenticationException('Invalid token');
        }
        $headerCheckerManager = new HeaderCheckerManager(
            [
                new AlgorithmChecker(['HS256']),
                // We want to verify that the header "alg" (algorithm)
                // is present and contains "HS256"
            ],
            [
                new JWSTokenSupport(), // Adds JWS token type support
            ]
        );
        try {
            $headerCheckerManager->check($jws, 0);
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        if (!$jwsVerifier->verifyWithKey($jws, $jwk, 0)) {
            throw new CustomUserMessageAuthenticationException('Invalid token signature');
        }
        $payload = json_decode($jws->getPayload(), true);
        // dd($payload);
        if ($payload['exp'] < time()) {
            throw new CustomUserMessageAuthenticationException('Token has expired');
        }

        if (!isset($payload['data']['email'])) {
            throw new CustomUserMessageAuthenticationException('Token is missing the payload email');
        }
        if (!isset($payload['data']['id'])) {
            throw new CustomUserMessageAuthenticationException('Token is missing the payload id');
        }

        $userIdentifier = $payload['data']['email'];
        // dd(new SelfValidatingPassport(new UserBadge($userIdentifier)));

        return new SelfValidatingPassport(new UserBadge($userIdentifier));
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // dd($token->getUser()); // The User object
        // dd('hello');
        // return new JsonResponse(["message"=>"success"]);
        return null; // Allow the request to continue
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $data = [
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData()),
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }
}