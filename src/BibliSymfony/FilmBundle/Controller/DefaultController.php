<?php

namespace BibliSymfony\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function categorieFilmAction()
    {
        return $this->render('FilmBundle:Default:index.html.twig');
        
    }
    
     public function ficheFilmAction()
    {
        return $this->render('FilmBundle:Default:index.html.twig');
        
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
