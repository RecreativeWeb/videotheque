<?php

namespace RecreativeWeb\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/backend")
     */
    public function indexAction()
    {
        return $this->render('RecreativeWebBackBundle:Default:index.html.twig');
    }
}
