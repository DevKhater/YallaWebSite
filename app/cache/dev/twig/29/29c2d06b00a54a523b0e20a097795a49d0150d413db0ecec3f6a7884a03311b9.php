<?php

/* YallaWebsiteFrontendBundle:Events:index.html.twig */
class __TwigTemplate_0b795aa571b94e891b53844fcd98704a6e8839041d137d2c7becd53db3bc2a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Events:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js_calednar' => array($this, 'block_js_calednar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@YallaWebsiteFrontendBundle/views/front_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e552d61640184eab077330751d4f75a23fd5ccd12f77724bc778889c40d0cf1e = $this->env->getExtension("native_profiler");
        $__internal_e552d61640184eab077330751d4f75a23fd5ccd12f77724bc778889c40d0cf1e->enter($__internal_e552d61640184eab077330751d4f75a23fd5ccd12f77724bc778889c40d0cf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Events:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e552d61640184eab077330751d4f75a23fd5ccd12f77724bc778889c40d0cf1e->leave($__internal_e552d61640184eab077330751d4f75a23fd5ccd12f77724bc778889c40d0cf1e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_92459b693e0e7c9c01e2cb063e0f6dc7827c7b3aca211a03d3dd21379da33fa9 = $this->env->getExtension("native_profiler");
        $__internal_92459b693e0e7c9c01e2cb063e0f6dc7827c7b3aca211a03d3dd21379da33fa9->enter($__internal_92459b693e0e7c9c01e2cb063e0f6dc7827c7b3aca211a03d3dd21379da33fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div class=\"wrapper\">
            
            <div class=\"row\">   
                <div class=\"IndexTitle\">
                    <h1>Events</h1>
                </div>
            </div>
            <div id=\"theCalendarRow\">
                <div id='calendar_bg' class='col-lg-12 col-md-12 col-sm-12 col-xs-12' style=\"margin: 0 auto;background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/yallawebsitefrontend/images/calednar_background.jpg"), "html", null, true);
        echo "');\">
                    <div class=\"col-xs-1\"></div>
                    <div class=\"col-xs-10\" style=\"margin: 0px auto 300px;\">
                        <div id='calendarTopLine'class=\"col-xs-12\"> horizontal line </div>
                        <div id=\"calendar\"></div>
                        <div class=\"col-xs-12\"> horizontal line </div>
                    </div>
                </div>
            </div>
            <div id=\"ajaxDiv\" class=\"row\" ></div>
        </div>
 ";
        
        $__internal_92459b693e0e7c9c01e2cb063e0f6dc7827c7b3aca211a03d3dd21379da33fa9->leave($__internal_92459b693e0e7c9c01e2cb063e0f6dc7827c7b3aca211a03d3dd21379da33fa9_prof);

    }

    // line 24
    public function block_js_calednar($context, array $blocks = array())
    {
        $__internal_f4e143d50f178eba5d5a07be65655e02107dfdf3f36241c89a40df43094d05fd = $this->env->getExtension("native_profiler");
        $__internal_f4e143d50f178eba5d5a07be65655e02107dfdf3f36241c89a40df43094d05fd->enter($__internal_f4e143d50f178eba5d5a07be65655e02107dfdf3f36241c89a40df43094d05fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_calednar"));

        // line 25
        echo "    <script>

        \$(document).ready(function () {
            \$.ajax({
                type: \"POST\",
                url: Routing.generate('frontend_ajax_get_calendar'),
                dataType: 'json',
                success: function (data) {
                    \$('#calendar').html(data.nav);
                    \$('#calendar').append(data.cal);
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
        });

        function getEvents(thedate) {
            \$.ajax({
                type: \"POST\",
                url: Routing.generate('frontend_ajax_get_event_by_date', {id: thedate}),
                success: function (data) {
                    \$('#ajaxDiv').html(data);
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
        }
    </script>
";
        
        $__internal_f4e143d50f178eba5d5a07be65655e02107dfdf3f36241c89a40df43094d05fd->leave($__internal_f4e143d50f178eba5d5a07be65655e02107dfdf3f36241c89a40df43094d05fd_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Events:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  70 => 24,  51 => 11,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*         <div class="wrapper">*/
/*             */
/*             <div class="row">   */
/*                 <div class="IndexTitle">*/
/*                     <h1>Events</h1>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="theCalendarRow">*/
/*                 <div id='calendar_bg' class='col-lg-12 col-md-12 col-sm-12 col-xs-12' style="margin: 0 auto;background-image: url('{{ asset('bundles/yallawebsitefrontend/images/calednar_background.jpg') }}');">*/
/*                     <div class="col-xs-1"></div>*/
/*                     <div class="col-xs-10" style="margin: 0px auto 300px;">*/
/*                         <div id='calendarTopLine'class="col-xs-12"> horizontal line </div>*/
/*                         <div id="calendar"></div>*/
/*                         <div class="col-xs-12"> horizontal line </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="ajaxDiv" class="row" ></div>*/
/*         </div>*/
/*  {% endblock %}*/
/* */
/* {% block js_calednar %}*/
/*     <script>*/
/* */
/*         $(document).ready(function () {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: Routing.generate('frontend_ajax_get_calendar'),*/
/*                 dataType: 'json',*/
/*                 success: function (data) {*/
/*                     $('#calendar').html(data.nav);*/
/*                     $('#calendar').append(data.cal);*/
/*                 },*/
/*                 error: function (xhr, textStatus, errorThrown) {*/
/*                     console.log(xhr.responseText);*/
/*                     console.log(textStatus);*/
/*                     console.log(errorThrown);*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         function getEvents(thedate) {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: Routing.generate('frontend_ajax_get_event_by_date', {id: thedate}),*/
/*                 success: function (data) {*/
/*                     $('#ajaxDiv').html(data);*/
/*                 },*/
/*                 error: function (xhr, textStatus, errorThrown) {*/
/*                     console.log(xhr.responseText);*/
/*                     console.log(textStatus);*/
/*                     console.log(errorThrown);*/
/*                 }*/
/*             });*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
