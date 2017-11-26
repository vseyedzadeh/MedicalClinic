<?php

/* master.html.twig */
class __TwigTemplate_7af445ea07190ebdd92d13a51a8cd1e8d8f85733bb487e57c2e54ee5b6a1e75b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'matchpwd' => array($this, 'block_matchpwd'),
            'css' => array($this, 'block_css'),
            'calendar' => array($this, 'block_calendar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Clinic Medical\">
        <meta name=\"keywords\" content=\"Clinic Medical, book Appointment\">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109886502-1\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-109886502-1');
        </script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"/assets/js/jquery.easing.min.js\"></script>
        <script src=\"/assets/js/custom.js\"></script>
        <!--<script src=\"contactform/contactform.js\"></script>-->
        <script src=\"/assets/js/script.js\"></script>
    ";
        // line 30
        $this->displayBlock('matchpwd', $context, $blocks);
        // line 31
        echo "
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <style>
        .hidden{
            visibility: hidden;
        }
    </style>
    <!--<link rel=\"stylesheet\" href=\"/assets/css/styles.css\">-->
";
        // line 40
        $this->displayBlock('css', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('calendar', $context, $blocks);
        // line 43
        echo "
<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal\">-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/font-awesome.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/style.css\">

</head>

<body id=\"myPage\" data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"60\">

    <section id=\"nav1\" class=\"banner\">
        <h6 class=\"hidden\">----</h6>
        <div style=\"min-height: 80px; background: #163a47;\">
            <nav class=\"navbar navbar-default \">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"collapse navbar-collapse navbar-right\" id=\"myNavbar\">
                            <ul class=\"nav navbar-nav\">
                            ";
        // line 67
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 68
            echo "                            
                                <li class=\"active\"><a href=\"#banner\">Home</a></li>
                                <li class=\"\"><a href=\"#service\">Services</a></li>
                                <li class=\"\"><a href=\"#about\">About</a></li>
                                <li class=\"\"><a href=\"#testimonial\">Testimonial</a></li>
                                <li class=\"\"><a href=\"#contact\">Contact</a></li>
                                    
                                    <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" style=\"padding-top: 5px;\"><img src=\"/assets/img/user-icon.png\" width=\"35\"> </a>
                                        <ul class=\"dropdown-menu\">
                                            <li class=\"active\"><a href=\"#\"><b>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "lastName", array()), "html", null, true);
            echo "</b></a></li>
                                            <li class=\"\"><a href=\"/patient/myaccount\">My account</a></li>    
                                            <li class=\"\"><a href=\"/logout\">LogOut</a></li> 

                                        </ul>
                                    </li>
                                ";
        } elseif (        // line 83
(isset($context["staffSession"]) ? $context["staffSession"] : null)) {
            // line 84
            echo "                                   
                                    <li class=\"\"><a href=\"/logout\">Welcome ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staffSession"]) ? $context["staffSession"] : null), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staffSession"]) ? $context["staffSession"] : null), "lastName", array()), "html", null, true);
            echo "</a></li> 
                                    <li class=\"\"><a href=\"/myschedule\">My schedule</a></li> 
                                    <li class=\"\"><a href=\"/logout\">LogOut</a></li> 

                                ";
        } else {
            // line 90
            echo "                                    <li class=\"active\"><a href=\"#banner\">Home</a></li>
                                <li class=\"\"><a href=\"#service\">Services</a></li>
                                <li class=\"\"><a href=\"#about\">About</a></li>
                                <li class=\"\"><a href=\"#testimonial\">Testimonial</a></li>
                                <li class=\"\"><a href=\"#contact\">Contact</a></li>
                                    <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Log In </a>
                                        <ul class=\"dropdown-menu\">
                                            <li class=\"\"><a href=\"/login\">Patients LogIn</a></li>
                                            <li class=\"\"><a href=\"signin\">Doctors / Staffs LogIn</a></li>                                          

                                        </ul>
                                    </li>
                                ";
        }
        // line 102
        echo "                                
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </section>


