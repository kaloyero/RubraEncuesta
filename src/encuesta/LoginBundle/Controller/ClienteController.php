<?php

namespace encuesta\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ClienteController extends Controller
{

    public function indexAction()
    {
		return $this->render('encuestaLoginBundle:cliente:index.html.twig');				
    }
	
    public function addAction()
    {
		return $this->render('encuestaLoginBundle:cliente:add.html.twig');				
    }

    public function verAction()
    {
		return $this->render('encuestaLoginBundle:cliente:index.html.twig');				
    }

    public function editAction()
    {
		return $this->render('encuestaLoginBundle:cliente:edit.html.twig');				
    }

    public function deleteAction()
    {
		return new JsonResponse( "OK" );				
    }


}