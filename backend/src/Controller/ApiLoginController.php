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

class ApiLoginController extends AbstractController
{
    private $teacherRepository;
    private $passwordHasher;

    public function __construct(TeacherRepository $teacherRepository, UserPasswordHasherInterface $passwordHasher)
    {
        $this->teacherRepository = $teacherRepository;
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/api/login', name: 'api_login', methods: ['POST'])]
    public function login(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';

        $teacher = $this->teacherRepository->findOneBy(['email' => $email]);

        if (!$teacher || !$this->passwordHasher->isPasswordValid($teacher, $password)) {
            return new JsonResponse(['message' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
        }

        // Generate JWT token
        $algorithmManager = new AlgorithmManager([new RS256()]);
        $jwk = JWKFactory::createFromKeyFile($this->getParameter('jwt_private_key_path'), $this->getParameter('jwt_passphrase'));
        $jwsBuilder = new JWSBuilder($algorithmManager);
        $payload = json_encode(['email' => $teacher->getEmail(), 'roles' => $teacher->getRoles()]);
        $jws = $jwsBuilder
            ->create() // We want to create a new JWS
            ->withPayload($payload) // We set the payload
            ->addSignature($jwk, ['alg' => 'RS256']) // We add a signature with a key and the RS256 algorithm
            ->build(); // We build it

        $serializer = new CompactSerializer(); // The serializer
        $token = $serializer->serialize($jws); // We serialize the JWS

        return new JsonResponse(['message' => 'Login successful', 'token' => $token]);
    }
}
