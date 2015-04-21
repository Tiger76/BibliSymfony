<?php

namespace BibliSymfony\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BibliSymfony\FilmBundle\Entity\Film;
use BibliSymfony\FilmBundle\Entity\Categorie;
use Symfony\Component\Validator\Constraints\Date;

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

         $listeCateg =  $this->getDoctrine()->getManager()
                ->getRepository("FilmBundle:Categorie")
                ->findAll();

        return $this->render('FilmBundle:Default:gestionFilms.html.twig', array('listeFilms' => $listeFilms,'listeCateg' => $listeCateg));
        
    }

    public function supprimeFilmAction($id)
    {
        
        // ATTENTION ici on supprime
        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository("FilmBundle:Film")->find($id);
        $em->remove($film);
        $em->flush();

        
        return $this->redirect($this->generateUrl('film_liste'));
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

        return $this->redirect($this->generateUrl('film_liste'));
    }

    public function ajoutCategorieAction()
    {
        $categorie = new Categorie();
        $categorie->setTitre($this->get('request')->request->get('Titre'));
        $categorie->setDescription($this->get('request')->request->get('Description'));
        $categorie->setImage('lienvideA_FAIRE');
       
               
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($categorie);
        $em->flush();

        return $this->redirect($this->generateUrl('film_categorie'));
    }

    public function supprimeCategorieAction($id)
    {
        
        // ATTENTION ici on supprime
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository("FilmBundle:Categorie")->find($id);
        $em->remove($categorie);
        $em->flush();

        
        return $this->redirect($this->generateUrl('film_categorie'));
    }

    public function gestionDifBaAction()
    {
        $listeFilms =  $this->getDoctrine()->getManager()
                ->getRepository("FilmBundle:Film")
                ->findAll();
        return $this->render('FilmBundle:Default:gestionDifBA.html.twig', array('listeFilms' => $listeFilms));
        
    }
}
