<?php

namespace Synergie\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Synergie\MeetingBundle\Entity\Meeting;

class MeetingController extends Controller
{
    public function indexAction()
    {
        return $this->render('MeetingBundle:Index:index.html.twig', array());
    }

    public function createAction($name)
    {
      $meeting = new Meeting();

      if (!$name)
        $name = 'Meeting sans nom';

      $meeting->setName($name);
      $meeting->setDate(new \DateTime("now"));

      $em = $this->get('doctrine.orm.entity_manager');
      $em->persist($meeting);

      $em->flush();

      return $this->render('MeetingBundle:Index:create.html.twig', array('meeting' => $meeting));
    }

    public function listAction()
    {
      $em = $this->get('doctrine.orm.entity_manager');

      $meetings = $em->getRepository('Synergie\MeetingBundle\Entity\Meeting')->findAll();

      return $this->render('MeetingBundle:Index:list.html.twig', array('meetings' => $meetings));
    }
}
