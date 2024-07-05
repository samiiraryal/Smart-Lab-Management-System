<?php
// src/Controller/ApiLoginController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\TeacherRepository;
use Jose\Component\Signature\JWSBuilder;
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\KeyManagement\JWKFactory;
use Jose\Component\Signature\Algorithm\RS256;
use Jose\Component\Signature\Serializer\CompactSerializer;
use App\Service\JWTtoken;

class ApiLoginController extends AbstractController
{
    private $teacherRepository;
    private $passwordHasher;
    private $jwtToken;

    public function __construct(TeacherRepository $teacherRepository, UserPasswordHasherInterface $passwordHasher,JWTtoken $jwtToken)
    {
        $this->teacherRepository = $teacherRepository;
        $this->passwordHasher = $passwordHasher;
        $this->jwtToken = $jwtToken;
    }

    #[Route('/login', name: 'api_login', methods: ['POST'])]
    public function login(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';

        $teacher = $this->teacherRepository->findOneBy(['email' => $email]);

        if (!$teacher || !$this->passwordHasher->isPasswordValid($teacher, $password)) {
            return new JsonResponse(['message' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
        }

        // Generate JWT token is handled by the success handler
        // return new JsonResponse(['message' => 'Login successful']);
        $token = $this->jwtToken->generateToken($teacher->getId(),$teacher->getEmail());
        // dd($token);
        return new JsonResponse([
            'user' => [
                'id' => $teacher->getId(),
                'email' => $teacher->getEmail(),
            ]
        ], Response::HTTP_OK, ['Authorization' => 'Bearer ' . $token]);
    }

    #[Route('/api/secure', name: 'secure', methods: ['GET'])]
    public function secure(): Response
    {
        return $this->json(['message' => 'This is a secure endpoint!']);
    }
}
