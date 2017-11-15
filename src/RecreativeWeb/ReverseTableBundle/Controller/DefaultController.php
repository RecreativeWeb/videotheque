<?php

namespace RecreativeWeb\ReverseTableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/films")
     */
    public function indexAction()
    {
        return $this->render('RecreativeWebReverseTableBundle:Default:index.html.twig');
    }
}
