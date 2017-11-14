<?php

namespace RecreativeWeb\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FilmsController extends Controller
{
    /**
     * @Route("/create", name="create")
     */
    public function createAction()
    {

        return $this->render('RecreativeWebFrontBundle::create.html.twig');
    }

    /**
     * @Route("/", name="")
     */
    public function showAllAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$films = $em->getRepository('RecreativeWeb\FrontBundle\Entity\Film')->findAll();

        return $this->render('RecreativeWebFrontBundle::showAll.html.twig',compact('films'));
    }
   
//    /**
//     * @Route("/fiche.{{id}}", name="fiche")
//     */
//    public function showOneAction($id)
//    {
//    	$em = $this->getDoctrine()->getManager();

//    	$film = $em->getRepository('RecreativeWeb\FrontBundle\Entity\Film')->findById($id);

//        return $this->render('RecreativeWebFrontBundle::showOne.html.twig',compact('film'));
//    }
   
   	/**
     * @Route("/", name="")
     */
//    public function updateAction($id)
//    {

//    }

    /**
     * @Route("/", name="")
     */
//    public function deleteAction($id)
//    {

//    }
}



















