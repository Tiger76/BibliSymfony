<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/films')) {
            // film_categorie
            if ($pathinfo === '/films/categorie') {
                return array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::categorieFilmAction',  '_route' => 'film_categorie',);
            }

            if (0 === strpos($pathinfo, '/films/ge')) {
                // film_gestionBa
                if ($pathinfo === '/films/gestionBa') {
                    return array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::gestionBaAction',  '_route' => 'film_gestionBa',);
                }

                // film_liste
                if ($pathinfo === '/films/gererFilms') {
                    return array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::gestionFilmsAction',  '_route' => 'film_liste',);
                }

            }

            // film_homepage
            if (preg_match('#^/films/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_homepage')), array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::ficheFilmAction',));
            }

        }

        // bibliSymfony_base_accueil
        if ($pathinfo === '/bienvenue') {
            return array (  '_controller' => 'BibliSymfony\\BaseBundle\\Controller\\DefaultController::bienvenueAction',  '_route' => 'bibliSymfony_base_accueil',);
        }

        // bibliSymfony_base_users
        if ($pathinfo === '/users') {
            return array (  '_controller' => 'BibliSymfony\\BaseBundle\\Controller\\DefaultController::gestionUtilisateursAction',  '_route' => 'bibliSymfony_base_users',);
        }

        // bibliSymfony_base_login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bibliSymfony_base_login');
            }

            return array (  '_controller' => 'BibliSymfony\\BaseBundle\\Controller\\DefaultController::loginAction',  '_route' => 'bibliSymfony_base_login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
