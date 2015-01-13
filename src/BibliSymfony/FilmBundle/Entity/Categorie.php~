<?php

namespace BibliSymfony\FilmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BibliSymfony\FilmBundle\Entity\CategorieRepository")
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;
    
    /** 
     * @ORM\OneToMany(targetEntity="Film", mappedBy="idCategorie", cascade={"persist"})
     */
    private $listeFilm;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Categorie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Categorie
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Categorie
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    
        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Categorie
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeFilm = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeFilm
     *
     * @param \BibliSymfony\FilmBundle\Entity\Film $listeFilm
     * @return Categorie
     */
    public function addListeFilm(\BibliSymfony\FilmBundle\Entity\Film $listeFilm)
    {
        $this->listeFilm[] = $listeFilm;
    
        return $this;
    }

    /**
     * Remove listeFilm
     *
     * @param \BibliSymfony\FilmBundle\Entity\Film $listeFilm
     */
    public function removeListeFilm(\BibliSymfony\FilmBundle\Entity\Film $listeFilm)
    {
        $this->listeFilm->removeElement($listeFilm);
    }

    /**
     * Get listeFilm
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeFilm()
    {
        return $this->listeFilm;
    }
}
