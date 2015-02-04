<?php

namespace encuesta\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class LoginController extends Controller
{
    public function indexAction()
    {
		return $this->render('encuestaLoginBundle:login:index.html.twig');				
    }

    public function loginAction()
    {
	    $request = $this->get('request');
        //request your data
        $username   = $request->get('username');
		$password   = $request->get('password');

		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('encuestaLoginBundle:Usuario');
		
		$usuario = $repository->findOneBy(array('usuario'=>$username,'password'=>$password,'estado'=>'A'));

		if ($usuario){
			return new JsonResponse( "OK" );
		} else {
			return new JsonResponse( "ERROR" );
		}
    }

    public function successLoginAction()
    {
		return $this->render('encuestaLoginBundle:login:panel.html.twig');
    }

}
