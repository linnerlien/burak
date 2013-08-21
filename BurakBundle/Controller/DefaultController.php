<?php

namespace Catz\BurakBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CatzBurakBundle:Default:index.html.twig', array('name' => $name));
    }
}
