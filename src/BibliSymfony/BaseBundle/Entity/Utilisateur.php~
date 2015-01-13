<?php

namespace BibliSymfony\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BibliSymfony\BaseBundle\Entity\UtilisateurRepository")
 */
class Utilisateur
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
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="monnaie", type="integer")
     */
    private $monnaie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estAdmin", type="boolean")
     */
    private $estAdmin;
    
    /** 
     * @ORM\OneToMany(targetEntity="BibliSymfony\FilmBundle\Entity\Location", mappedBy="idUtilisateur", cascade={"persist"})
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
     * Set login
     *
     * @param string $login
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Utilisateur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set monnaie
     *
     * @param integer $monnaie
     * @return Utilisateur
     */
    public function setMonnaie($monnaie)
    {
        $this->monnaie = $monnaie;
    
        return $this;
    }

    /**
     * Get monnaie
     *
     * @return integer 
     */
    public function getMonnaie()
    {
        return $this->monnaie;
    }

    /**
     * Set estAdmin
     *
     * @param boolean $estAdmin
     * @return Utilisateur
     */
    public function setEstAdmin($estAdmin)
    {
        $this->estAdmin = $estAdmin;
    
        return $this;
    }

    /**
     * Get estAdmin
     *
     * @return boolean 
     */
    public function getEstAdmin()
    {
        return $this->estAdmin;
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
     * @param \BibliSymfony\BaseBundle\Entity\Location $listeFilm
     * @return Utilisateur
     */
    public function addListeFilm(\BibliSymfony\BaseBundle\Entity\Location $listeFilm)
    {
        $this->listeFilm[] = $listeFilm;
    
        return $this;
    }

    /**
     * Remove listeFilm
     *
     * @param \BibliSymfony\BaseBundle\Entity\Location $listeFilm
     */
    public function removeListeFilm(\BibliSymfony\BaseBundle\Entity\Location $listeFilm)
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
