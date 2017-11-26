<?php

/* access_denied.html.twig */
class __TwigTemplate_58215f16a3b3f2acada02e3fc3b8e35a02eb7c0e1f75a9e7412ed1bd74a9cd29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "access_denied.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Access Denied";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\"> 
    <h3>Sorry aou are not login or you are not autorized to see this page.</h3>
    
    <img src =\"/assets/img/AccessDenied.jpg\">
                </div>
            </div>
        </div>
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
";
    }

    public function getTemplateName()
    {
        return "access_denied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
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

{% block title %}Access Denied{% endblock %}
{% block content %}
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\"> 
    <h3>Sorry aou are not login or you are not autorized to see this page.</h3>
    
    <img src =\"/assets/img/AccessDenied.jpg\">
                </div>
            </div>
        </div>
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
{% endblock %}
", "access_denied.html.twig", "/home/cp4809/clinic.ipd10.com/templates/access_denied.html.twig");
    }
}
