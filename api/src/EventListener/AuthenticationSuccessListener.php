<?php
declare(strict_types=1);


namespace App\EventListener;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use App\Entity\User;

class AuthenticationSuccessListener
{
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();

        if (!$user instanceof User) {
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
