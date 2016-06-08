<?php

/* YallaWebsiteBackendBundle:Homepage/html:dropdown_day_event.html.twig */
class __TwigTemplate_1af7e926fd129c5bdbc316aa1e2c99ab721ea312fcfde94e9c637867e4d1158a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8344651005dcac6b6c49c4039613a274d08ec54060969d9d4e60f29bd6abee12 = $this->env->getExtension("native_profiler");
        $__internal_8344651005dcac6b6c49c4039613a274d08ec54060969d9d4e60f29bd6abee12->enter($__internal_8344651005dcac6b6c49c4039613a274d08ec54060969d9d4e60f29bd6abee12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/html:dropdown_day_event.html.twig"));

        // line 1
        echo "<select id=\"dd_events\" class=\"form-control\">
    <option>Select Event</option>
    ";
        // line 3
        if ((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events"))) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 5
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "Y-m-d"), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    ";
        }
        // line 8
        echo "</select>

<span id='add_event_week' href='#' class='btn-sm btn-default'>Add Event To Day</span>

<script>
    \$(\"#add_event_week\").click(function (e) {
        e.preventDefault();
        var id = \$(\"#dd_events\").val();
        var d = \$(\"#dd_days\").val();
        \$.ajax({
            type: \"POST\",
            url: Routing.generate('backend_ajax_set_events_for_day', {id: id, d: d}),
            success: function (data) {
                \$('h4#ajaxTitle').text('Success');
                \$('#ajaxMessage p').text('Event Added To Homepage');
                \$('#ajaxResultMessages').modal('show');
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
                console.log(textStatus);
                console.log(errorThrown);
                \$('h4#ajaxTitle').text('Error');
                \$('#ajaxMessage p').text(errorThrown);
                \$('#ajaxResultMessages').modal('show');
            }
        });
    });
</script>";
        
        $__internal_8344651005dcac6b6c49c4039613a274d08ec54060969d9d4e60f29bd6abee12->leave($__internal_8344651005dcac6b6c49c4039613a274d08ec54060969d9d4e60f29bd6abee12_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/html:dropdown_day_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  46 => 7,  33 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <select id="dd_events" class="form-control">*/
/*     <option>Select Event</option>*/
/*     {% if (events)%}*/
/*         {% for event in events %}*/
/*             <option value="{{event.id}}">{{event.title}} - {{event.startDate|date("Y-m-d")}}</option>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </select>*/
/* */
/* <span id='add_event_week' href='#' class='btn-sm btn-default'>Add Event To Day</span>*/
/* */
/* <script>*/
/*     $("#add_event_week").click(function (e) {*/
/*         e.preventDefault();*/
/*         var id = $("#dd_events").val();*/
/*         var d = $("#dd_days").val();*/
/*         $.ajax({*/
/*             type: "POST",*/
/*             url: Routing.generate('backend_ajax_set_events_for_day', {id: id, d: d}),*/
/*             success: function (data) {*/
/*                 $('h4#ajaxTitle').text('Success');*/
/*                 $('#ajaxMessage p').text('Event Added To Homepage');*/
/*                 $('#ajaxResultMessages').modal('show');*/
/*             },*/
/*             error: function (xhr, textStatus, errorThrown) {*/
/*                 console.log(xhr.responseText);*/
/*                 console.log(textStatus);*/
/*                 console.log(errorThrown);*/
/*                 $('h4#ajaxTitle').text('Error');*/
/*                 $('#ajaxMessage p').text(errorThrown);*/
/*                 $('#ajaxResultMessages').modal('show');*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
