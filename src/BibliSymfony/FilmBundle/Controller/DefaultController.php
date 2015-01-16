<?php

namespace BibliSymfony\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function categorieFilmAction()
    {
        $listeCateg =  $this->getDoctrine()->getManager()
                ->getRepository("FilmBundle:Categorie")
                ->findAll();
        
        return $this->render('FilmBundle:Default:categorieFilm.html.twig', array('listeCateg' => $listeCateg));
        
    }
    
     public function ficheFilmAction()
    {
        return $this->render('FilmBundle:Default:ficheFilm.html.twig');
        
    }
    
     public function gestionFilmsAction()
    {
        return $this->render('FilmBundle:Default:gestionFilms.html.twig');
        
    }
    public function gestionDifBaAction()
    {
        return $this->render('FilmBundle:Default:index.html.twig');
        
    }
}
