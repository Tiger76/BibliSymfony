<?php

/* FilmBundle:Default:gestionDifBA.html.twig */
class __TwigTemplate_8fc5c25c24fa613ea7e61afbef46412899ae269fe008a816027ac2ca4a6df5a0 extends Twig_Template
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
        <title>Liste film</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/global.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/color-button.css\" />
        <!-- js Boots_from -->
        <script src=\"assets/js/jquery.js\"></script>
        <script src=\"assets/js/bootstrap.min.js\"></script>
        <script src=\"assets/js/custom.js\"></script>
        <!-- end Boots_from -->
    </head>

    <body data-spy=\"scroll\" data-target=\".subnav\" data-offset=\"50\" data-twttr-rendered=\"true\">

        <div class=\"main\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"box-wrapper span9\">
                        <div class=\"title\">
                            <h3><a href=\"#\">Liste film à diffuser</a></h3>
                        </div>
                        <table class=\"table table-striped table-bordered table-condensed\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th>Genre</th>
                                    <th>Description</th>
                                    <th>Diffuser ?</th>
                                </tr>
                            </thead>

                            <tbody>
                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFilms"]) ? $context["listeFilms"] : $this->getContext($context, "listeFilms")));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 42
            echo "                                                                              
                                <tr>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "titre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], "idCategorie", array()), "titre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "description", array()), "html", null, true);
            echo "</td>
                                    <td><input type=\"checkbox\"></td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </tbody>
                        </table>
                        <div class=\"navigation pagination pull-right\">
                            <ul>
                                <li><a href=\"#\">←</a></li>
                                <li><a class=\"active\" href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">→</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"box-wrapper span3\">
                        <div class=\"title\">
                            <h3><a href=\"#\">2 B-A choisies</a></h3>
                        </div>
                        <table class=\"table table-striped table-bordered table-condensed\">

                            <thead>
                                <tr>
                                    <th>Film</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><a href=\"#\">rocky</a></td>
                                </tr>
                                <tr>
                                    <td><a href=\"#\">Robin</a></td>
                                </tr>

                            </tbody>
                        </table>
                        <div class=\"navigation pagination pull-right\">
                            <ul>
                                <li><a href=\"#\">←</a></li>
                                <li><a href=\"#\">→</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end main -->

    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "FilmBundle:Default:gestionDifBA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 52,  90 => 47,  86 => 46,  82 => 45,  78 => 44,  74 => 42,  70 => 41,  31 => 4,  28 => 3,);
    }
}
