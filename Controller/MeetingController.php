<?php

namespace Synergie\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MeetingController extends Controller
{
    public function indexAction()
    {
        return $this->render('MeetingBundle:Index:index.html.twig', array());
    }
}
