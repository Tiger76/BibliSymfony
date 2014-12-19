<?php

namespace BibliSymfony\FilmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BibliSymfony\FilmBundle\Entity\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lienFilm", type="string", length=255)
     */
    private $lienFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="lienBa", type="string", length=255)
     */
    private $lienBa;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif", type="integer")
     */
    private $tarif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nouveaute", type="boolean")
     */
    private $nouveaute;

    /**
     * @var boolean
     *
     * @ORM\Column(name="baDif", type="boolean")
     */
    private $baDif;


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
     * @return Film
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
     * @return Film
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
     * Set lienFilm
     *
     * @param string $lienFilm
     * @return Film
     */
    public function setLienFilm($lienFilm)
    {
        $this->lienFilm = $lienFilm;
    
        return $this;
    }

    /**
     * Get lienFilm
     *
     * @return string 
     */
    public function getLienFilm()
    {
        return $this->lienFilm;
    }

    /**
     * Set lienBa
     *
     * @param string $lienBa
     * @return Film
     */
    public function setLienBa($lienBa)
    {
        $this->lienBa = $lienBa;
    
        return $this;
    }

    /**
     * Get lienBa
     *
     * @return string 
     */
    public function getLienBa()
    {
        return $this->lienBa;
    }

    /**
     * Set tarif
     *
     * @param integer $tarif
     * @return Film
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    
        return $this;
    }

    /**
     * Get tarif
     *
     * @return integer 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set nouveaute
     *
     * @param boolean $nouveaute
     * @return Film
     */
    public function setNouveaute($nouveaute)
    {
        $this->nouveaute = $nouveaute;
    
        return $this;
    }

    /**
     * Get nouveaute
     *
     * @return boolean 
     */
    public function getNouveaute()
    {
        return $this->nouveaute;
    }

    /**
     * Set baDif
     *
     * @param boolean $baDif
     * @return Film
     */
    public function setBaDif($baDif)
    {
        $this->baDif = $baDif;
    
        return $this;
    }

    /**
     * Get baDif
     *
     * @return boolean 
     */
    public function getBaDif()
    {
        return $this->baDif;
    }
}
