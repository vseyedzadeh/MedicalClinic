<?php

/* /patient/myaccount.html.twig */
class __TwigTemplate_c841c4d553bafbda291115b4288db6df358ae6ab3f28e7dff7744ee2ef040e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "/patient/myaccount.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["MyAccount"]) ? $context["MyAccount"] : null), "html", null, true);
    }

    // line 4
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 5
        echo "        <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

    ";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        echo " 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "        <section id=\"padding\" class=\"section-sm-padding\">
        </section>
        <div class=\"container\">
            <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">      

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"nav nav-pills nav-justified\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link active\" href=\"/patient/myaccount\">My Account</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/bookappointment\">Make Booking</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/patient/mybooking\">My Bookings</a>
                        </li>

                    </ul>
                </div>
            </nav>

            
            <div class=\"col-xs-12\">
                <div class=\"mha-common-header\"> 
                    <p></p>
                    <p> 
                        Quisque eu lobortis nunc. Sed elementum euismod ullamcorper. Vivamus pellentesque sapien ac rhoncus sodales. Proin faucibus quis lorem eu elementum. Cras vehicula congue nisi, non ultricies dui placerat consectetur. Nunc fermentum non orci sed malesuada. Sed quis malesuada turpis. Sed ut magna ut sem sollicitudin rutrum dapibus vel augue.
                    </p>
                    <p> 
                        Quisque eu lobortis nunc. Sed elementum euismod ullamcorper. Vivamus pellentesque sapien ac rhoncus sodales. Proin faucibus quis lorem eu elementum. Cras vehicula congue nisi, non ultricies dui placerat consectetur. Nunc fermentum non orci sed malesuada. Sed quis malesuada turpis. Sed ut magna ut sem sollicitudin rutrum dapibus vel augue.
                    </p>
                    <p> 
                        Quisque eu lobortis nunc. Sed elementum euismod ullamcorper. Vivamus pellentesque sapien ac rhoncus sodales. Proin faucibus quis lorem eu elementum. Cras vehicula congue nisi, non ultricies dui placerat consectetur. Nunc fermentum non orci sed malesuada. Sed quis malesuada turpis. Sed ut magna ut sem sollicitudin rutrum dapibus vel augue.
                    </p>
                </div>
            </div>
        </div>
        <section id=\"padding\" class=\"section-sm-padding\">
        </section>
    ";
    }

    public function getTemplateName()
    {
        return "/patient/myaccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  56 => 15,  48 => 10,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

{% block title MyAccount %}
    {% block matchpwd %}
        <script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

    {% endblock %}
    {% block css %} 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
    {% endblock %}


    {% block content %}
        <section id=\"padding\" class=\"section-sm-padding\">
        </section>
        <div class=\"container\">
            <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">      

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"nav nav-pills nav-justified\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link active\" href=\"/patient/myaccount\">My Account</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/bookappointment\">Make Booking</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/patient/mybooking\">My Bookings</a>
                        </li>

                    </ul>
                </div>
            </nav>

            
            <div class=\"col-xs-12\">
                <div class=\"mha-common-header\"> 
                    <p></p>
                    <p> 
                        Quisque eu lobortis nunc. Sed elementum euismod ullamcorper. Vivamus pellentesque sapien ac rhoncus sodales. Proin faucibus quis lorem eu elementum. Cras vehicula congue nisi, non ultricies dui placerat consectetur. Nunc fermentum non orci sed malesuada. Sed quis malesuada turpis. Sed ut magna ut sem sollicitudin rutrum dapibus vel augue.
                    </p>
                    <p> 
                        Quisque eu lobortis nunc. Sed elementum euismod ullamcorper. Vivamus pellentesque sapien ac rhoncus sodales. Proin faucibus quis lorem eu elementum. Cras vehicula congue nisi, non ultricies dui placerat consectetur. Nunc fermentum non orci sed malesuada. Sed quis malesuada turpis. Sed ut magna ut sem sollicitudin rutrum dapibus vel augue.
                    </p>
                    <p> 
                        Quisque eu lobortis nunc. Sed elementum euismod ullamcorper. Vivamus pellentesque sapien ac rhoncus sodales. Proin faucibus quis lorem eu elementum. Cras vehicula congue nisi, non ultricies dui placerat consectetur. Nunc fermentum non orci sed malesuada. Sed quis malesuada turpis. Sed ut magna ut sem sollicitudin rutrum dapibus vel augue.
                    </p>
                </div>
            </div>
        </div>
        <section id=\"padding\" class=\"section-sm-padding\">
        </section>
    {% endblock %}", "/patient/myaccount.html.twig", "/home/cp4809/clinic.ipd10.com/templates/patient/myaccount.html.twig");
    }
}
