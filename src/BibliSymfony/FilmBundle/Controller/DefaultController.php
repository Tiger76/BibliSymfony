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
    
     public function ficheFilmAction($id)
    {
        $film =  $this->getDoctrine()->getManager()
                ->getRepository("FilmBundle:Film")
                ->find($id);
        return $this->render('FilmBundle:Default:ficheFilm.html.twig',array('film'=>$film));
        
    }
    
     public function gestionFilmsAction()
    {
        $listeFilms =  $this->getDoctrine()->getManager()
                ->getRepository("FilmBundle:Film")
                ->findAll();

        return $this->render('FilmBundle:Default:gestionFilms.html.twig', array('listeFilms' => $listeFilms));
        
    }
    public function gestionDifBaAction()
    {
        $listeFilms =  $this->getDoctrine()->getManager()
                ->getRepository("FilmBundle:Film")
                ->findAll();
        return $this->render('FilmBundle:Default:gestionDifBA.html.twig', array('listeFilms' => $listeFilms));
        
    }
}
