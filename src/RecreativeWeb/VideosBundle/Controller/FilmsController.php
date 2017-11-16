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

        return $this->render('RecreativeWebVideosBundle::createFilm.html.twig',array('form_film'=>$form->createView()));
    }

    /**
     * @Route("/", name="films")
     */
    public function showAllAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$films = $em->getRepository('RecreativeWeb\VideosBundle\Entity\Film')->findAll();

        return $this->render('RecreativeWebVideosBundle::showAllFilms.html.twig',compact('films'));
    }
   
    /**
     * @Route("/fiche/{id}", name="ficheFilm")
     */
    public function showOneAction($id)
    {
    	$em = $this->getDoctrine()->getManager();

    	$film = $em->getRepository('RecreativeWeb\VideosBundle\Entity\Film')->find($id);

        return $this->render('RecreativeWebVideosBundle::showOneFilm.html.twig',compact('film'));
    }
   
   	/**
     * @Route("/modify/{id}", name="modification")
     */
    public function updateAction(Request $request, $id)
    {
        

        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository('RecreativeWeb\VideosBundle\Entity\Film')->find($id);
        $form = $this->createForm(FilmType::class, $film,array('attr'=>array('class'=>'creaForm', 'enctype'=>'multipart/form-data')))
        ->add('valider',SubmitType::class, array(
            'label'=>'Valider'
        ));       

        $form->handleRequest($request);

        if($request->isMethod('post') && $form->isValid()){
            $film = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            $em->flush();

            return $this ->redirect('films');
        }
        return $this->render('RecreativeWebVideosBundle::modifyFilm.html.twig',array('form_film'=>$form->createView()));
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
   public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('RecreativeWebVideosBundle:Film');

        $em->remove($repository->find($id));
        $em->flush();

        return $this->redirect($this->generateUrl('films'));
    }
}



















