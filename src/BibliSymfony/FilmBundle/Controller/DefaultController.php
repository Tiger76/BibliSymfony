<?php

namespace BibliSymfony\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FilmBundle:Default:index.html.twig', array('name' => $name));
    }
}