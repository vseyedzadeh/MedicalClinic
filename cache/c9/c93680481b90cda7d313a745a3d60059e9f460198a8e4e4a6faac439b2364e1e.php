<?php

/* login.html.twig */
class __TwigTemplate_458d70d006e381ba74491f0732d72f2e382511aa620b84cc18c3207965c20583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <!-- <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
     <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
             <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-8\">
               
                            <form id=\"login_form\" class=\"form-group\" action=\"\" method=\"POST\">
                                <fieldset>
                                    <legend>Log in</legend>
                                    <div class=\"col-auto\">
                                        <label for=\"email\" class=\"control-label\">Email:</label>
                                        <input type=\"text\" id=\"user_username\" class=\"form-control\" name=\"email\" autofocus/>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"user_password\" class=\"control-label\">Password:</label>
                                        <input type=\"password\" id=\"user_password\" class=\"input-group-sm form-control\" name=\"password\"/>
                                    </div>
                                    <div class=\"text-center pad-top-20\">
                                        <p>Have you forgotten your <a href=\"/passreset/request\" class=\"link\"><strong>password</strong></a>?</p>
                                    </div>
                                    <div class=\"pad-top-20 pad-btm-20\">
                                        <input type=\"submit\" class=\"btn btn-form btn-block btn-lg\" value=\"Continue\">
                                    </div>
                                    <div class=\"text-center\">
                                        <p>Do you wish to register<br> for <a href=\"/register\" class=\"link user-actions\"><strong>a new account</strong></a>?</p>
                                    </div>
                                </fieldset>
                            </form>
                        
            </div>
            
            <div class=\"col-sm-2\"></div>
  </div>
 
</div>
<section id=\"padding\" class=\"section-sm-padding\">
    </section>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  46 => 10,  36 => 5,  30 => 4,  11 => 1,);
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


{% block title %}Login{% endblock %}
{% block css %} 
    <!-- <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
     <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
{% endblock %}
{% block content %}
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
             <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-8\">
               
                            <form id=\"login_form\" class=\"form-group\" action=\"\" method=\"POST\">
                                <fieldset>
                                    <legend>Log in</legend>
                                    <div class=\"col-auto\">
                                        <label for=\"email\" class=\"control-label\">Email:</label>
                                        <input type=\"text\" id=\"user_username\" class=\"form-control\" name=\"email\" autofocus/>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"user_password\" class=\"control-label\">Password:</label>
                                        <input type=\"password\" id=\"user_password\" class=\"input-group-sm form-control\" name=\"password\"/>
                                    </div>
                                    <div class=\"text-center pad-top-20\">
                                        <p>Have you forgotten your <a href=\"/passreset/request\" class=\"link\"><strong>password</strong></a>?</p>
                                    </div>
                                    <div class=\"pad-top-20 pad-btm-20\">
                                        <input type=\"submit\" class=\"btn btn-form btn-block btn-lg\" value=\"Continue\">
                                    </div>
                                    <div class=\"text-center\">
                                        <p>Do you wish to register<br> for <a href=\"/register\" class=\"link user-actions\"><strong>a new account</strong></a>?</p>
                                    </div>
                                </fieldset>
                            </form>
                        
            </div>
            
            <div class=\"col-sm-2\"></div>
  </div>
 
</div>
<section id=\"padding\" class=\"section-sm-padding\">
    </section>

{% endblock %}", "login.html.twig", "/home/cp4809/clinic.ipd10.com/templates/login.html.twig");
    }
}
