<?php

namespace RecreativeWeb\VideosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use RecreativeWeb\VideosBundle\Form\FilmType;
use RecreativeWeb\VideosBundle\Entity\Film;
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 

class FilmsController extends Controller
{
    /**
     * @Route("/create", name="creation")
     */
    public function createAction(Request $request)
    {

        $form = $this->createForm(FilmType::class, new Film(),array('attr'=>array('class'=>'creaForm', 'enctype'=>'multipart/form-data')))
        ->add('valider',SubmitType::class, array(
            'label'=>'Valider'
        ));

        $form->handleRequest($request);
        if($request->isMethod('post') && $form->isValid()){
            $film = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            $em->flush();

            return $this->redirect($this->generateUrl('films'));
        }

        return $this->render('RecreativeWebVideosBundle::create.html.twig',array('form_film'=>$form->createView()));
    }

    /**
     * @Route("/", name="films")
     */
    public function showAllAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$films = $em->getRepository('RecreativeWeb\VideosBundle\Entity\Film')->findAll();

        return $this->render('RecreativeWebVideosBundle::showAll.html.twig',compact('films'));
    }
   
    /**
     * @Route("/fiche/{id}", name="ficheFilm")
     */
    public function showOneAction($id)
    {
    	$em = $this->getDoctrine()->getManager();

    	$film = $em->getRepository('RecreativeWeb\VideosBundle\Entity\Film')->find($id);

        return $this->render('RecreativeWebVideosBundle::showOne.html.twig',compact('film'));
    }
   
   	/**
     * @Route("/create", name="modification")
     */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository('RecreativeWeb\VideosBundle\Entity\Film')->find(1);
        $formFilm = $this->createForm(FilmType::Class, $film);
        $formFilm->add('modifier', SubmitType::Class, array(
            'label'=>'Modifier'
        ));

        $formFilm->handleRequest($request);
        if($request->isMethode('post') && $formFilm->isValid()){
            $film = $formFilm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            $em->flush;

            return $this ->redirect('films');
        }
    }

    /**
     * @Route("/", name="")
     */
//    public function deleteAction($id)
//    {

//    }
}



















