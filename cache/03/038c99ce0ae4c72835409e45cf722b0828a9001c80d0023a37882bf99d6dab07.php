<?php

/* doctors/drdescription.html.twig */
class __TwigTemplate_dbd25ebbbff7a812cc890668890307ef25e16476fdd1daceb7ca2ffd43bed709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "doctors/drdescription.html.twig", 1);
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

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

";
    }

    // line 12
    public function block_css($context, array $blocks = array())
    {
        echo " 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
    <style>
        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #doctor-page .doctor-row .times {
            margin: 0 20px;
        }

        #doctor-page .doctor-row .times {
            padding-bottom: 16px;
            margin-top: 0;
        }

        li.doctor-row .times {
            position: relative;
            float: right;
            width: 500px;
            z-index: 1;
        }

        #doctor-page .doctor-row .mobile-only {
            display: block!important;
        }

        li.doctor-row .times .dates {
            display: none;
        }

        li.doctor-row .times .dates {
            width: 100%;
            border-bottom: 1px solid #dadada;
            background-color: #fff;
        }

        li.doctor-row .times .dates ul li span {
            display: block;
            text-align: center;
        }

        #doctor-page .doctor-row .time-slots {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            height: auto!important;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-flow: row nowrap;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
        }

        .doctor-row-times .time-slots {
            -webkit-transition: height .4s;
            transition: height .4s;
            width: 100%;
            height: 156px;
            min-height: 156px;
            /*background: url(https://cdn.hotdoc.com.au/bookings/dist/assets/images/bg-timeslots-e9e1806….png);*/
            overflow: hidden;
            position: relative;
        }

        #doctor-page .doctor-row .time-slots ul {
            position: relative;
            left: 0!important;
        }

        .doctor-row-times .time-slots ul {
            position: absolute;
            left: 0;
            top: 0;
            width: 80px;
            min-width: 80px;
            min-height: 40px;
        }

        .doctor-row-times .time-slots ul li button {
            width: 78px;
            padding: 0;
            margin: 1px 1px 2px;
            line-height: 36px;
            border-radius: 3px;
        }



        a.button.inverted,
        button.inverted {
            background: 0 0;
            color: #5D626D;
        }

        li.doctor-row .times .dates nav button.prev {
            left: -20px;
        }

        li.doctor-row .times .dates nav button {
            position: absolute;
            top: 13px;
            padding: 0;
            width: 18px;
            line-height: 34px;
        }

        a.button:focus,
        a.button:hover,
        button:focus,
        button:hover {
            background: #22b66d;
        }

        a.button,
        button {
            font-size: 16px;
            font-family: Lato-Regular, sans-serif;
            line-height: 40px;
            padding: 0 30px;
            color: #fff;
            border: 0;
            background: #1EA160;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        a.button,
        a:hover,
        button,
        footer #links>div ul li a {
            text-decoration: none;
        }

        a.button,
        a[href^=\"tel:\"],
        button {
            display: inline-block;
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button,
        select {
            text-transform: none;
        }

        button {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        .field input,
        a.button,
        button,
        select {
            outline: 0!important;
        }

        .fa {
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            color:#fff;
        }

        .fa,
        .fa-stack {
            display: inline-block;
        }

        .fa-fw,
        .fa-li,
        a.button,
        button {
            text-align: center;
        }

        #doctor-page .doctor-row .times .container {
            min-height: 156px;
        }

        li.doctor-row .times .dates ul li span {
            display: block;
            text-align: center;
        }

        li.doctor-row .times .container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            min-height: 194px;
            background: 0 0;
        }

        li.doctor-row .times .dates ul li:nth-child(even) {
            background: #F7F7F7;
            border-radius: 4px 4px 0 0;
        }

        li.doctor-row .times .dates ul li {
            float: left;
            padding: 10px 0;
            width: 80px;
        }

        li.doctor-row .times .dates ul li span {
            display: block;
            text-align: center;
        }

        li.doctor-row .times .dates nav button.next {
            right: -20px;
        }

        li.doctor-row .times .dates nav button {
            position: absolute;
            top: 13px;
            padding: 0;
            width: 18px;
            line-height: 34px;
        }

        a.button,
        button {
            font-size: 16px;
            font-family: Lato-Regular, sans-serif;
            line-height: 40px;
            padding: 0 30px;
            color: #fff;
            border: 0;
            background: #1EA160;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        a.button,
        a:hover,
        button,
        footer #links>div ul li a {
            text-decoration: none;
        }

        a.button,
        a[href^=\"tel:\"],
        button {
            display: inline-block;
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button,
        select {
            text-transform: none;
        }

        button {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        .field input,
        a.button,
        button,
        select {
            outline: 0!important;
        }

        .fa-fw,
        .fa-li,
        a.button,
        button {
            text-align: center;
        }
    </style>
";
    }

    // line 351
    public function block_content($context, array $blocks = array())
    {
        // line 352
        echo "    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">  

                <p class=\"text-center\"><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "pathImage", array()), "html", null, true);
        echo "\" width=\"100\" height=\"100\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "firstName", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "lastName", array()), "html", null, true);
        echo "\" class=\"img-circle img-responsive text-center\">
                </p>
                <p>";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), (isset($context["id"]) ? $context["id"] : null), array(), "array"), "html", null, true);
        echo "</p>
                <p> <h4>";
        // line 361
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "firstName", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "lastName", array()), "html", null, true);
        echo "</h4></p>
                <p class=\"text-justify\">Description: ";
        // line 362
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "description", array()), "html", null, true);
        echo "</p>       

            </div>

            <div class=\"col-sm-6\">  
                <p>available Time</p>

                <div id=\"doctor-page\" class=\"ember-view\">
                    <section id=\"doctor\" data-id=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "id", array()), "html", null, true);
        echo "\">
                        <div>
                            <ul>
                                <li style=\"order: undefined; width: 100%;\" itemprop=\"employee\" itemtype=\"https://schema.org/Physician\" itemscope=\"\" id=\"ember2154\"
                                    class=\"doctor-row doctor ember-view\">
                                    <!---->
                                    <div class=\"times\">

                                        <div class=\"dates mobile-only\">
                                            <ul>
                                            </ul>
                                            <nav>
                                                <button class=\"next five\"><i class=\"fa fa-caret-right\">&#8250;</i></button>
                                                <button class=\"prev five\"><i class=\"fa fa-caret-left\">&#8249;</i></button>
                                            </nav>
                                        </div>

                                        <div class=\"container\">
                                            <div id=\"ember2164\" class=\"doctor-row-times ember-view\">
                                                <div class=\"time-slots\">
                                                </div>
                                                <!-- <button class=\"small toggle-button\" data-ember-action=\"\" data-ember-action-5088=\"5088\">See all times<i class=\"fa fa-caret-down\"></i></button>
                                                --> </div>
                                        </div>

                                        <div class=\"bg-times columns mobile-only\">
                                            <div class=\"column one\"></div>
                                            <div class=\"column two\"></div>
                                        </div>

                                    </div>


                                </li>
                            </ul>
                            <div class=\"bg columns\">
                                <div class=\"column one\"></div>
                                <div class=\"column two\"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- <ul class=\"ulavtime\">
    ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weekDate"]) ? $context["weekDate"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 417
            echo "
        <li class=\"avTime\">               
                <span style=\"display: block; text-align: center;\">";
            // line 419
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "dayOfWeek", array()), "html", null, true);
            echo "</span><span style=\"display: block; text-align: center;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "day", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "month", array()), "html", null, true);
            echo " </span></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "</ul>-->
