<?php

namespace RecreativeWeb\VideosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class RealisateursController extends Controller
{
	/**
	 * @route("/reals", name="realisateurs")
	 */
	public function afficheAction()
	{
		$em = $this->getDoctrine()->getManager();

		$reals = $em->getRepository('RecreativeWebVideosBundle:Realisateur')->findAll();

		return $this->render('RecreativeWebVideosBundle::afficheReals.html.twig',compact('reals'));
	}
}