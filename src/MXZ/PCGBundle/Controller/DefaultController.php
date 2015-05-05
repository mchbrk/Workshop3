<?php

namespace MXZ\PCGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MXZPCGBundle::main.html.twig');
    }
}
