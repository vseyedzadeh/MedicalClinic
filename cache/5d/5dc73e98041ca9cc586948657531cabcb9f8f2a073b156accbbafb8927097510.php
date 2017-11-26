<?php

/* admin/signin.html.twig */
class __TwigTemplate_0f14e90cc762b1f5f03831a69a60040995d4dc7f02d35511a6d886e8f04a3372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "admin/signin.html.twig", 1);
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
        echo "Sign In";
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>

";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-8\">
      <form id=\"login_form\" class=\"dialog-form\" action=\"\" method=\"POST\">
        <fieldset>
          <legend>Log in</legend>
          <div class=\"form-group\">
            <label for=\"email\" class=\"control-label\">Email:</label>
            <input type=\"text\" id=\"user_username\" class=\"form-control\" name=\"email\" autofocus/>
          </div>
          <div class=\"form-group\">
            <label for=\"user_password\" class=\"control-label\">Password:</label>
            <input type=\"password\" id=\"user_password\" class=\"form-control\" name=\"password\"/>
          </div>
          <div class=\"text-center pad-top-20\">
            <p>Have you forgotten your <a href=\"/passreset/request\" class=\"link\"><strong>password</strong></a>?</p>
          </div>
          <div class=\"pad-top-20 pad-btm-20\">
            <input type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" value=\"Continue\">
          </div>
          <div class=\"text-center\">
                                        <p>Do you wish to register<br> for <a href=\"/signup\" class=\"link user-actions\"><strong>a new account</strong></a>?</p>
                                    </div>
          <div class=\"text-center\">
            
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
        return "admin/signin.html.twig";
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


{% block title %}Sign In{% endblock %}
{% block css %} 
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
    <link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>

{% endblock %}
{% block content %}
<section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-8\">
      <form id=\"login_form\" class=\"dialog-form\" action=\"\" method=\"POST\">
        <fieldset>
          <legend>Log in</legend>
          <div class=\"form-group\">
            <label for=\"email\" class=\"control-label\">Email:</label>
            <input type=\"text\" id=\"user_username\" class=\"form-control\" name=\"email\" autofocus/>
          </div>
          <div class=\"form-group\">
            <label for=\"user_password\" class=\"control-label\">Password:</label>
            <input type=\"password\" id=\"user_password\" class=\"form-control\" name=\"password\"/>
          </div>
          <div class=\"text-center pad-top-20\">
            <p>Have you forgotten your <a href=\"/passreset/request\" class=\"link\"><strong>password</strong></a>?</p>
          </div>
          <div class=\"pad-top-20 pad-btm-20\">
            <input type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" value=\"Continue\">
          </div>
          <div class=\"text-center\">
                                        <p>Do you wish to register<br> for <a href=\"/signup\" class=\"link user-actions\"><strong>a new account</strong></a>?</p>
                                    </div>
          <div class=\"text-center\">
            
          </div>
        </fieldset>
      </form>
    </div>
            
            <div class=\"col-sm-2\"></div>
  </div>
 
</div>
<section id=\"padding\" class=\"section-sm-padding\">
    </section>

{% endblock %}
", "admin/signin.html.twig", "/home/cp4809/clinic.ipd10.com/templates/admin/signin.html.twig");
    }
}
