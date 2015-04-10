<?php

namespace Federer\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



class DefaultController extends Controller
{
	public function indexAction($name, $surname)
	{

		$em = $this->getDoctrine()->getManager();
		$repo = $em->getRepository('EventBundle:Event');

		$event = $repo->findOneBy(
				array('location' => "paris", )
			);

		return $this->render(
				'EventBundle:Default:index.html.twig',
				array('name' => $name, 'surname' => $surname, 'event' => $event )
			);

	}
}
