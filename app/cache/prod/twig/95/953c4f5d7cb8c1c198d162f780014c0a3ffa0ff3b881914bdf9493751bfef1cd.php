<?php

/* YallaWebsiteFrontendBundle:Events:index.html.twig */
class __TwigTemplate_e6e1478225aa687ef506b91f58bc48b6b7ab1b049d167c7a86598faa934cac4e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "        <div class=\"wrapper\">
            <div class=\"IndexTitle\">
                <h1>Events</h1>
            </div>
            <div id=\"theCalendarRow\">
                <div id=\"calendar\"></div>
            </div>
            <div id=\"ajaxDiv\" class=\"row\" ></div>
        </div>
 ";
    }

    // line 14
    public function block_js_calednar($context, array $blocks = array())
    {
        // line 15
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
        return array (  48 => 15,  45 => 14,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*         <div class="wrapper">*/
/*             <div class="IndexTitle">*/
/*                 <h1>Events</h1>*/
/*             </div>*/
/*             <div id="theCalendarRow">*/
/*                 <div id="calendar"></div>*/
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
