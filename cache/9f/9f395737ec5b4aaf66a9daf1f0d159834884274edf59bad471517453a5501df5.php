<?php

/* logout.html.twig */
class __TwigTemplate_4eb3d68f1314dfb86ed92b3562c025d4902102110b038666351b60c67040166a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("master.html.twig", "logout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'matchpwd' => array($this, 'block_matchpwd'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Logout";
    }

    // line 6
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 7
        echo "    <script type=\"text/javascript\">
        window.location.replace(\"http://clinic.ipd10.com\");
        </script>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\"> 
                <p>You've been logout. </p>                
            </div>
        </div>
    </div>

    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
";
    }

    public function getTemplateName()
    {
        return "logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  39 => 7,  36 => 6,  30 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends \"master.html.twig\" %}

{% block title %}Logout{% endblock %}

{% block matchpwd %}
    <script type=\"text/javascript\">
        window.location.replace(\"http://clinic.ipd10.com\");
        </script>
{% endblock %}

{% block content %}
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\"> 
                <p>You've been logout. </p>                
            </div>
        </div>
    </div>

    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
{% endblock %}", "logout.html.twig", "/home/cp4809/clinic.ipd10.com/templates/logout.html.twig");
    }
}
