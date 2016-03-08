<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresenceController extends Controller
{
    /**
     * @Security("is_granted('ROLE_STUDENT')")
     */
    public function getPresenceAction()
    {


        return [];
    }
}
