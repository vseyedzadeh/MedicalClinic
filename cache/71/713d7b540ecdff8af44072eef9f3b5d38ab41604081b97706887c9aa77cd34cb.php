<?php

/* patient/makeAppointment.html.twig */
class __TwigTemplate_4de0290dbc53fc4ac7753e21a913422f3d72c418987ecb2a103585ef957fd4f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "patient/makeAppointment.html.twig", 1);
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
        echo "Make Appointment";
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
        echo "     <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">

        <form class=\"well form-horizontal\" method=\"POST\" id=\"apointment_form\" enctype=\"multipart/form-data\">           
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Speciallity: </label>  
                <div class=\"col-md-4 inputGroupContainer\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <select class=\"itemName form-control\"  name=\"speciality\">
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["r"]) ? $context["r"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "speciality", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "speciality", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </select>                    
                    </div>
                </div>
            </div>

            <!-- Text input-->           
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\"></label>
                <div class=\"col-md-4\"><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class=\"btn btn-warning\" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearch <span class=\"glyphicon glyphicon-search\"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                </div>
            </div>
        </form>
    </div>
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
";
    }

    public function getTemplateName()
    {
        return "patient/makeAppointment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  77 => 28,  73 => 27,  60 => 16,  57 => 15,  48 => 10,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title %}Make Appointment{% endblock %}
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

        <form class=\"well form-horizontal\" method=\"POST\" id=\"apointment_form\" enctype=\"multipart/form-data\">           
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\">Speciallity: </label>  
                <div class=\"col-md-4 inputGroupContainer\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <select class=\"itemName form-control\"  name=\"speciality\">
                            {% for item in r %}
                                <option value=\"{{ item.speciality }}\">{{ item.speciality }}</option>
                            {% endfor %}
                        </select>                    
                    </div>
                </div>
            </div>

            <!-- Text input-->           
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\"></label>
                <div class=\"col-md-4\"><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class=\"btn btn-warning\" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearch <span class=\"glyphicon glyphicon-search\"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                </div>
            </div>
        </form>
    </div>
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
{% endblock %}", "patient/makeAppointment.html.twig", "/home/cp4809/clinic.ipd10.com/templates/patient/makeAppointment.html.twig");
    }
}