</div>
<!-- Modal -->
<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        ";
        // line 426
        if ((isset($context["userSession"]) ? $context["userSession"] : null)) {
            // line 427
            echo "            <div class=\"content1\">
                <form action=\"/prepayment\" method=\"post\" id=\"paypal_form\" class=\"paypal\">
                  ";
            // line 431
            echo "
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Book Appointment / With Dr.";
            // line 436
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "firstName", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "lastName", array()), "html", null, true);
            echo "</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p class=\"app-info\">Your Appointment : </p>
                            <label class=\"col-md-4 control-label\">Reason: </label>  
                            <textarea rows=\"4\" cols=\"50\" name=\"reason\" required>
                            </textarea>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                            <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                            <input type=\"hidden\" name=\"hosted_button_id\" value=\"2EAFXXZ2WCUMC\">
                            <input type=\"hidden\" name=\"no_note\" value=\"1\" />
                            <input type=\"hidden\" name=\"lc\" value=\"CA\" />
                            <input type=\"hidden\" name=\"currency_code\" value=\"CAD\" />
                            <input type=\"hidden\" name=\"bn\" value=\"PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest\" />
                            <input type=\"hidden\" name=\"first_name\" value=\"";
            // line 452
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "firstName", array()), "html", null, true);
            echo "\"  />
                            <input type=\"hidden\" name=\"last_name\" value=\"";
            // line 453
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "lastName", array()), "html", null, true);
            echo "\"  />
                            <input type=\"hidden\" name=\"email\" value=\"";
            // line 454
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "email", array()), "html", null, true);
            echo "\"  />
                            <input type=\"hidden\" name=\"item_number\" value=\"";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "id", array()), "html", null, true);
            echo "\" />
                            <input type=\"image\" src=\"https://www.sandbox.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
                            <img alt=\"\" border=\"0\" src=\"https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"content2 hidden\"> 
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Book Appointment / With Dr.";
            // line 467
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "firstName", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dr"]) ? $context["dr"] : null), "lastName", array()), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <h1>Payment</h1>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-primary\" >Payment</button>

                    </div>
                </div>
            </div> 
              
        ";
        } else {
            // line 481
            echo "            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <h4>You must <a href=\"/register\">register</a> or <a href=\"/login\">login </a>first to make an apointment.</h4>
                </div>

            </div>
        ";
        }
        // line 488
        echo "    </div>
