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
        echo "        <!-- end navbar -->
        <div class=\"main\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"box-wrapper span9\">
                        <div class=\"row\">
                            <div class=\"widget\"  style=\"padding:0 10px;\">
                                <div>
                                    <div class=\"title\">
                                        <h3><a href=\"#\">Catégories</a></h3>
                                    </div>
                                    <p><a href=\"#\"><img src=\"categs.jpg\"></a></p>
                                </div>
                            </div><!-- widget -->
                        </div>
                    </div>


                    <div class=\"box-wrapper span9\">
                        <div class=\"row\">
                            <div class=\"widget\"  style=\"padding:0 10px;\">
                                <div>
                                    <div class=\"title\">
                                        <h3><a href=\"#\">Catalogue</a></h3>
                                    </div>
                                    <p><a href=\"#\"><img src=\"films.jpg\"></a></p>
                                </div>
                            </div><!-- widget -->
                        </div>


                    </div>

                    <div class=\"box-wrapper span9\">
                        <div class=\"row\">
                            <div class=\"widget\"  style=\"padding:0 10px;\">
                                <div>
                                    <div class=\"title\">
                                        <h3><a href=\"#\">Utilisateurs</a></h3>
                                    </div>
                                    <p><a href=\"#\"><img src=\"utili.jpg\"></a></p>
                                </div>
                            </div><!-- widget -->
                        </div>


                    </div><!-- end body-content -->
                    
                   

                </div><!-- row -->
            </div><!-- end container -->
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
