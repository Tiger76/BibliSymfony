<?php

namespace BibliSymfony\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BibliSymfony\FilmBundle\Entity\Film;
use Symfony\Component\Validator\Constraints\Date ;

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
                ->findOneById($id);
        return $this->render('FilmBundle:Default:ficheFilm.html.twig',array('film'=>$film));
        
    }
    
    public function gestionFilmsAction()
    {
        $listeFilms =  $this->getDoctrine()->getManager()
                ->getRepository("FilmBundle:Film")
                ->findAll();

        return $this->render('FilmBundle:Default:gestionFilms.html.twig', array('listeFilms' => $listeFilms));
        
    }

   

  

    public function ajoutFilmAction()
    {
        // recupere la categorie selon son ID (a changer pour le nom plus parlant)
        $id = $this->get('request')->request->get('Categorie');
        $repository = $this->getDoctrine()->getRepository("FilmBundle:Categorie");
        $categorie = $repository->findOneById($id);

        // converti la date
        $date = $this->get('request')->request->get('Date_de_sortie');
        $date = new \DateTime($date);

        $film = new Film();
        $film->setTitre($this->get('request')->request->get('Titre'));
        $film->setDescription('Veuillez renseigner la description');
        $film->setLienImage('lienvide');
        $film->setLienFilm('lienvide');
        $film->setLienBA('lienvide');
        $film->setTarif($this->get('request')->request->get('Tarif'));
        $film->setDateSortie($date);
        $film->setbaDif(false);
        $film->setIdCategorie($categorie);
        
        
        
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($film);
        $em->flush();

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
