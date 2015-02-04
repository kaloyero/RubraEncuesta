<?php

namespace encuesta\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$us = 'ale';
		$pwd = 'mas';
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('encuestaLoginBundle:Usuario');
		
		$usuario = $repository->findOneBy(array('usuario'=>$us,'password'=>$pwd,'estado'=>'A'));

		if ($usuario){
			return ;
		} else {
			return ;
		}
    }

}
