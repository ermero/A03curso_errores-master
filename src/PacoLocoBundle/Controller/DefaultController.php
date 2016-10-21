<?php

namespace PacoLocoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PacoLocoBundle:Default:index.html.twig');
    }
    //Nuevo action que muestra un mensaje
    public function msgAction() //error de letra 
    {
        return $this->render('PacoLocoBundle:Default:msg.html.twig');
    }

    //En este caso esta acción muestra el mensaje con texto
    public function msgTextoAction($texto)
    {
        $arrayData = array('texto' => $texto);
        return $this->render('PacoLocoBundle:Default:msgTexto.html.twig', $arrayData);
    }
}
