<?php

/* index.html.twig */
class __TwigTemplate_f35d03f948a1adc15b20fd4d71e9ecbf9ccb9d811692dd751f6caf185ced0c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
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
        echo "Clinic Medical";
    }

    // line 5
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 6
        echo "    <!--<script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

";
    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
\t<style>
\t.hourTable{\tmargin: 8px 0px 0px;
\tborder:1px;
\t}
\t</style>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
    <section id=\"banner\" class=\"banner\">
        <div class=\"bg-color\">
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"banner-info\">
                        
                        <div class=\"banner-text text-center\">
                            <h1 class=\"white\">Find Your doctor In less than five minutes!!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href=\"/bookappointment\" class=\"btn btn-appoint\"><h3>Make an Appointment.</h3></a>
                        </div>
                        <div class=\"overlay-detail text-center\">
                            <a href=\"#service\"><i class=\"fa fa-angle-down\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ banner-->
    <!--service-->
    <section id=\"service\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4\">
                    <h2 class=\"ser-title\">Our Service</h2>
                    <hr class=\"botm-line\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"service-info\">
                        <div class=\"icon\">
                            <i class=\"fa fa-stethoscope\"></i>
                        </div>
                        <div class=\"icon-info\">
                            <h4>24 Hour Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class=\"service-info\">
                        <div class=\"icon\">
                            <i class=\"fa fa-ambulance\"></i>
                        </div>
                        <div class=\"icon-info\">
                            <h4>Emergency Services</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"service-info\">
                        <div class=\"icon\">
                            <i class=\"fa fa-user-md\"></i>
                        </div>
                        <div class=\"icon-info\">
                            <h4>Medical Counseling</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class=\"service-info\">
                        <div class=\"icon\">
                            <i class=\"fa fa-medkit\"></i>
                        </div>
                        <div class=\"icon-info\">
                            <h4>Premium Healthcare</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ service-->
    <!--cta-->
    <section id=\"cta-1\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"schedule-tab\">
                    <div class=\"col-md-4 col-sm-4 bor-left\">
                        <div class=\"mt-boxy-color\"></div>
                        <div class=\"medi-info\">
                            <h3>Emergency Case</h3>
                            <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"#\" class=\"medi-info-btn\">READ MORE</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <div class=\"medi-info\">
                            <h3>Emergency Case</h3>
                            <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"#\" class=\"medi-info-btn\">READ MORE</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4 mt-boxy-3\">
                        <div class=\"mt-boxy-color\"></div>
                        <div class=\"time-info\">
                            <h3>Opening Hours</h3>
                            <table class=\"hourTable\">
                                <tbody>
                                    <tr>
                                        <td>Monday - Friday</td>
                                        <td>8.00 - 17.00</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>9.30 - 17.30</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>9.30 - 15.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--about-->
    <section id=\"about\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-4 col-xs-12\">
                    <div class=\"section-title\">
                        <h2 class=\"head-title lg-line\">The Medilap <br>Ultimate Dream</h2>
                        <hr class=\"botm-line\">
                        <p class=\"sec-para\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                        <a href=\"\" style=\"color: #0cb8b6; padding-top:10px;\">Know more..</a>
                    </div>
                </div>
                <div class=\"col-md-9 col-sm-8 col-xs-12\">
                    <div style=\"visibility: visible;\" class=\"col-sm-9 more-features-box\">
                        <div class=\"more-features-box-text\">
                            <div class=\"more-features-box-text-icon\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </div>
                            <div class=\"more-features-box-text-description\">
                                <h3>It's something important you want to know.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                        <div class=\"more-features-box-text\">
                            <div class=\"more-features-box-text-icon\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </div>
                            <div class=\"more-features-box-text-description\">
                                <h3>It's something important you want to know.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ about-->
    <!--doctor team-->
    <section id=\"doctor-team\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"ser-title\">Meet Our Doctors!</h2>
                    <hr class=\"botm-line\">
                </div>
                ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dr_List"]) ? $context["dr_List"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dr"]) {
            // line 188
            echo "                    <div class=\"col-md-3 col-sm-3 col-xs-6\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "pathImage", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo "\" class=\"team-img\">
                            <div class=\"caption\">
                                <a href=\"/doctors/";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "firstName", array()), "html", null, true);
            echo "</h3></a>
                                <p>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["dr"], "title", array()), "html", null, true);
            echo "</p>
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "
            </div>
        </div>
    </section>
    <!--/ doctor team-->
    <!--testimonial-->
    <section id=\"testimonial\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"ser-title\">see what patients are saying?</h2>
                    <hr class=\"botm-line\">
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"testi-details\">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class=\"testi-info\">
                        <!-- User Image -->
                        <a href=\"#\"><img src=\"assets/img/thumb.png\" alt=\"\" class=\"img-responsive\"></a>
                        <!-- User Name -->
                        <h3>Alex<span>Texas</span></h3>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"testi-details\">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class=\"testi-info\">
                        <!-- User Image -->
                        <a href=\"#\"><img src=\"assets/img/thumb.png\" alt=\"\" class=\"img-responsive\"></a>
                        <!-- User Name -->
                        <h3>Alex<span>Texas</span></h3>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"testi-details\">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class=\"testi-info\">
                        <!-- User Image -->
                        <a href=\"#\"><img src=\"assets/img/thumb.png\" alt=\"\" class=\"img-responsive\"></a>
                        <!-- User Name -->
                        <h3>Alex<span>Texas</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ testimonial-->
    <!--cta 2-->
    <section id=\"cta-2\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\" row\">
                <div class=\"col-md-2\"></div>
                <div class=\"text-right-md col-md-4 col-sm-4\">
                    <h2 class=\"section-title white lg-line\">« A few words<br> about us »</h2>
                </div>
                <div class=\"col-md-4 col-sm-5\">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typek
                    <p class=\"text-right text-primary\"><i>— Medilap Healthcare</i></p>
                </div>
                <div class=\"col-md-2\"></div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--contact-->
    <section id=\"contact\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"ser-title\">Contact us</h2>
                    <hr class=\"botm-line\">
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <h3>Contact Info</h3>
                    <div class=\"space\"></div>
                    <p><i class=\"fa fa-map-marker fa-fw pull-left fa-2x\"></i>1234 Awesome Street<br> Montreal, QC </p>
                    <div class=\"space\"></div>
                    <p><i class=\"fa fa-envelope-o fa-fw pull-left fa-2x\"></i>info@clinicmedical.com</p>
                    <div class=\"space\"></div>
                    <p><i class=\"fa fa-phone fa-fw pull-left fa-2x\"></i>+1 514 123 1234</p>
                </div>
                <div class=\"col-md-8 col-sm-8 marb20\">
                    <div class=\"contact-info\">
                        <h3 class=\"cnt-ttl\">Having Any Query! Or Book an appointment</h3>
                        <div class=\"space\"></div>
                        <div id=\"sendmessage\">Your message has been sent. Thank you!</div>
                        <div id=\"errormessage\"></div>
                        <form action=\"/\" method=\"post\" class=\"contactForm\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control br-radius-zero\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control br-radius-zero\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control br-radius-zero\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control br-radius-zero\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                                <div class=\"validation\"></div>
                            </div>

                            <div class=\"form-action\">
                                <button type=\"submit\" class=\"btn btn-form\">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ contact-->

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 203,  260 => 193,  248 => 192,  239 => 190,  235 => 188,  231 => 187,  65 => 23,  62 => 22,  48 => 11,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
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

