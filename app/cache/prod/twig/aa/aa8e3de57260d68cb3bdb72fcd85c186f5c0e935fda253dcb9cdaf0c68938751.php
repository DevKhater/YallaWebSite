<?php

/* YallaWebsiteBackendBundle:Homepage/html:homepage_backend_week_events.html.twig */
class __TwigTemplate_0429489df60a1c9d1782ff160ac81fdc151a42842e6b48d82ed233a5ca427323 extends Twig_Template
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
        // line 1
        echo "<h5><strong>Homepage Weeks Events</strong></h5>
<div class='col-md-12'>
   <div style=\"float:left\">
       ";
        // line 4
        $context["days"] = array(1 => "Sunday", 2 => "Monday", 3 => "Tuesday", 4 => "Wednesday", 5 => "Thursday", 6 => "Friday", 7 => "Saturday");
        // line 5
        echo "       <select id=\"dd_days\" class=\"form-control\">
           <option>Select A Day</option>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["days"]) ? $context["days"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["day"]) {
            // line 8
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </select>
   </div>
   <div style=\"float:left\">
       <div id='eventsAjax'></div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/html:homepage_backend_week_events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  34 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <h5><strong>Homepage Weeks Events</strong></h5>*/
/* <div class='col-md-12'>*/
/*    <div style="float:left">*/
/*        {% set days = {1: 'Sunday', 2:'Monday', 3:'Tuesday', 4: 'Wednesday', 5: 'Thursday', 6: 'Friday', 7: 'Saturday' }%}*/
/*        <select id="dd_days" class="form-control">*/
/*            <option>Select A Day</option>*/
/*             {% for key, day in days %}*/
/*                 <option value="{{key}}">{{day}}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*    </div>*/
/*    <div style="float:left">*/
/*        <div id='eventsAjax'></div>*/
/*    </div>*/
/* </div>*/
