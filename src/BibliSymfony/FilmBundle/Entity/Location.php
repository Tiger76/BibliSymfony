<?php

namespace BibliSymfony\FilmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BibliSymfony\FilmBundle\Entity\LocationRepository")
 */
class Location
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateLocation", type="date")
     */
    private $dateLocation;
    
    /** 
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="listeFilm", cascade={"persist"})
     */
    private $idUtilisateur;

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
     * Set dateLocation
     *
     * @param \DateTime $dateLocation
     * @return Location
     */
    public function setDateLocation($dateLocation)
    {
        $this->dateLocation = $dateLocation;
    
        return $this;
    }

    /**
     * Get dateLocation
     *
     * @return \DateTime 
     */
    public function getDateLocation()
    {
        return $this->dateLocation;
    }

    /**
     * Set idUtilisateur
     *
     * @param \BibliSymfony\FilmBundle\Entity\Utilisateur $idUtilisateur
     * @return Location
     */
    public function setIdUtilisateur(\BibliSymfony\FilmBundle\Entity\Utilisateur $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;
    
        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \BibliSymfony\FilmBundle\Entity\Utilisateur 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
}
