<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/api/user", name="user")
     */
    public function index(): JsonResponse
    {
        if ( ! $this->container->has('security.token_storage')) {
            throw new \LogicException('The Security Bundle is not registered in your application.');
        }

        /** @var TokenInterface $token */
        $token = $this->container->get('security.token_storage')->getToken();
        if (null === $token) {
            return new JsonResponse('error', 500, [], false);
        }

        /** @var User $user */
        if ( ! is_object($user = $token->getUser())) {
            // e.g. anonymous authentication
            return new JsonResponse('error', 500, [], false);
        }
        $jsonUser = [
            'user' => [
                'username' => $user->getUsername(),
                'avatar'   => $user->getAvatar(),
                'email'    => $user->getEmail(),
                'roles'    => $user->getRoles(),
            ],
        ];

        return new JsonResponse($jsonUser, 200, [], false);
    }
}
