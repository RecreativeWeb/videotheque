<?php

namespace RecreativeWeb\VideosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

//use RecreativeWeb\VideosBundle\Form\FilmType;
use RecreativeWeb\VideoBundle\Form\TinyMceType;


class FilmsBackendController extends Controller
{
	/**
     * @Route("/admin", name="filmsBackend")
     */
    public function showAllAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            $em = $this->getDoctrine()->getManager();

            $films = $em->getRepository('RecreativeWeb\VideosBundle\Entity\Film')->findAll();

            return $this->render('RecreativeWebVideosBundle::showAllBackend.html.twig',compact('films'));
                
        }
        return $this->redirectToRoute('films');
    }

    /**
     * @Route("/write", name="write")
     */
    public function writeController()
    {
    	
    }
}