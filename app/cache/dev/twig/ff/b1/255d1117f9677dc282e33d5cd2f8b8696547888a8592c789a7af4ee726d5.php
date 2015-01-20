<?php

/* FilmBundle:Default:ficheFilm.html.twig */
class __TwigTemplate_ffb1255d1117f9677dc282e33d5cd2f8b8696547888a8592c789a7af4ee726d5 extends Twig_Template
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
\t<title>Fiche film</title>
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
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"box-content-widget box-video-play span9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"title bg-title span9\">
\t\t\t\t\t\t\t\t<h3>FILM</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "lienFilm", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- end video-play -->\t<div class=\"box-content-widget box-video-play span9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"title bg-title span9\">
\t\t\t\t\t\t\t\t<h3>BANDE ANNONCE</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "lienBA", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- end video-play -->
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"box-content-widget span9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"title bg-title span9\">
\t\t\t\t\t\t\t\t<h3>Description</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"widget-content-pd\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "description", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- widget -->
\t\t\t\t\t</div><!-- box-content-widget -->
\t\t\t\t</div><!-- row -->
\t\t</div>
\t</div><!-- end container -->
</div><!-- end main -->
<script type=\"text/javascript\">

</script>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "FilmBundle:Default:ficheFilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 55,  72 => 40,  60 => 31,  31 => 4,  28 => 3,);
    }
}