";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 114
        echo "

<!--footer-->
<footer id=\"footer\">
    <div class=\"top-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">About Us</h4>
                    </div>
                    <div class=\"info-sec\">
                        <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
                        <div>
                            <a href=\"http://validator.w3.org/check?uri=referer\" 
                               style=\"background-color: transparent\">
                                <img style=\"border-style:none\" width=\"88\" height=\"31\" 
                                     src=\"http://www.w3.org/Icons/valid-xhtml10\" alt=\"Valid XHTML 1.0 Strict\" /></a>
                            &nbsp;&nbsp;
                            <a href=\"http://jigsaw.w3.org/css-validator/check/referer\" 
                               style=\"background-color: transparent\">
                                <img style=\"border-style:none\" width=\"88\" height=\"31\" 
                                     src=\"http://jigsaw.w3.org/css-validator/images/vcss\" alt=\"Valid CSS!\" /></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">Quick Links</h4>
                    </div>
                    <div class=\"info-sec\">
                        <ul class=\"quick-info\">
                            <li><a href=\"index.html\"><i class=\"fa fa-circle\"></i>Home</a></li>
                            <li><a href=\"#service\"><i class=\"fa fa-circle\"></i>Service</a></li>
                            <li><a href=\"#contact\"><i class=\"fa fa-circle\"></i>Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">Follow us</h4>
                    </div>
                    <div class=\"info-sec\">
                        <ul class=\"social-icon\">
                            <li class=\"bglight-blue\"><i class=\"fa fa-facebook\"></i></li>
                            <li class=\"bgred\"><i class=\"fa fa-google-plus\"></i></li>
                            <li class=\"bgdark-blue\"><i class=\"fa fa-linkedin\"></i></li>
                            <li class=\"bglight-blue\"><i class=\"fa fa-twitter\"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    © Copyright Clinic Medical. All Rights Reserved

                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer-->



</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Clinical Medical";
    }

    // line 30
    public function block_matchpwd($context, array $blocks = array())
    {
    }

    // line 40
    public function block_css($context, array $blocks = array())
    {
    }

    // line 42
    public function block_calendar($context, array $blocks = array())
    {
    }

    // line 113
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 113,  265 => 42,  260 => 40,  255 => 30,  249 => 7,  173 => 114,  171 => 113,  158 => 102,  143 => 90,  133 => 85,  130 => 84,  128 => 83,  117 => 77,  106 => 68,  104 => 67,  78 => 43,  76 => 42,  73 => 41,  71 => 40,  60 => 31,  58 => 30,  32 => 7,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zxx\">

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Clinical Medical{% endblock %}</title>
        <meta name=\"description\" content=\"Clinic Medical\">
        <meta name=\"keywords\" content=\"Clinic Medical, book Appointment\">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109886502-1\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-109886502-1');
        </script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"/assets/js/jquery.easing.min.js\"></script>
        <script src=\"/assets/js/custom.js\"></script>
        <!--<script src=\"contactform/contactform.js\"></script>-->
        <script src=\"/assets/js/script.js\"></script>
    {% block matchpwd %}{% endblock %}

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <style>
        .hidden{
            visibility: hidden;
        }
    </style>
    <!--<link rel=\"stylesheet\" href=\"/assets/css/styles.css\">-->
{% block css %}{% endblock %}

{% block calendar %}{% endblock %}

<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal\">-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/font-awesome.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/style.css\">

</head>

