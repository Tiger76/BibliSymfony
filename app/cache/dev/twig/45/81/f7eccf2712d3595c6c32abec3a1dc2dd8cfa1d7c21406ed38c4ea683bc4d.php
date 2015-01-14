<?php

/* FilmBundle:Default:categorieFilm.html.twig */
class __TwigTemplate_4581f7eccf2712d3595c6c32abec3a1dc2dd8cfa1d7c21406ed38c4ea683bc4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<html>
<head>
\t<title>Catalogue</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/global.css\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/color-button.css\" />
\t<!-- js Boots_from -->
\t<script src=\"assets/js/jquery.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/custom.js\"></script>
\t<!-- end Boots_from -->
</head>

<body data-spy=\"scroll\" data-target=\".subnav\" data-offset=\"50\" data-twttr-rendered=\"true\">

<div class=\"main\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"box-wrapper span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"Action\">
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Action</a></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"ct-img\"><a href=\"listefilmaction.html\"><img src=\"assets/img/img-blog3.jpg\"></a></p>
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t        <thead>
\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <th>#</th>
\t\t\t\t\t\t            <th>Titre</th>
\t\t\t\t\t\t            <th>Genre</th>
\t\t\t\t\t\t            <th>Description</th>
\t\t\t\t\t\t          </tr>
\t\t\t\t\t\t        </thead>

\t\t\t\t\t\t        <tbody>
\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>1</td>
\t\t\t\t\t\t            <td><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("film_homepage", array("id" => 2));
        echo "\">liendetest</a></td>
\t\t\t\t\t\t            <td>Combat</td>
\t\t\t\t\t\t            <td>de la bagarre</td>
\t\t\t\t\t\t          </tr>

\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>2</td>
\t\t\t\t\t\t            <td><a href=\"#\">Jacob</a></td>
\t\t\t\t\t\t            <td>Thornton</td>
\t\t\t\t\t\t            <td>jacob@gmail.com</td>
\t\t\t\t\t\t          </tr>

\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>3</td>
\t\t\t\t\t\t            <td><a href=\"#\">Larry</a></td>
\t\t\t\t\t\t            <td>the Bird</td>
\t\t\t\t\t\t            <td>larry@gmail.com</td>
\t\t\t\t\t\t          </tr>

\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>4</td>
\t\t\t\t\t\t            <td><a href=\"#\">Robin</a></td>
\t\t\t\t\t\t            <td>Thornton</td>
\t\t\t\t\t\t            <td>robin@gmail.com</td>
\t\t\t\t\t\t          </tr>
\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>5</td>
\t\t\t\t\t\t            <td><a href=\"#\">Batman</a></td>
\t\t\t\t\t\t            <td>Otto</td>
\t\t\t\t\t\t            <td>batman@gmail.com</td>
\t\t\t\t\t\t          </tr>

\t\t\t\t\t\t        </tbody>
\t\t\t\t\t\t      </table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- widget -->
\t\t\t\t\t
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"Action\">
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Comedie</a></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"ct-img\"><a href=\"\"><img src=\"assets/img/img-blog3.jpg\"></a></p>
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t        <thead>
\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <th>#</th>
\t\t\t\t\t\t            <th>Titre</th>
\t\t\t\t\t\t            <th>Genre</th>
\t\t\t\t\t\t            <th>Description</th>
\t\t\t\t\t\t          </tr>
\t\t\t\t\t\t        </thead>

\t\t\t\t\t\t        <tbody>
\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>1</td>
\t\t\t\t\t\t            <td><a href=\"#\">rocky</a></td>
\t\t\t\t\t\t            <td>Combat</td>
\t\t\t\t\t\t            <td>de la bagarre</td>
\t\t\t\t\t\t          </tr>

\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>2</td>
\t\t\t\t\t\t            <td><a href=\"#\">Jacob</a></td>
\t\t\t\t\t\t            <td>Thornton</td>
\t\t\t\t\t\t            <td>jacob@gmail.com</td>
\t\t\t\t\t\t          </tr>

\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>3</td>
\t\t\t\t\t\t            <td><a href=\"#\">Larry</a></td>
\t\t\t\t\t\t            <td>the Bird</td>
\t\t\t\t\t\t            <td>larry@gmail.com</td>
\t\t\t\t\t\t          </tr>

\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>4</td>
\t\t\t\t\t\t            <td><a href=\"#\">Robin</a></td>
\t\t\t\t\t\t            <td>Thornton</td>
\t\t\t\t\t\t            <td>robin@gmail.com</td>
\t\t\t\t\t\t          </tr>
\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t            <td>5</td>
\t\t\t\t\t\t            <td><a href=\"#\">Batman</a></td>
\t\t\t\t\t\t            <td>Otto</td>
\t\t\t\t\t\t            <td>batman@gmail.com</td>
\t\t\t\t\t\t          </tr>

\t\t\t\t\t\t        </tbody>
\t\t\t\t\t\t      </table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- widget -->
\t\t\t


\t\t\t<div class=\"box-content-widget span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t</div><!-- widget -->
\t\t\t\t\t\t
\t\t\t\t</div><!-- row -->
\t</div><!-- box-content-widget -->
</div>
</div><!-- end body-content -->
\t\t\t
\t\t\t<div class=\"sidebar-content span3\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t</div><!-- row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"box-wrapper span3\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"title bg-title span3\">
\t\t\t\t\t\t\t\t<h3>Dernier ajout</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"thumbnails thumbnails-horizontal\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"span3\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail border-radius-top\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t<a class=\"overlay\" href=\"detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icons/play.png\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<img class=\"border-radius-top\" src=\"assets/img/pj3.jpg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h5><a href=\"detail.html\"> </a></h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box border-radius-bottom\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_torrent pull-left\">Titre du film</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"number-view pull-right\"><i class=\"icon-white icon-eye-open\"></i>prix jeton</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"span3\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail border-radius-top\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t<a class=\"overlay\" href=\"detail.html\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/icons/play.png\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<img class=\"border-radius-top\" src=\"assets/img/pj3.jpg\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h5><a href=\"detail.html\"> </a></h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box border-radius-bottom\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_torrent pull-left\">Titre du film</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"number-view pull-right\"><i class=\"icon-white icon-eye-open\"></i>prix jeton</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- end thumbnails-style1 -->
\t\t\t\t</div><!-- row -->

\t\t\t</div><!-- end sidebar-content -->
\t\t</div><!-- row -->
\t</div><!-- end container -->
</div><!-- end main -->

</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "FilmBundle:Default:categorieFilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 48,  31 => 4,  28 => 3,);
    }
}
