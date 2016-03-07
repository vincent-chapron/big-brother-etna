<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresenceController extends Controller
{
    public function postPresenceAction()
    {

    }

    public function putPresenceAction($id)
    {

    }

    public function getPresenceAction(User $user)
    {
        return $user;
    }

    public function getPresencesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User\User')->findAll();

        return $users;
    }
}
