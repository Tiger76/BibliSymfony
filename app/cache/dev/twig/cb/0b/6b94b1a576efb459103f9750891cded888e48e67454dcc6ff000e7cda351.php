<?php

/* ::base.html.twig */
class __TwigTemplate_cb0b6b94b1a576efb459103f9750891cded888e48e67454dcc6ff000e7cda351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/bootstrap.min_1.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/global.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/color-button.css"), "html", null, true);
        echo "\" />
        <!-- js Boots_from -->
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/js/custom.js"), "html", null, true);
        echo "\"></script>
        <!-- end Boots_from -->
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    <body data-spy=\"scroll\" data-target=\".subnav\" data-offset=\"50\" data-twttr-rendered=\"true\">
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <a class=\"brand\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("bibliSymfony_base_accueil");
        echo "\">
                                <span>Bibli</span><span class=\"cl-blue\">Stream</span>
                            </a>
                        </div>
                        <div class=\" nav-collapse\">
                            <ul class=\"nav pull-right col-md-7\">
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("bibliSymfony_base_accueil");
        echo "\">Accueil</a></li>
                                
                                

                                <li><button onclick=\"self.location.href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("film_categorie");
        echo "'\" type=\"button\"  class=\"btn\">Categories</button></li>
                                <li><button onclick=\"self.location.href='";
        // line 40
        echo $this->env->getExtension('routing')->getPath("bibliSymfony_base_users");
        echo "'\" type=\"button\" class=\"btn\">Gestion Utilisateurs</button></li>
                                <li><button onclick=\"self.location.href='";
        // line 41
        echo $this->env->getExtension('routing')->getPath("film_liste");
        echo "'\" type=\"button\"  class=\"btn\">Gestion Films</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        
        <div class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 logo-vt\">
                        <a class=\"brand\" href=\"#\">
                            <span>Bibli</span><span class=\"cl-blue\">Stream</span>
                        </a>
                        <span class=\"coppy_right\">
                            <p>BibliStream est un site de la société</p>
                            <p>3C @ 2014 Tous droits réservés.</p>
                            <p>Projet CARCAIP13-15 CCI&Caux.</p>
                        </span>
                    </div>
                    
                    <div class=\"col-md-2 col-sm-3\">
                        <ul class=\"nav nav-list\">
                            <li class=\"nav-header\">CCI&Caux</li>
                            <li><a href=\"https://www.facebook.com/ccicaux.formation.76?fref=ts\"><i class=\"facebook\"></i>Facebook</a></li>
                            <li><a href=\"http://www.ccicaux-formation.com/\"><i class=\"cl-blue\"></i>Site web</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "BibliStream";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  170 => 49,  165 => 19,  159 => 4,  127 => 52,  125 => 51,  122 => 50,  120 => 49,  109 => 41,  105 => 40,  101 => 39,  94 => 35,  85 => 29,  72 => 20,  70 => 19,  65 => 17,  61 => 16,  57 => 15,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  28 => 4,  23 => 1,);
    }
}