</div>

<script type=\"text/javascript\">

    \$(document).ready(function () {
        var startDate = null;
        var endDate = null;
        var doctorId = \$('#doctor').attr('data-id');
        var \$modal = \$('#myModal');

        var showData = function (data) {
            // create header
            var \$headerUrl = \$('#doctor div.dates > ul');
            var \$timeslots = \$('div.time-slots');
            \$headerUrl.empty();
            \$timeslots.empty();
            \$.each(data, function (idx, d) {
                if (idx == 0) {
                    startDate = d.date.dateStr;
                } else {
                    endDate = d.date.dateStr;
                }
                var date = d.date;
                var appointments = d.appointments;
                var dateStr = d.date.dateStr; // 2017-08-02
                var \$e = \$('<li><span>' + d.date.dow + '</span><span>' + d.date.day + \" \" + d.date.month + '</span></li>');
                \$headerUrl.append(\$e);

                var \$ul = \$('<ul/>');
                \$.each(d.times, function (i, time) {
                    var s = time.start.hour;
                    var e = time.end.hour;

                    var total_hours = e - s;
                    for (var j = s; j < e + 1; j++) {
                        var timeStr = (j.toString() + \":\" + \"00\").padStart(5, '0');
                        var dateTime = dateStr + ' - ' + timeStr;

                        var hasAppointment = appointments.indexOf(timeStr) >= 0;

                        var \$li = \$('<li><button ' + (hasAppointment ? 'disabled style=\"background-color:#E8E8E8;\"' : '') + ' data-time=\"' + dateTime + '\" type=\"button\" class=\"btn-time inverted btn btn-info btn-lg\" onclick=\"getappointment(this)\">' + timeStr + '</button></li>');
                        \$ul.append(\$li);
                        timeStr = (j.toString() + \":\" + \"30\").padStart(5, '0');

                        hasAppointment = appointments.indexOf(timeStr) >= 0;

                        dateTime = dateStr + ' ' + timeStr;
                        \$li = \$('<li><button ' + (hasAppointment ? 'disabled style=\"background-color:#E8E8E8;\"' : '') + ' data-time=\"' + dateTime + '\" type=\"button\" class=\"btn-time inverted btn btn-info btn-lg\" onclick=\"getappointment(this)\">' + timeStr + '</button></li>');
                        \$ul.append(\$li);
                    }
                });
                \$timeslots.append(\$ul);
            });
        }
        //var data = [{\"date\":{\"dow\":\"Wed\",\"day\":\"06\",\"month\":\"2017-12-06\"},\"times\":[{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}},{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}}]},{\"date\":{\"dow\":\"Thu\",\"day\":\"07\",\"month\":\"2017-12-07\"},\"times\":[{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}},{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}}]},{\"date\":{\"dow\":\"Fri\",\"day\":\"08\",\"month\":\"2017-12-08\"},\"times\":[]},{\"date\":{\"dow\":\"Sat\",\"day\":\"09\",\"month\":\"2017-12-09\"},\"times\":[{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}}]},{\"date\":{\"dow\":\"Sun\",\"day\":\"10\",\"month\":\"2017-12-10\"},\"times\":[{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}},{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}}]}];
        var getDate = function (start) {
            var url = '/avtime/' + doctorId + '/' + start;
            \$.ajax({
                url: url,
                success: function (data) {
                    showData(JSON.parse(data));
                }
            })
        };

        var formatDate = function (d) {
            var dateFormat = 'YYYY-M-D';
            return d.format(dateFormat);
        }

        var today = moment();
        startDate = formatDate(today);
        endDate = formatDate(today.add(6, 'days'));
        getDate(startDate);

        \$('#doctor button.next').click(function (e) {
            e.preventDefault();
            var d = moment(startDate).add(6, 'days');
            getDate(formatDate(d));
        });

        \$('#doctor button.prev').click(function (e) {
            e.preventDefault();
            var d = moment(startDate).add(-6, 'days');
            getDate(formatDate(d));
        });

        window.getappointment = function (e) {
            var time = \$(e).attr('data-time');
            \$modal.find('input[name=time]').val(time);

            //\$modal.find('.modal-title').text('New message to ' + recipient);
            \$modal.find('.modal-body p .app-info').text('Your appointment is on : ' + time);
            \$modal.find('.content1').removeClass('hidden');
            \$modal.find('.content2').addClass('hidden');

            \$modal.modal('show');
            return false;
        };

        \$modal.find(\"form\").submit(function (e) {
            e.preventDefault();

            var \$form = \$(this);
            var action = \$form.attr('action');
            \$.ajax({
                url: action,
                method: 'POST',
                data: \$form.serializeArray(),
                success: function () {
                    \$modal.find('.content1').addClass('hidden');
                    \$modal.find('.content2').removeClass('hidden');
                }
            })
        });
        //showData(data);
    });
</script>


";
    }

    public function getTemplateName()
    {
        return "doctors/drdescription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 488,  585 => 481,  567 => 467,  552 => 455,  548 => 454,  544 => 453,  540 => 452,  520 => 436,  513 => 431,  509 => 427,  507 => 426,  500 => 421,  489 => 419,  485 => 417,  481 => 416,  432 => 370,  421 => 362,  416 => 361,  412 => 360,  404 => 358,  396 => 352,  393 => 351,  50 => 12,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
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

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js\"></script>

{% endblock %}
{% block css %} 
    <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css\">
    <style>
        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #doctor-page .doctor-row .times {
            margin: 0 20px;
        }

        #doctor-page .doctor-row .times {
            padding-bottom: 16px;
            margin-top: 0;
        }

        li.doctor-row .times {
            position: relative;
            float: right;
            width: 500px;
            z-index: 1;
        }

        #doctor-page .doctor-row .mobile-only {
            display: block!important;
        }

        li.doctor-row .times .dates {
            display: none;
        }

        li.doctor-row .times .dates {
            width: 100%;
            border-bottom: 1px solid #dadada;
            background-color: #fff;
        }

        li.doctor-row .times .dates ul li span {
            display: block;
            text-align: center;
        }

        #doctor-page .doctor-row .time-slots {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            height: auto!important;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-flow: row nowrap;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
        }

        .doctor-row-times .time-slots {
            -webkit-transition: height .4s;
            transition: height .4s;
            width: 100%;
            height: 156px;
            min-height: 156px;
            /*background: url(https://cdn.hotdoc.com.au/bookings/dist/assets/images/bg-timeslots-e9e1806….png);*/
            overflow: hidden;
            position: relative;
        }

        #doctor-page .doctor-row .time-slots ul {
            position: relative;
            left: 0!important;
        }

        .doctor-row-times .time-slots ul {
            position: absolute;
            left: 0;
            top: 0;
            width: 80px;
            min-width: 80px;
            min-height: 40px;
        }

        .doctor-row-times .time-slots ul li button {
            width: 78px;
            padding: 0;
            margin: 1px 1px 2px;
            line-height: 36px;
            border-radius: 3px;
        }



        a.button.inverted,
        button.inverted {
            background: 0 0;
            color: #5D626D;
        }

        li.doctor-row .times .dates nav button.prev {
            left: -20px;
        }

        li.doctor-row .times .dates nav button {
            position: absolute;
            top: 13px;
            padding: 0;
            width: 18px;
            line-height: 34px;
        }

        a.button:focus,
        a.button:hover,
        button:focus,
        button:hover {
            background: #22b66d;
        }

        a.button,
        button {
            font-size: 16px;
            font-family: Lato-Regular, sans-serif;
            line-height: 40px;
            padding: 0 30px;
            color: #fff;
            border: 0;
            background: #1EA160;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        a.button,
        a:hover,
        button,
        footer #links>div ul li a {
            text-decoration: none;
        }

        a.button,
        a[href^=\"tel:\"],
        button {
            display: inline-block;
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button,
        select {
            text-transform: none;
        }

        button {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        .field input,
        a.button,
        button,
        select {
            outline: 0!important;
        }

        .fa {
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            color:#fff;
        }

        .fa,
        .fa-stack {
            display: inline-block;
        }

        .fa-fw,
        .fa-li,
        a.button,
        button {
            text-align: center;
        }

        #doctor-page .doctor-row .times .container {
            min-height: 156px;
        }

        li.doctor-row .times .dates ul li span {
            display: block;
            text-align: center;
        }

        li.doctor-row .times .container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            min-height: 194px;
            background: 0 0;
        }

        li.doctor-row .times .dates ul li:nth-child(even) {
            background: #F7F7F7;
            border-radius: 4px 4px 0 0;
        }

        li.doctor-row .times .dates ul li {
            float: left;
            padding: 10px 0;
            width: 80px;
        }

        li.doctor-row .times .dates ul li span {
            display: block;
            text-align: center;
        }

        li.doctor-row .times .dates nav button.next {
            right: -20px;
        }

        li.doctor-row .times .dates nav button {
            position: absolute;
            top: 13px;
            padding: 0;
            width: 18px;
            line-height: 34px;
        }

        a.button,
        button {
            font-size: 16px;
            font-family: Lato-Regular, sans-serif;
            line-height: 40px;
            padding: 0 30px;
            color: #fff;
            border: 0;
            background: #1EA160;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        a.button,
        a:hover,
        button,
        footer #links>div ul li a {
            text-decoration: none;
        }

        a.button,
        a[href^=\"tel:\"],
        button {
            display: inline-block;
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button,
        select {
            text-transform: none;
        }

        button {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        .field input,
        a.button,
        button,
        select {
            outline: 0!important;
        }

        .fa-fw,
        .fa-li,
        a.button,
        button {
            text-align: center;
        }
    </style>
{% endblock %}

{% block content %}
    <section id=\"padding\" class=\"section-sm-padding\">
    </section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">  

                <p class=\"text-center\"><img src=\"{{dr.pathImage}}\" width=\"100\" height=\"100\" alt=\"{{dr.firstName }}{{dr.lastName }}\" class=\"img-circle img-responsive text-center\">
                </p>
                <p>{{dr[id]}}</p>
                <p> <h4>{{dr.firstName}}{{dr.lastName}}</h4></p>
                <p class=\"text-justify\">Description: {{dr.description}}</p>       

            </div>

            <div class=\"col-sm-6\">  
                <p>available Time</p>

                <div id=\"doctor-page\" class=\"ember-view\">
                    <section id=\"doctor\" data-id=\"{{dr.id}}\">
                        <div>
                            <ul>
                                <li style=\"order: undefined; width: 100%;\" itemprop=\"employee\" itemtype=\"https://schema.org/Physician\" itemscope=\"\" id=\"ember2154\"
                                    class=\"doctor-row doctor ember-view\">
                                    <!---->
                                    <div class=\"times\">

                                        <div class=\"dates mobile-only\">
                                            <ul>
                                            </ul>
                                            <nav>
                                                <button class=\"next five\"><i class=\"fa fa-caret-right\">&#8250;</i></button>
                                                <button class=\"prev five\"><i class=\"fa fa-caret-left\">&#8249;</i></button>
                                            </nav>
                                        </div>

                                        <div class=\"container\">
                                            <div id=\"ember2164\" class=\"doctor-row-times ember-view\">
                                                <div class=\"time-slots\">
                                                </div>
                                                <!-- <button class=\"small toggle-button\" data-ember-action=\"\" data-ember-action-5088=\"5088\">See all times<i class=\"fa fa-caret-down\"></i></button>
                                                --> </div>
                                        </div>

                                        <div class=\"bg-times columns mobile-only\">
                                            <div class=\"column one\"></div>
                                            <div class=\"column two\"></div>
                                        </div>

                                    </div>


                                </li>
                            </ul>
                            <div class=\"bg columns\">
                                <div class=\"column one\"></div>
                                <div class=\"column two\"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- <ul class=\"ulavtime\">
    {% for d in weekDate %}

        <li class=\"avTime\">               
                <span style=\"display: block; text-align: center;\">{{d.dayOfWeek}}</span><span style=\"display: block; text-align: center;\"> {{d.day}}{{d.month}} </span></li>
    {% endfor %}
</ul>-->
</div>
<!-- Modal -->
<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        {% if userSession %}
            <div class=\"content1\">
                <form action=\"/prepayment\" method=\"post\" id=\"paypal_form\" class=\"paypal\">
                  {#  <input type=\"hidden\" name=\"doctorId\" value=\"{{dr.id}}\" />
                    <input type=\"hidden\" name=\"time\" value=\"\" /> #}

                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Book Appointment / With Dr.{{dr.firstName }}{{dr.lastName }}</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p class=\"app-info\">Your Appointment : </p>
                            <label class=\"col-md-4 control-label\">Reason: </label>  
                            <textarea rows=\"4\" cols=\"50\" name=\"reason\" required>
                            </textarea>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                            <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                            <input type=\"hidden\" name=\"hosted_button_id\" value=\"2EAFXXZ2WCUMC\">
                            <input type=\"hidden\" name=\"no_note\" value=\"1\" />
                            <input type=\"hidden\" name=\"lc\" value=\"CA\" />
                            <input type=\"hidden\" name=\"currency_code\" value=\"CAD\" />
                            <input type=\"hidden\" name=\"bn\" value=\"PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest\" />
                            <input type=\"hidden\" name=\"first_name\" value=\"{{ userSession.firstName }}\"  />
                            <input type=\"hidden\" name=\"last_name\" value=\"{{ userSession.lastName}}\"  />
                            <input type=\"hidden\" name=\"email\" value=\"{{ userSession.email}}\"  />
                            <input type=\"hidden\" name=\"item_number\" value=\"{{dr.id}}\" />
                            <input type=\"image\" src=\"https://www.sandbox.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
                            <img alt=\"\" border=\"0\" src=\"https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"content2 hidden\"> 
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Book Appointment / With Dr.{{dr.firstName }}{{dr.lastName }}</h4>
                    </div>
                    <div class=\"modal-body\">
                        <h1>Payment</h1>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-primary\" >Payment</button>

                    </div>
                </div>
            </div> 
              
        {% else %}
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <h4>You must <a href=\"/register\">register</a> or <a href=\"/login\">login </a>first to make an apointment.</h4>
                </div>

            </div>
        {% endif %}
    </div>
</div>

<script type=\"text/javascript\">

    \$(document).ready(function () {
        var startDate = null;
        var endDate = null;
        var doctorId = \$('#doctor').attr('data-id');
        var \$modal = \$('#myModal');

        var showData = function (data) {
            // create header
            var \$headerUrl = \$('#doctor div.dates > ul');
            var \$timeslots = \$('div.time-slots');
            \$headerUrl.empty();
            \$timeslots.empty();
            \$.each(data, function (idx, d) {
                if (idx == 0) {
                    startDate = d.date.dateStr;
                } else {
                    endDate = d.date.dateStr;
                }
                var date = d.date;
                var appointments = d.appointments;
                var dateStr = d.date.dateStr; // 2017-08-02
                var \$e = \$('<li><span>' + d.date.dow + '</span><span>' + d.date.day + \" \" + d.date.month + '</span></li>');
                \$headerUrl.append(\$e);

                var \$ul = \$('<ul/>');
                \$.each(d.times, function (i, time) {
                    var s = time.start.hour;
                    var e = time.end.hour;

                    var total_hours = e - s;
                    for (var j = s; j < e + 1; j++) {
                        var timeStr = (j.toString() + \":\" + \"00\").padStart(5, '0');
                        var dateTime = dateStr + ' - ' + timeStr;

                        var hasAppointment = appointments.indexOf(timeStr) >= 0;

                        var \$li = \$('<li><button ' + (hasAppointment ? 'disabled style=\"background-color:#E8E8E8;\"' : '') + ' data-time=\"' + dateTime + '\" type=\"button\" class=\"btn-time inverted btn btn-info btn-lg\" onclick=\"getappointment(this)\">' + timeStr + '</button></li>');
                        \$ul.append(\$li);
                        timeStr = (j.toString() + \":\" + \"30\").padStart(5, '0');

                        hasAppointment = appointments.indexOf(timeStr) >= 0;

                        dateTime = dateStr + ' ' + timeStr;
                        \$li = \$('<li><button ' + (hasAppointment ? 'disabled style=\"background-color:#E8E8E8;\"' : '') + ' data-time=\"' + dateTime + '\" type=\"button\" class=\"btn-time inverted btn btn-info btn-lg\" onclick=\"getappointment(this)\">' + timeStr + '</button></li>');
                        \$ul.append(\$li);
                    }
                });
                \$timeslots.append(\$ul);
            });
        }
        //var data = [{\"date\":{\"dow\":\"Wed\",\"day\":\"06\",\"month\":\"2017-12-06\"},\"times\":[{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}},{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}}]},{\"date\":{\"dow\":\"Thu\",\"day\":\"07\",\"month\":\"2017-12-07\"},\"times\":[{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}},{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}}]},{\"date\":{\"dow\":\"Fri\",\"day\":\"08\",\"month\":\"2017-12-08\"},\"times\":[]},{\"date\":{\"dow\":\"Sat\",\"day\":\"09\",\"month\":\"2017-12-09\"},\"times\":[{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}}]},{\"date\":{\"dow\":\"Sun\",\"day\":\"10\",\"month\":\"2017-12-10\"},\"times\":[{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}},{\"start\":{\"hour\":8,\"minute\":0},\"end\":{\"hour\":20,\"minute\":0}}]}];
        var getDate = function (start) {
            var url = '/avtime/' + doctorId + '/' + start;
            \$.ajax({
                url: url,
                success: function (data) {
                    showData(JSON.parse(data));
                }
            })
        };

        var formatDate = function (d) {
            var dateFormat = 'YYYY-M-D';
            return d.format(dateFormat);
        }

        var today = moment();
        startDate = formatDate(today);
        endDate = formatDate(today.add(6, 'days'));
        getDate(startDate);

        \$('#doctor button.next').click(function (e) {
            e.preventDefault();
            var d = moment(startDate).add(6, 'days');
            getDate(formatDate(d));
        });

        \$('#doctor button.prev').click(function (e) {
            e.preventDefault();
            var d = moment(startDate).add(-6, 'days');
            getDate(formatDate(d));
        });

        window.getappointment = function (e) {
            var time = \$(e).attr('data-time');
            \$modal.find('input[name=time]').val(time);

            //\$modal.find('.modal-title').text('New message to ' + recipient);
            \$modal.find('.modal-body p .app-info').text('Your appointment is on : ' + time);
            \$modal.find('.content1').removeClass('hidden');
            \$modal.find('.content2').addClass('hidden');

            \$modal.modal('show');
            return false;
        };

        \$modal.find(\"form\").submit(function (e) {
            e.preventDefault();

            var \$form = \$(this);
            var action = \$form.attr('action');
            \$.ajax({
                url: action,
                method: 'POST',
                data: \$form.serializeArray(),
                success: function () {
                    \$modal.find('.content1').addClass('hidden');
                    \$modal.find('.content2').removeClass('hidden');
                }
            })
        });
        //showData(data);
    });
</script>


{% endblock %}", "doctors/drdescription.html.twig", "/home/cp4809/clinic.ipd10.com/templates/doctors/drdescription.html.twig");
    }
}
