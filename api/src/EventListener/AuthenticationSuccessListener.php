<?php

declare(strict_types=1);


namespace App\EventListener;

use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;

class AuthenticationSuccessListener
{
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();

        if ( ! $user instanceof User) {
            return;
        }

//        $data['user'] = [
//            'uuid' => $user->getId(),
//            'name' => $user->getUsername(),
//            'email' => $user->getEmail(),
//            'avatar' => $user->getAvatar(),
//            'roles' => $user->getRoles()
//        ];

        $event->setData($data);
    }
}
