<?php

/* FilmBundle:Default:categorieFilm.html.twig */
class __TwigTemplate_51d25e4964ad1aab92352b9937653b09370fe6298ede3d76d30f266cb8a80d51 extends Twig_Template
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
\t\t\t<div class=\"tabbable span9\">
\t\t\t\t\t\t<div class=\"box-table widget\">
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t      <div class=\"title\">
\t\t\t\t\t\t      \t<h3>Gestion Catégorie</h3>
\t\t\t\t\t\t      </div><!-- end title -->
\t\t\t\t\t\t\t\t<table id=\"tableUser\" class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t\t\t\t\t<th>Titre Catégorie</th>
\t\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t<td>Horreur</td>
\t\t\t\t\t\t\t\t\t\t<td>Du gore, des filles stupides, et les noirs qui crevent les premiers comme toujours !</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td id=\"caseSuppression\"><a href=\"#\" class=\"button\"><span class=\"delete\">Suppression</span></a></td>
\t\t\t\t\t\t\t\t\t\t<td id=\"caseModifier\"><a href=\"#\" class=\"button\"><span class=\"modifier\">Modifier</span></a></td>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t<td>Porn</td>
\t\t\t\t\t\t\t\t\t\t<td>T'as vraiment besoin d'une description ?</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td id=\"caseSuppression\"><a href=\"#\" class=\"button\"><span class=\"delete\">Suppression</span></a></td>
\t\t\t\t\t\t\t\t\t\t<td id=\"caseModifier\"><a href=\"#\" class=\"button\"><span class=\"modifier\">Modifier</span></a></td>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div id=\"ajoutUti\" class=\"visible\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan= \"3\" id=\"caseAjout\"><a href=\"#\" onclick=\"ajoutUtilisateur()\" class=\"button\"><span class=\"user\">Ajouter un utilisateur</span></a></td></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
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

<script type=\"text/javascript\">
\t
\tfunction ajoutUtilisateur(){
\t\t
\t\tdocument.getElementById('ajoutUti').className = \"cachee\";
\t
\t\tvar newRow = document.getElementById('tableUser').insertRow(-1);

\t\tvar newCell = newRow.insertCell(0);

\t\tnewCell.innerHTML = 'id auto';

\t\tnewCell = newRow.insertCell(1);

\t\tnewCell.innerHTML = '<INPUT type=text name=\"Titre Catégorie\">';
\t\t
\t\tnewCell = newRow.insertCell(2);

\t\tnewCell.innerHTML = '<INPUT type=text name=\"Description\">';
\t\t
\t\tnewCell = newRow.insertCell(3);

\t\tnewCell.innerHTML = '<INPUT type=file name=\"Image\">';
\t\t
\t\tnewCell = newRow.insertCell(4);

\t\tnewCell.innerHTML = '<td id=\"caseSuppression\"><INPUT TYPE=\"submit\" NAME=\"annuler\" VALUE=\"Annuler\" onclick=\"supprimerChoix()\"></td>';
\t\t
\t\tnewCell = newRow.insertCell(5);

\t\tnewCell.innerHTML = '<td id=\"caseModifier\"><INPUT TYPE=\"submit\" NAME=\"ajouter\" VALUE=\"Valider\" onclick=\"validerChoix()\"></td></FORM>';
\t}
\t
\tfunction validerChoix()
\t{
\t\tdocument.getElementById('ajoutUti').className = \"visible\"; // ligne inutile par la suite
\t\t// Ici il faudrat envoyer à la base une requete pour rajouter le nouvel utilisateur
\t\t// Puis actualiser la table
\t}
\t
\tfunction supprimerChoix()
\t{
\t\tdocument.getElementById('ajoutUti').className = \"visible\"; // ligne inutile par la suite
\t\t// Il suffit uniquement d'actualiser la page
\t}
\t
</script>
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
        return array (  31 => 4,  28 => 3,);
    }
}
