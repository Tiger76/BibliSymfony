<?php

/* BaseBundle:Default:login.html.twig */
class __TwigTemplate_0b0c28daff4dbafa66037ed4c8958d3b97c868ff0fe100161ad11b0b1fb04c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>login</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/global.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/css/color-button.css"), "html", null, true);
        echo "\" />
\t<!-- js Boots_from -->
\t<script src=\"assets/js/jquery.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/custom.js\"></script>
\t<!-- end Boots_from -->
</head>

<body data-spy=\"scroll\" data-target=\".subnav\" data-offset=\"50\" data-twttr-rendered=\"true\">
<div class=\"wrapper-login\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"login-content span4 offset4\">
\t\t\t\t<div class=\"header-login well\">
\t\t\t\t\t<h3>Identification</h3>
\t\t\t\t</div>
\t\t\t\t<form class=\"well\">
\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t<input type=\"text\" class=\"input\" placeholder=\"Entrez votre nom...\">
\t\t\t\t\t<label>Mot de passe</label>
\t\t\t\t\t<input type=\"text\" class=\"input\" placeholder=\"Entrez votre mot de passe...\">
\t\t\t\t\t</label>
\t\t\t\t  \t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("bibliSymfony_base_accueil");
        echo "\" type=\"submit\" class=\"btn btn-info\">Connexion</a><br><br>
\t\t\t\t        
\t\t\t\t</form>\t
\t\t\t</div>
\t\t<div>
                     <center><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/base/images/logoimg.png"), "html", null, true);
        echo "\" style=\"width:180px; height:231px; position:absolute; float:left; top:400px; left:670px\"/></center>
\t</div>
</div>
</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "BaseBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 35,  59 => 30,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
