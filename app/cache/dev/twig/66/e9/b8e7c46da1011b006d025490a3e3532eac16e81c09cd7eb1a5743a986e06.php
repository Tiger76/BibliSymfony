<?php

/* BaseBundle:Default:gestionUtilisateurs.html.twig */
class __TwigTemplate_66e9b8e7c46da1011b006d025490a3e3532eac16e81c09cd7eb1a5743a986e06 extends Twig_Template
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
\t<title>Gestion Utilisateurs</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/global.css\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/color-button.css\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/element.css\" />
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
\t\t\t<div class=\"tabbable span9\">
\t\t\t\t\t\t<div class=\"box-table widget\">
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t      <div class=\"title\">
\t\t\t\t\t\t      \t<h3>Gestion Utilisateur</h3>
\t\t\t\t\t\t      </div><!-- end title -->
\t\t\t\t\t\t\t\t<table id=\"tableUser\" class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<th>Identifiant</th>
\t\t\t\t\t\t\t\t\t\t<th>Jetons</th>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<td>ZorroLePlusBo</td>
\t\t\t\t\t\t\t\t\t\t<td>100</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td id=\"caseModifier\"><a href=\"#\" class=\"button\"><span class=\"modifier\">Modifier</span></a></td>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<td>RaHanlePoilu</td>
\t\t\t\t\t\t\t\t\t\t<td>100</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td id=\"caseModifier\"><a href=\"#\" class=\"button\"><span class=\"modifier\">Modifier</span></a></td>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t      <div class=\"footer-table\">
\t\t\t\t            \t<div class=\"navigation pagination pull-right\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">←</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"active\" href=\"#\">1</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">→</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    </div><!-- end box-table style1-->
\t\t</div>
\t</div><!-- end container -->
</div><!-- end main -->


</body>


</html>

";
    }

    public function getTemplateName()
    {
        return "BaseBundle:Default:gestionUtilisateurs.html.twig";
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
