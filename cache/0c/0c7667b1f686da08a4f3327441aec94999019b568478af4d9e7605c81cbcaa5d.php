<?php

/* patient/mybooking.html.twig */
class __TwigTemplate_63206c2f32f116b5fd2927b22289b2354fd02c85bb528001b1c08d557274299f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "patient/mybooking.html.twig", 1);
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
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                var \$modal = \$('#confirmModalDelete');
                \$(\"#appList .btn-cancel\").click(function (e) {
                    e.preventDefault();
                    var appId = \$(this).attr('data-appid');
                    var drName = \$(this).attr('dr-name');
                    var appDate = \$(this).attr('app-date');
                    var appTime = \$(this).attr('app-time');
                    
                    \$modal.find('input[name=appid]').val(appId);
                    \$modal.find('.modal-body h4').text('DR.' + drName + ' on ' + appDate + ' at ' + appTime );
                    
                    \$(\"#confirmModalDelete\").modal({show: true});
                });

            var showAlert = function (success) {
                if (success) {
                    \$('#alertSuccess').removeClass('hidden');
                    \$('#alertError').addClass('hidden');
                } else {
                    \$('#alertSuccess').addClass('hidden');
                    \$('#alertError').removeClass('hidden');
                }
                
                setTimeout(hideAlert, 5000);
            };
            
            var hideAlert = function () {
                \$('#alertSuccess').addClass('hidden');
                \$('#alertError').addClass('hidden');                
            }

            \$modal.find(\"form\").submit(function (e) {
                var \$modal = \$('#confirmModalDelete');
                e.preventDefault();
                var appId = \$('#appid').val();
                var \$form = \$(this);
                //var action = \$form.attr('action');
                \$.ajax({
                    url: '/' + appId + '/deleteappointment' ,
                    method: 'POST',
                    data: \$form.serializeArray(),
                    success: function (data) {
                        var d = JSON.parse(data);
                        if(d.success){
                            showAlert(true);
                        }else{
                            showAlert(false);
                        }
                        \$modal.modal('hide');
                        
                        \$('#appList table tr[data-appid=' + appId + ']').remove();
                    },
                    error: function () {
                        showAlert(false);
                    }
                });
            });
});
        </script>
    ";
    }

    // line 69
    public function block_css($context, array $blocks = array())
    {
        echo " 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
    ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        // line 75
        echo "       
         <section id=\"padding\" class=\"section-sm-padding\">
        </section>
        <div class=\"container\">
            <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">      

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"nav nav-pills nav-justified\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"/patient/myaccount\">My Account</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/bookappointment\">Make Booking</a>
                        </li>
                        <li class=\"nav-item active\">
                            <a class=\"nav-link active\" href=\"/patient/mybooking\">My Bookings</a>
                        </li>

                    </ul>
                </div>
            </nav>

        <div class=\"col-xs-12\">
             <div id=\"alertSuccess\" class=\"alert alert-success hidden\">
            <strong>Success!</strong> Your appointment is successfully canceled.
        </div>
        <div id=\"alertError\" class=\"alert alert-danger hidden\">
            <strong>Error!</strong> There was a problem canceling appointment.
        </div>
            
        </div>
            <section id=\"padding\" class=\"section-sm-padding\">
        </section>
        <div class=\"col-xs-12\">
            <div id=\"appList\" class=\"mha-common-header\"> 
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"table table-bordered table-hover table-responsive\">
                    <tr><th>Dr.Name</th><th>Date</th><th>Time</th><th>Action</th></tr>
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myapp"]) ? $context["myapp"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 113
            echo "                        <tr data-appid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "\">
                            <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "date", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "startTime", array()), "html", null, true);
            echo "</td>
                            <td>
                                <button  type=\"button\" class=\"btn-cancel btn btn-primary\" data-appid=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "id", array()), "html", null, true);
            echo "\" dr-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "lastName", array()), "html", null, true);
            echo "\" app-date=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "date", array()), "html", null, true);
            echo "\" app-time=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "startTime", array()), "html", null, true);
            echo "\">Cancel</button>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                </table>
            </div>
        </div>
        <div id=\"confirmModalDelete\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <div class=\"content1\">
                    <form method=\"post\">
                        <input type=\"hidden\" id=\"appid\" name=\"appid\" value=\"\" />
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Cancel Appointment</h4>
                            </div>
                            <div class=\"modal-body\">
                                <p>Your Appointment is with :</p>
                                <h4></h4>
                                <p>Are you sure to cancel it?</p>

                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                <button type=\"submit\" class=\"btn btn-primary\" >Confirm & Cancel</button>

                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
        </div>
                 <section id=\"padding\" class=\"section-sm-padding\">
        </section>
    ";
    }

    public function getTemplateName()
    {
        return "patient/mybooking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 122,  181 => 118,  176 => 116,  172 => 115,  166 => 114,  161 => 113,  157 => 112,  118 => 75,  115 => 74,  107 => 69,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                var \$modal = \$('#confirmModalDelete');
                \$(\"#appList .btn-cancel\").click(function (e) {
                    e.preventDefault();
                    var appId = \$(this).attr('data-appid');
                    var drName = \$(this).attr('dr-name');
                    var appDate = \$(this).attr('app-date');
                    var appTime = \$(this).attr('app-time');
                    
                    \$modal.find('input[name=appid]').val(appId);
                    \$modal.find('.modal-body h4').text('DR.' + drName + ' on ' + appDate + ' at ' + appTime );
                    
                    \$(\"#confirmModalDelete\").modal({show: true});
                });

            var showAlert = function (success) {
                if (success) {
                    \$('#alertSuccess').removeClass('hidden');
                    \$('#alertError').addClass('hidden');
                } else {
                    \$('#alertSuccess').addClass('hidden');
                    \$('#alertError').removeClass('hidden');
                }
                
                setTimeout(hideAlert, 5000);
            };
            
            var hideAlert = function () {
                \$('#alertSuccess').addClass('hidden');
                \$('#alertError').addClass('hidden');                
            }

            \$modal.find(\"form\").submit(function (e) {
                var \$modal = \$('#confirmModalDelete');
                e.preventDefault();
                var appId = \$('#appid').val();
                var \$form = \$(this);
                //var action = \$form.attr('action');
                \$.ajax({
                    url: '/' + appId + '/deleteappointment' ,
                    method: 'POST',
                    data: \$form.serializeArray(),
                    success: function (data) {
                        var d = JSON.parse(data);
                        if(d.success){
                            showAlert(true);
                        }else{
                            showAlert(false);
                        }
                        \$modal.modal('hide');
                        
                        \$('#appList table tr[data-appid=' + appId + ']').remove();
                    },
                    error: function () {
                        showAlert(false);
                    }
                });
            });
});
        </script>
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
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"/patient/myaccount\">My Account</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/bookappointment\">Make Booking</a>
                        </li>
                        <li class=\"nav-item active\">
                            <a class=\"nav-link active\" href=\"/patient/mybooking\">My Bookings</a>
                        </li>

                    </ul>
                </div>
            </nav>

        <div class=\"col-xs-12\">
             <div id=\"alertSuccess\" class=\"alert alert-success hidden\">
            <strong>Success!</strong> Your appointment is successfully canceled.
        </div>
        <div id=\"alertError\" class=\"alert alert-danger hidden\">
            <strong>Error!</strong> There was a problem canceling appointment.
        </div>
            
        </div>
            <section id=\"padding\" class=\"section-sm-padding\">
        </section>
        <div class=\"col-xs-12\">
            <div id=\"appList\" class=\"mha-common-header\"> 
                <table cellpadding=\"0\" cellspacing=\"0\" class=\"table table-bordered table-hover table-responsive\">
                    <tr><th>Dr.Name</th><th>Date</th><th>Time</th><th>Action</th></tr>
                            {% for app in myapp %}
                        <tr data-appid=\"{{app.id}}\">
                            <td>{{app.firstName }} {{app.lastName}}</td>
                            <td>{{app.date}}</td>
                            <td>{{app.startTime}}</td>
                            <td>
                                <button  type=\"button\" class=\"btn-cancel btn btn-primary\" data-appid=\"{{app.id}}\" dr-name=\"{{app.firstName }} {{app.lastName}}\" app-date=\"{{app.date}}\" app-time=\"{{app.startTime}}\">Cancel</button>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
        <div id=\"confirmModalDelete\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <div class=\"content1\">
                    <form method=\"post\">
                        <input type=\"hidden\" id=\"appid\" name=\"appid\" value=\"\" />
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Cancel Appointment</h4>
                            </div>
                            <div class=\"modal-body\">
                                <p>Your Appointment is with :</p>
                                <h4></h4>
                                <p>Are you sure to cancel it?</p>

                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                <button type=\"submit\" class=\"btn btn-primary\" >Confirm & Cancel</button>

                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
        </div>
                 <section id=\"padding\" class=\"section-sm-padding\">
        </section>
    {% endblock %}", "patient/mybooking.html.twig", "/home/cp4809/clinic.ipd10.com/templates/patient/mybooking.html.twig");
    }
}
