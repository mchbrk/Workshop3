<?php

namespace MXZ\PCGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MXZPCGBundle:Default:index.html.twig', array('name' => $name));
    }
}
