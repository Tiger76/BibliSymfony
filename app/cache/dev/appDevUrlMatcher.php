<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/films')) {
            // film_categorie
            if (0 === strpos($pathinfo, '/films/categorie') && preg_match('#^/films/categorie(?:/(?P<param>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_categorie')), array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::categorieFilmAction',  'param' => 'ok',));
            }

            if (0 === strpos($pathinfo, '/films/ge')) {
                // film_gestionBa
                if ($pathinfo === '/films/gestionBa') {
                    return array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::gestionDifBaAction',  '_route' => 'film_gestionBa',);
                }

                // film_liste
                if ($pathinfo === '/films/gererFilms') {
                    return array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::gestionFilmsAction',  '_route' => 'film_liste',);
                }

            }

            if (0 === strpos($pathinfo, '/films/ajout')) {
                // film_liste_ajout
                if ($pathinfo === '/films/ajoutFilm') {
                    return array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::ajoutFilmAction',  '_route' => 'film_liste_ajout',);
                }

                // film_categorie_ajout
                if ($pathinfo === '/films/ajoutCategorie') {
                    return array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::ajoutCategorieAction',  '_route' => 'film_categorie_ajout',);
                }

            }

            if (0 === strpos($pathinfo, '/films/supprime')) {
                // film_categorie_supprime
                if (0 === strpos($pathinfo, '/films/supprimeCategorie') && preg_match('#^/films/supprimeCategorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_categorie_supprime')), array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::supprimeCategorieAction',));
                }

                // film_supprimer
                if (0 === strpos($pathinfo, '/films/supprimer') && preg_match('#^/films/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_supprimer')), array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::supprimeFilmAction',));
                }

            }

            // film_homepage
            if (preg_match('#^/films/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_homepage')), array (  '_controller' => 'BibliSymfony\\FilmBundle\\Controller\\DefaultController::ficheFilmAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // bibliSymfony_base_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'BibliSymfony\\BaseBundle\\Controller\\DefaultController::loginAction',  '_route' => 'bibliSymfony_base_login',);
            }

        }

        // bibliSymfony_base_users
        if ($pathinfo === '/users') {
            return array (  '_controller' => 'BibliSymfony\\BaseBundle\\Controller\\DefaultController::gestionUtilisateursAction',  '_route' => 'bibliSymfony_base_users',);
        }

        // bibliSymfony_base_location
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bibliSymfony_base_location')), array (  '_controller' => 'BibliSymfony\\BaseBundle\\Controller\\DefaultController::gestionLocationsAction',));
        }

        // bibliSymfony_base_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bibliSymfony_base_accueil');
            }

            return array (  '_controller' => 'BibliSymfony\\BaseBundle\\Controller\\DefaultController::bienvenueAction',  '_route' => 'bibliSymfony_base_accueil',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
