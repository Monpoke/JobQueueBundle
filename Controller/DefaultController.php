<?php

namespace Monpoke\JobQueueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MonpokeJobQueueBundle:Default:index.html.twig');
    }
}
