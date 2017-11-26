<?php

/* drList.html.twig */
class __TwigTemplate_ea60ae24b3d032d1ab5c9a9eb476c0e190d575e5cd14d4c7a0e3bc5baa2facfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "drList.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'matchpwd' => array($this, 'block_matchpwd'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Specialit's List";
    }

    // line 4
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 5
        echo "    <!--<script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">  
                <div id=\"doctor\">
                    <ul class=\"list-group\">

                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["drList"]) ? $context["drList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dr"]) {
            // line 25
            echo "                            <div class=\"row\">
                                <li style=\"order: undefined; margin-bottom: 2px;\" class=\"list-group-item\"> 
                                    <div class=\"row\"> 
                                        <div class=\"col-sm-2\" style=\"width:150px !important;\" width=\"100\" height=\"100\">
                                            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "pathImage", array()), "html", null, true);
            echo "\" width=\"100\" height=\"100\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "lastName", array()), "html", null, true);
            echo "\" class=\"img-thumbnail img-responsive\">
                                        </div>  
                                        <div class=\"col-sm-6\">
                                            <h3>
                                                <a class=\"text-primary\" title=\"Book appointment with ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "lastName", array()), "html", null, true);
            echo "\" href=\"/doctors/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "lastName", array()), "html", null, true);
            echo "\" ><span itemprop=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "lastName", array()), "html", null, true);
            echo " </span></a>
                                            </h3>                        

                                        </div>

                                        <div class=\"col-sm-4 text-center\">                          
                                            <p class=\"text-info\">
                                                <a href=\"/doctors/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "lastName", array()), "html", null, true);
            echo "\" class=\"a btn btn-primary\" name=\"av_times\">See available times</a>

                                            </p>                      
                                        </div>             
                                    </div>
                                    <div class=\"row\">

                                        <div class=\"col-sm-8\">
                                            <div>
                                                <span itemprop=\"description\">
                                                    <p class=\"text-info text-justify\"> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "description", array()), "html", null, true);
            echo "</p>

                                                </span> 

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "drList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 60,  128 => 50,  111 => 40,  90 => 33,  80 => 29,  74 => 25,  70 => 24,  60 => 16,  57 => 15,  48 => 10,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block title %}Specialit's List{% endblock %}
{% block matchpwd %}
    <!--<script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

{% endblock %}
{% block css %} 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
{% endblock %}

{% block content %}
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">  
                <div id=\"doctor\">
                    <ul class=\"list-group\">

                        {% for dr in drList %}
                            <div class=\"row\">
                                <li style=\"order: undefined; margin-bottom: 2px;\" class=\"list-group-item\"> 
                                    <div class=\"row\"> 
                                        <div class=\"col-sm-2\" style=\"width:150px !important;\" width=\"100\" height=\"100\">
                                            <img src=\"{{dr.pathImage}}\" width=\"100\" height=\"100\" alt=\"{{dr.firstName }}{{dr.lastName }}\" class=\"img-thumbnail img-responsive\">
                                        </div>  
                                        <div class=\"col-sm-6\">
                                            <h3>
                                                <a class=\"text-primary\" title=\"Book appointment with {{dr.firstName}}-{{dr.lastName }}\" href=\"/doctors/{{dr.id}}/{{dr.firstName}}-{{dr.lastName }}\" ><span itemprop=\"name\">{{dr.firstName }}{{dr.lastName }} </span></a>
                                            </h3>                        

                                        </div>

                                        <div class=\"col-sm-4 text-center\">                          
                                            <p class=\"text-info\">
                                                <a href=\"/doctors/{{dr.id}}/{{dr.firstName}}-{{dr.lastName }}\" class=\"a btn btn-primary\" name=\"av_times\">See available times</a>

                                            </p>                      
                                        </div>             
                                    </div>
                                    <div class=\"row\">

                                        <div class=\"col-sm-8\">
                                            <div>
                                                <span itemprop=\"description\">
                                                    <p class=\"text-info text-justify\"> {{dr.description}}</p>

                                                </span> 

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "drList.html.twig", "/home/cp4809/clinic.ipd10.com/templates/drList.html.twig");
    }
}
