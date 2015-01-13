<?php

namespace BibliSymfony\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function loginAction()
    {
        return $this->render('BaseBundle:Default:login.html.twig');
    }
    
    public function bienvenueAction()
    {
        return $this->render('BaseBundle:Default:accueil.html.twig');
    }
    
    public function gestionUtilisateursAction()
    {
        return $this->render('BaseBundle:Default:gestionUtilisateurs.html.twig');
    }

    /*public function gestionUtilisateursAction()
    {
        return $this->render('BaseBundle:Default:index.html.twig', array('name' => $name));
    }*/
}
