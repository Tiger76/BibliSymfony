<?php

/* FilmBundle:Default:gestionFilms.html.twig */
class __TwigTemplate_3e87cb9018e3b33fd32e90bc0a5cf921ecc334f54654b55ad64be509d8a6c281 extends Twig_Template
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
\t<title>element</title>
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
\t\t\t\t\t\t      \t<h3>Gestion Films</h3>
\t\t\t\t\t\t      </div><!-- end title -->
\t\t\t\t\t\t      <FORM action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("film_liste_ajout");
        echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<table id=\"tableUser\" class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<th>N°</th>
\t\t\t\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t\t\t\t\t<th>Tarif</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de sortie</th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFilms"]) ? $context["listeFilms"] : $this->getContext($context, "listeFilms")));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "idCategorie", array()), "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "tarif", array()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["info"], "dateSortie", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t<td id=\"caseSuppression\"><a onclick=\"self.location.href='";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_supprimer", array("id" => $this->getAttribute($context["info"], "id", array()))), "html", null, true);
            echo "'\"href=\"#\" class=\"button\"><span class=\"delete\">Suppression</span></a></td>
\t\t\t\t\t\t\t\t\t\t<td id=\"caseModifier\"><a onclick=\"self.location.href='";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_homepage", array("id" => $this->getAttribute($context["info"], "id", array()))), "html", null, true);
            echo "'\" href=\"#\" class=\"button\"><span class=\"modifier\">Fiche</span></a></td>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</FORM>
\t\t\t\t\t\t\t\t<div id=\"ajoutUti\" class=\"visible\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan= \"3\" id=\"caseAjout\"><a href=\"#\" onclick=\"ajoutFilm()\" class=\"button\"><span class=\"user\">Ajouter un Film</span></a></td></td>
\t\t\t\t\t\t\t\t\t\t\t\t
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
\tfunction ajoutFilm(){
\t\t
\t\tdocument.getElementById('ajoutUti').className = \"cachee\";
\t
\t\tvar newRow = document.getElementById('tableUser').insertRow(-1);

\t\tvar newCell = newRow.insertCell(0);

\t\tnewCell.innerHTML = '-';

\t\tnewCell = newRow.insertCell(1);

\t\tnewCell.innerHTML = '<INPUT type=text name=\"Titre\" required>';

\t\tnewCell = newRow.insertCell(2);

\t\tnewCell.innerHTML = '<SELECT NAME=\"Categorie\" onChange=\"Lien()\" required> ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCateg"]) ? $context["listeCateg"] : $this->getContext($context, "listeCateg")));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            echo " <OPTION VALUE=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categ"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categ"], "titre", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</SELECT>';
\t\t
\t\tnewCell = newRow.insertCell(3);

\t\tnewCell.innerHTML = '<INPUT type=number min=\"0\" max=\"25\" name=\"Tarif\" required>';
\t\t
\t\tnewCell = newRow.insertCell(4);

\t\tnewCell.innerHTML = '<INPUT type=date name=\"Date_de_sortie\" required >';
\t\t
\t\tnewCell = newRow.insertCell(5);

\t\tnewCell.innerHTML = '<td id=\"caseSuppression\"><INPUT TYPE=\"submit\" NAME=\"annuler\" VALUE=\"Annuler\" onclick=\"supprimerChoix()\"></td>';
\t\t
\t\tnewCell = newRow.insertCell(6);

\t\tnewCell.innerHTML = '<td id=\"caseModifier\"><INPUT TYPE=\"submit\" NAME=\"ajouter\" VALUE=\"Valider\" onclick=\"validerChoix()\"></td>';
\t}
\t
\tfunction validerChoix()
\t{
\t\t//document.getElementById('ajoutUti').className = \"visible\"; // ligne inutile par la suite
\t\t// Ici il faudrat envoyer à la base une requete pour rajouter le nouvel utilisateur
\t\t// Puis actualiser la table
\t\t
\t}
\t
\tfunction supprimerChoix()
\t{
\t\t//document.getElementById('ajoutUti').className = \"visible\"; // ligne inutile par la suite
\t\t// Il suffit uniquement d'actualiser la page
\t}
\t
</script>
</html>

";
    }

    public function getTemplateName()
    {
        return "FilmBundle:Default:gestionFilms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 108,  119 => 58,  110 => 55,  106 => 54,  100 => 51,  95 => 49,  91 => 48,  87 => 47,  83 => 46,  80 => 45,  76 => 44,  60 => 31,  31 => 4,  28 => 3,);
    }
}
