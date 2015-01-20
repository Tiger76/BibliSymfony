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
        echo "<div class=\"main\">
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
\t\t\t\t\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t\t\t\t\t<th>Login</th>
\t\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t<th>Jeton</th>
\t\t\t\t\t\t\t\t\t\t<th>Admin?</th>
                                                                                <th>Liste de film</th>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
                                                                            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeUti"]) ? $context["listeUti"] : $this->getContext($context, "listeUti")));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 27
            echo "                                                                                <tr>
                                                                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array()), "html", null, true);
            echo "</td>
                                                                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "login", array()), "html", null, true);
            echo "</td>
                                                                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "mail", array()), "html", null, true);
            echo "</td>
                                                                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "adresse", array()), "html", null, true);
            echo "</td>
                                                                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "monnaie", array()), "html", null, true);
            echo "</td>
                                                                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "estAdmin", array()), "html", null, true);
            echo "</td>
                                                                                    <td id=\"listeFilm\"><a onclick=\"self.location.href='";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bibliSymfony_base_location", array("id" => $this->getAttribute($context["info"], "id", array()))), "html", null, true);
            echo "'\" href=\"#\" class=\"button\">Liste Location</a></td>
                                                                                    <!--<td id=\"listeFilm\"><a href=\"#\" class=\"button\"><span class=\"listeFilm\">listeFilm</span></a></td>-->
                                                                                    <td id=\"caseSuppression\"><a href=\"#\" class=\"button\"><span class=\"delete\">Suppression</span></a></td>
                                                                                    <td id=\"caseModifier\"><a href=\"#\" class=\"button\"><span class=\"modifier\">Modifier</span></a></td>
                                                                                </tr>
                                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t\t\t\t\t</tbody>
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

\t\tnewCell.innerHTML = '<INPUT type=text name=\"Login\">';
\t\t
\t\tnewCell = newRow.insertCell(2);

\t\tnewCell.innerHTML = '<INPUT type=text name=\"Email\">';
\t\t
\t\tnewCell = newRow.insertCell(3);

\t\tnewCell.innerHTML = '<INPUT type=text name=\"Adresse\">';
\t\t
\t\tnewCell = newRow.insertCell(4);

\t\tnewCell.innerHTML = '<INPUT type=text name=\"Jeton\">';
\t\t
\t\tnewCell = newRow.insertCell(5);

\t\tnewCell.innerHTML = '<FORM NAME=\"Choix\"><SELECT NAME=\"adminChoix\" onChange=\"Lien()\"><OPTION VALUE=\"\">Administrateur?<OPTION VALUE=\"true\">Oui<OPTION VALUE=\"false\">Non</SELECT></FORM>';
\t\t
                newCell = newRow.insertCell(6);

\t\tnewCell.innerHTML = '<td></td>';
                
\t\tnewCell = newRow.insertCell(7);

\t\tnewCell.innerHTML = '<td id=\"caseSuppression\"><INPUT TYPE=\"submit\" NAME=\"annuler\" VALUE=\"Annuler\" onclick=\"supprimerChoix()\"></td>';
\t\t
\t\tnewCell = newRow.insertCell(8);

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
        return "BaseBundle:Default:gestionUtilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  59 => 27,  55 => 26,  31 => 4,  28 => 3,);
    }
}