<body id=\"myPage\" data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"60\">

    <section id=\"nav1\" class=\"banner\">
        <h6 class=\"hidden\">----</h6>
        <div style=\"min-height: 80px; background: #163a47;\">
            <nav class=\"navbar navbar-default \">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"collapse navbar-collapse navbar-right\" id=\"myNavbar\">
                            <ul class=\"nav navbar-nav\">
                            {% if userSession %}
                            
                                <li class=\"active\"><a href=\"#banner\">Home</a></li>
                                <li class=\"\"><a href=\"#service\">Services</a></li>
                                <li class=\"\"><a href=\"#about\">About</a></li>
                                <li class=\"\"><a href=\"#testimonial\">Testimonial</a></li>
                                <li class=\"\"><a href=\"#contact\">Contact</a></li>
                                    
                                    <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" style=\"padding-top: 5px;\"><img src=\"/assets/img/user-icon.png\" width=\"35\"> </a>
                                        <ul class=\"dropdown-menu\">
                                            <li class=\"active\"><a href=\"#\"><b>{{ userSession.firstName }} {{userSession.lastName }}</b></a></li>
                                            <li class=\"\"><a href=\"/patient/myaccount\">My account</a></li>    
                                            <li class=\"\"><a href=\"/logout\">LogOut</a></li> 

                                        </ul>
                                    </li>
                                {% elseif staffSession %}
                                   
                                    <li class=\"\"><a href=\"/logout\">Welcome {{ staffSession.firstName }} {{staffSession.lastName }}</a></li> 
                                    <li class=\"\"><a href=\"/myschedule\">My schedule</a></li> 
                                    <li class=\"\"><a href=\"/logout\">LogOut</a></li> 

                                {%else%}
                                    <li class=\"active\"><a href=\"#banner\">Home</a></li>
                                <li class=\"\"><a href=\"#service\">Services</a></li>
                                <li class=\"\"><a href=\"#about\">About</a></li>
                                <li class=\"\"><a href=\"#testimonial\">Testimonial</a></li>
                                <li class=\"\"><a href=\"#contact\">Contact</a></li>
                                    <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Log In </a>
                                        <ul class=\"dropdown-menu\">
                                            <li class=\"\"><a href=\"/login\">Patients LogIn</a></li>
                                            <li class=\"\"><a href=\"signin\">Doctors / Staffs LogIn</a></li>                                          

                                        </ul>
                                    </li>
                                {%endif%}                                
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </section>


{% block content %}{% endblock %}


<!--footer-->
<footer id=\"footer\">
    <div class=\"top-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">About Us</h4>
                    </div>
                    <div class=\"info-sec\">
                        <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
                        <div>
                            <a href=\"http://validator.w3.org/check?uri=referer\" 
                               style=\"background-color: transparent\">
                                <img style=\"border-style:none\" width=\"88\" height=\"31\" 
                                     src=\"http://www.w3.org/Icons/valid-xhtml10\" alt=\"Valid XHTML 1.0 Strict\" /></a>
                            &nbsp;&nbsp;
                            <a href=\"http://jigsaw.w3.org/css-validator/check/referer\" 
                               style=\"background-color: transparent\">
                                <img style=\"border-style:none\" width=\"88\" height=\"31\" 
                                     src=\"http://jigsaw.w3.org/css-validator/images/vcss\" alt=\"Valid CSS!\" /></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">Quick Links</h4>
                    </div>
                    <div class=\"info-sec\">
                        <ul class=\"quick-info\">
                            <li><a href=\"index.html\"><i class=\"fa fa-circle\"></i>Home</a></li>
                            <li><a href=\"#service\"><i class=\"fa fa-circle\"></i>Service</a></li>
                            <li><a href=\"#contact\"><i class=\"fa fa-circle\"></i>Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4 marb20\">
                    <div class=\"ftr-tle\">
                        <h4 class=\"white no-padding\">Follow us</h4>
                    </div>
                    <div class=\"info-sec\">
                        <ul class=\"social-icon\">
                            <li class=\"bglight-blue\"><i class=\"fa fa-facebook\"></i></li>
                            <li class=\"bgred\"><i class=\"fa fa-google-plus\"></i></li>
                            <li class=\"bgdark-blue\"><i class=\"fa fa-linkedin\"></i></li>
                            <li class=\"bglight-blue\"><i class=\"fa fa-twitter\"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    © Copyright Clinic Medical. All Rights Reserved

                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer-->



</body>

</html>
", "master.html.twig", "/home/cp4809/clinic.ipd10.com/templates/master.html.twig");
    }
}