{% block title %}Clinic Medical{% endblock %}

{% block matchpwd %}
    <!--<script src=\"https://s.codepen.io/assets/libs/modernizr.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

{% endblock %}
{% block css %} 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
\t<style>
\t.hourTable{\tmargin: 8px 0px 0px;
\tborder:1px;
\t}
\t</style>
{% endblock %}


{% block content %}

    <section id=\"banner\" class=\"banner\">
        <div class=\"bg-color\">
            
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"banner-info\">
                        
                        <div class=\"banner-text text-center\">
                            <h1 class=\"white\">Find Your doctor In less than five minutes!!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href=\"/bookappointment\" class=\"btn btn-appoint\"><h3>Make an Appointment.</h3></a>
                        </div>
                        <div class=\"overlay-detail text-center\">
                            <a href=\"#service\"><i class=\"fa fa-angle-down\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ banner-->
    <!--service-->
    <section id=\"service\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4\">
                    <h2 class=\"ser-title\">Our Service</h2>
                    <hr class=\"botm-line\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"service-info\">
                        <div class=\"icon\">
                            <i class=\"fa fa-stethoscope\"></i>
                        </div>
                        <div class=\"icon-info\">
                            <h4>24 Hour Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class=\"service-info\">
                        <div class=\"icon\">
                            <i class=\"fa fa-ambulance\"></i>
                        </div>
                        <div class=\"icon-info\">
                            <h4>Emergency Services</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"service-info\">
                        <div class=\"icon\">
                            <i class=\"fa fa-user-md\"></i>
                        </div>
                        <div class=\"icon-info\">
                            <h4>Medical Counseling</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class=\"service-info\">
                        <div class=\"icon\">
                            <i class=\"fa fa-medkit\"></i>
                        </div>
                        <div class=\"icon-info\">
                            <h4>Premium Healthcare</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ service-->
    <!--cta-->
    <section id=\"cta-1\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"schedule-tab\">
                    <div class=\"col-md-4 col-sm-4 bor-left\">
                        <div class=\"mt-boxy-color\"></div>
                        <div class=\"medi-info\">
                            <h3>Emergency Case</h3>
                            <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"#\" class=\"medi-info-btn\">READ MORE</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4\">
                        <div class=\"medi-info\">
                            <h3>Emergency Case</h3>
                            <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href=\"#\" class=\"medi-info-btn\">READ MORE</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-4 mt-boxy-3\">
                        <div class=\"mt-boxy-color\"></div>
                        <div class=\"time-info\">
                            <h3>Opening Hours</h3>
                            <table class=\"hourTable\">
                                <tbody>
                                    <tr>
                                        <td>Monday - Friday</td>
                                        <td>8.00 - 17.00</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>9.30 - 17.30</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>9.30 - 15.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--about-->
    <section id=\"about\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-4 col-xs-12\">
                    <div class=\"section-title\">
                        <h2 class=\"head-title lg-line\">The Medilap <br>Ultimate Dream</h2>
                        <hr class=\"botm-line\">
                        <p class=\"sec-para\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                        <a href=\"\" style=\"color: #0cb8b6; padding-top:10px;\">Know more..</a>
                    </div>
                </div>
                <div class=\"col-md-9 col-sm-8 col-xs-12\">
                    <div style=\"visibility: visible;\" class=\"col-sm-9 more-features-box\">
                        <div class=\"more-features-box-text\">
                            <div class=\"more-features-box-text-icon\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </div>
                            <div class=\"more-features-box-text-description\">
                                <h3>It's something important you want to know.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                        <div class=\"more-features-box-text\">
                            <div class=\"more-features-box-text-icon\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </div>
                            <div class=\"more-features-box-text-description\">
                                <h3>It's something important you want to know.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ about-->
    <!--doctor team-->
    <section id=\"doctor-team\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"ser-title\">Meet Our Doctors!</h2>
                    <hr class=\"botm-line\">
                </div>
                {% for dr in dr_List%}
                    <div class=\"col-md-3 col-sm-3 col-xs-6\">
                        <div class=\"thumbnail\">
                            <img src=\"{{dr.pathImage}}\" alt=\"{{dr.firstName}}-{{dr.firstName}}\" class=\"team-img\">
                            <div class=\"caption\">
                                <a href=\"/doctors/{{dr.id}}/{{dr.firstName}}-{{dr.firstName}}\"><h3>{{dr.firstName}} {{dr.firstName}}</h3></a>
                                <p>{{dr.title }}</p>
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                {% endfor %}

            </div>
        </div>
    </section>
    <!--/ doctor team-->
    <!--testimonial-->
    <section id=\"testimonial\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"ser-title\">see what patients are saying?</h2>
                    <hr class=\"botm-line\">
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"testi-details\">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class=\"testi-info\">
                        <!-- User Image -->
                        <a href=\"#\"><img src=\"assets/img/thumb.png\" alt=\"\" class=\"img-responsive\"></a>
                        <!-- User Name -->
                        <h3>Alex<span>Texas</span></h3>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"testi-details\">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class=\"testi-info\">
                        <!-- User Image -->
                        <a href=\"#\"><img src=\"assets/img/thumb.png\" alt=\"\" class=\"img-responsive\"></a>
                        <!-- User Name -->
                        <h3>Alex<span>Texas</span></h3>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"testi-details\">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class=\"testi-info\">
                        <!-- User Image -->
                        <a href=\"#\"><img src=\"assets/img/thumb.png\" alt=\"\" class=\"img-responsive\"></a>
                        <!-- User Name -->
                        <h3>Alex<span>Texas</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ testimonial-->
    <!--cta 2-->
    <section id=\"cta-2\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\" row\">
                <div class=\"col-md-2\"></div>
                <div class=\"text-right-md col-md-4 col-sm-4\">
                    <h2 class=\"section-title white lg-line\">« A few words<br> about us »</h2>
                </div>
                <div class=\"col-md-4 col-sm-5\">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typek
                    <p class=\"text-right text-primary\"><i>— Medilap Healthcare</i></p>
                </div>
                <div class=\"col-md-2\"></div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--contact-->
    <section id=\"contact\" class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"ser-title\">Contact us</h2>
                    <hr class=\"botm-line\">
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <h3>Contact Info</h3>
                    <div class=\"space\"></div>
                    <p><i class=\"fa fa-map-marker fa-fw pull-left fa-2x\"></i>1234 Awesome Street<br> Montreal, QC </p>
                    <div class=\"space\"></div>
                    <p><i class=\"fa fa-envelope-o fa-fw pull-left fa-2x\"></i>info@clinicmedical.com</p>
                    <div class=\"space\"></div>
                    <p><i class=\"fa fa-phone fa-fw pull-left fa-2x\"></i>+1 514 123 1234</p>
                </div>
                <div class=\"col-md-8 col-sm-8 marb20\">
                    <div class=\"contact-info\">
                        <h3 class=\"cnt-ttl\">Having Any Query! Or Book an appointment</h3>
                        <div class=\"space\"></div>
                        <div id=\"sendmessage\">Your message has been sent. Thank you!</div>
                        <div id=\"errormessage\"></div>
                        <form action=\"/\" method=\"post\" class=\"contactForm\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control br-radius-zero\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control br-radius-zero\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control br-radius-zero\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control br-radius-zero\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                                <div class=\"validation\"></div>
                            </div>

                            <div class=\"form-action\">
                                <button type=\"submit\" class=\"btn btn-form\">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ contact-->

{% endblock %}", "index.html.twig", "/home/cp4809/clinic.ipd10.com/templates/index.html.twig");
    }
}
