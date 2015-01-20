<?php

/* BaseBundle:Default:accueil.html.twig */
class __TwigTemplate_a3642f6e813150513af7c7b6b46e1907187985cbb62324aa746538ff335459bd extends Twig_Template
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
        echo "        <div class=\"main\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"box-wrapper span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"widgetAccueil\" class=\"widget\">
\t\t\t\t\t\t\t<div class=\"Action\">
\t\t\t\t\t\t\t\t<div class=\"title\">
                                                                    <center><h3><a href=\"#\">Bienvenue</a></h3></center>
                                                                    <center> on pourrait mettre un logo?</center>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- widget -->

\t\t\t<div class=\"box-content-widget span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"widgetAccueil\" class=\"widget\">
                                            <div class=\"Action\">
\t\t\t\t\t\t<div class=\"title\">
                                                    <center><h3><a href=\"#\">le concept</a></h3></center>
                                                    <center> Nous sommes des gens qui ont eu l'idée de faire ce site ....<br>
                                                            ou alors, une photo de nous tous ou pas ! 
                                                    </center>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
                                            </div>
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
                                                                                    
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h5><a href=\"detail.html\"> </a></h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box border-radius-bottom\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_torrent pull-left\">Titre du film</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"number-view pull-right\">prix jeton</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"span3\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail border-radius-top\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t<a class=\"overlay\" href=\"detail.html\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h5><a href=\"detail.html\"> </a></h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box border-radius-bottom\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_torrent pull-left\">Titre du film</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"number-view pull-right\">prix jeton</span>
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
";
    }

    public function getTemplateName()
    {
        return "BaseBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
