<?php

namespace encuesta\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class EncuestaController extends Controller
{

    public function indexAction()
    {
		return $this->render('encuestaLoginBundle:encuesta:index.html.twig');				
    }
	
    public function addAction()
    {
		return $this->render('encuestaLoginBundle:encuesta:add.html.twig');				
    }

    public function crearAction()
    {

			$nombre_archivo = "encuesta1.php"; 
		 
			if(file_exists($nombre_archivo))
			{
				$mensaje = "";
				$mensaje.="<!doctype html>";
				$mensaje.="<html lang='en'>";
				$mensaje.="<head>";
				$mensaje.="<meta charset='UTF-8' />";
				$mensaje.="<title>Rubra Administracion</title>";
				$mensaje.="<link rel='stylesheet' href='{{ asset('css/stylePanel.css') }}'/>";
				$mensaje.="<link rel='stylesheet' href='{{ asset('css/style.css') }}'/>";
				$mensaje.="<link rel='stylesheet' href='{{ asset('css/style2.css') }}'/>";
				$mensaje.="</head>";
				
				$mensaje.="<body>";
				$mensaje.="<div id='main'>";
				$mensaje.="<h1>Bienvenido Usuario Administrador</h1>";
				
				$mensaje.="<div id='box'>";
				$mensaje.="<form action='login' method='post'>";
				$mensaje.="<label>Username</label> ";
				$mensaje.="<input type='text' name='username' class='input' autocomplete='off' id='username'/>";
				$mensaje.="<label>Password </label>";
				$mensaje.="<input type='password' name='password' class='input' autocomplete='off' id='password'/><br/>";
				$mensaje.="<input type='submit' class='button button-primary' value='Log In' id='login'/> ";
				$mensaje.="<span class='msg'></span> ";
				$mensaje.="</div>";
				$mensaje.="</form>	";
				$mensaje.="</div>";
				
				$mensaje.="</div>";
				$mensaje.="</body>";
				$mensaje.="</html>";

			}
		 
			else
			{
				$mensaje = "El Archivo $nombre_archivo se ha creado";
			}
		 
			if($archivo = fopen($nombre_archivo, "a"))
			{
				if(fwrite($archivo, date("d m Y H:m:s"). " ". $mensaje. "\n"))
				{
					echo "Se ha ejecutado correctamente";
				}
				else
				{
					echo "Ha habido un problema al crear el archivo";
				}
		 
				fclose($archivo);
			}
			
			return $this->render('encuestaLoginBundle:encuesta:index.html.twig');		

    }


    public function verAction()
    {
		return $this->render('encuestaLoginBundle:encuesta:index.html.twig');				
    }

    public function editAction()
    {
		return $this->render('encuestaLoginBundle:encuesta:edit.html.twig');				
    }

    public function deleteAction()
    {
		return new JsonResponse( "OK" );				
    }


}