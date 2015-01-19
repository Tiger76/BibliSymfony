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
        $listeUti =  $this->getDoctrine()->getManager()
                ->getRepository("BaseBundle:Utilisateur")
                ->findAll();
        
        return $this->render('BaseBundle:Default:gestionUtilisateurs.html.twig', array('listeUti' => $listeUti));
    }
    
    public function gestionLocationsAction($id)
    {
        $location =  $this->getDoctrine()->getManager()
                ->getRepository("FilmBundle:Location")
                ->findByIdUtilisateur($id);
        return $this->render('BaseBundle:Default:gestionLocations.html.twig',array('location'=>$location));
        
    }

    /*public function gestionUtilisateursAction()
    {
        return $this->render('BaseBundle:Default:index.html.twig', array('name' => $name));
    }*/
}
