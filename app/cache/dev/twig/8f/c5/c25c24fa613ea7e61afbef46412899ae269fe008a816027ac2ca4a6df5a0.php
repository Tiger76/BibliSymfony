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
                            <h3><a href=\"#\">Liste film action</a></h3>
                        </div>
                        <table class=\"table table-striped table-bordered table-condensed\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th>Genre</th>
                                    <th>Description</th>
                                    <th>Utiliser BA</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href=\"#\">rocky</a></td>
                                    <td>Combat</td>
                                    <td>de la bagarre</td>
                                    <td><input type=\"checkbox\" checked></td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td><a href=\"#\">Jacob</a></td>
                                    <td>Thornton</td>
                                    <td>jacob@gmail.com</td>
                                    <td><input type=\"checkbox\"></td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td><a href=\"#\">Larry</a></td>
                                    <td>the Bird</td>
                                    <td>larry@gmail.com</td>
                                    <td><input type=\"checkbox\"></td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td><a href=\"#\">Robin</a></td>
                                    <td>Thornton</td>
                                    <td>robin@gmail.com</td>
                                    <td><input type=\"checkbox\" checked></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href=\"#\">Batman</a></td>
                                    <td>Otto</td>
                                    <td>batman@gmail.com</td>
                                    <td><input type=\"checkbox\"></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href=\"#\">Joker special</a></td>
                                    <td>Le seul, le vrai joker. Vous en reprendrez un verre.</td>
                                    <td>joker@gmail.com</td>
                                    <td><input type=\"checkbox\"></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><a href=\"#\">Pinguin</a></td>
                                    <td>Un special pinguin.</td>
                                    <td>fruits@gmail.com</td>
                                    <td><input type=\"checkbox\"></td>
                                </tr>

                            </tbody>
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
        return array (  31 => 4,  28 => 3,);
    }
}
