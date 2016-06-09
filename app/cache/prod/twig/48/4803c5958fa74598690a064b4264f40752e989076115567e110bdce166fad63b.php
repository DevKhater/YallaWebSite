<?php

/* YallaWebsiteFrontendBundle:Template:eventsAjax.html.twig */
class __TwigTemplate_9db284c943f8677c0a352cfd998c42386369ee46bfff542c7fb1cc044f220114 extends Twig_Template
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
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : null)) == 1)) {
                // line 3
                echo "        ";
                $context["class"] = "center col-xs-4 col-xs-offset-4";
                // line 4
                echo "        ";
                $context["style"] = "";
                // line 5
                echo "    ";
            } elseif ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : null)) == 2)) {
                // line 6
                echo "        ";
                $context["class"] = "col-xs-4";
                // line 7
                echo "        ";
                $context["style"] = "margin-right:8%; margin-left:8%;";
                // line 8
                echo "
    ";
            } else {
                // line 10
                echo "        ";
                $context["class"] = "col-xs-4";
                // line 11
                echo "        ";
                $context["style"] = "";
                // line 12
                echo "    ";
            }
            // line 13
            echo "
    <div id='DisplayedAjaxRow'>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 16
                echo "            <div class='";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "'>
            <div class='eventAjaxDiv'>
                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($context["event"], "slug", array()))), "html", null, true);
                echo "\" target=\"__blank\">
                    <div class='ajaxEventImageDiv center' style=\"background-image: url('";
                // line 19
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["event"], "media", array()), "displayIndex");
                echo "')\">
                        <div class='eventTitleHoverDisplay'>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                echo "</div>
                    </div>
                </a>
            </div>
            </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 27
            echo "    NO EVENTS
";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Template:eventsAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  87 => 27,  74 => 20,  70 => 19,  66 => 18,  60 => 16,  56 => 15,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if (entities) %}*/
/*     {% if (entities|length) == 1 %}*/
/*         {% set class = 'center col-xs-4 col-xs-offset-4' %}*/
/*         {% set style = '' %}*/
/*     {% elseif  (entities|length) == 2 %}*/
/*         {% set class = 'col-xs-4' %}*/
/*         {% set style = 'margin-right:8%; margin-left:8%;' %}*/
/* */
/*     {% else %}*/
/*         {% set class = 'col-xs-4' %}*/
/*         {% set style = '' %}*/
/*     {%endif %}*/
/* */
/*     <div id='DisplayedAjaxRow'>*/
/*         {%for event in entities%}*/
/*             <div class='{{class}}'>*/
/*             <div class='eventAjaxDiv'>*/
/*                 <a href="{{path('yalla_website_frontened_event',  {'id': event.slug}) }}" target="__blank">*/
/*                     <div class='ajaxEventImageDiv center' style="background-image: url('{% path  event.media, 'displayIndex' %}')">*/
/*                         <div class='eventTitleHoverDisplay'>{{ event.title }}</div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*             </div>*/
/*     {% endfor %}*/
/* {% else %}*/
/*     NO EVENTS*/
/* {% endif %}*/
/* </div>*/
