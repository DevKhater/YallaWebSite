<?php

/* YallaWebsiteBackendBundle:AdsManager:_image.html.twig */
class __TwigTemplate_23655f1e95fd793c4be6fe217e9d11079747b390106a21184a524e68d733a0d5 extends Twig_Template
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
        $__internal_64c10e451aabbe7564ef23e2f9a7e6a59e86b0af882a295874ed267e92d36b73 = $this->env->getExtension("native_profiler");
        $__internal_64c10e451aabbe7564ef23e2f9a7e6a59e86b0af882a295874ed267e92d36b73->enter($__internal_64c10e451aabbe7564ef23e2f9a7e6a59e86b0af882a295874ed267e92d36b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:AdsManager:_image.html.twig"));

        // line 1
        echo "    ";
        // line 2
        echo "    <div class=\"tooltip_css\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
        echo "
        <img class='tooltiptext' src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "http://cdn.domain.tld/path/to/default.png")) : ("http://cdn.domain.tld/path/to/default.png")), "html", null, true);
        echo "\" 
             alt=\"";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description", array()), "Default description")) : ("Default description")), "html", null, true);
        echo "\" />
    </div>
    <style>
        .tooltip_css {
            position: relative;
            display: inline-block;
        }

        .tooltip_css .tooltiptext {
            visibility: hidden;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            bottom: 100%;
            right: 0%;
            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip_css:hover .tooltiptext {
            visibility: visible;
        }


    </style>";
        
        $__internal_64c10e451aabbe7564ef23e2f9a7e6a59e86b0af882a295874ed267e92d36b73->leave($__internal_64c10e451aabbe7564ef23e2f9a7e6a59e86b0af882a295874ed267e92d36b73_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:AdsManager:_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/*     {# _image.html.twig #}*/
/*     <div class="tooltip_css">*/
/*         {{item.target}}*/
/*         <img class='tooltiptext' src="{{ item.link|default('http://cdn.domain.tld/path/to/default.png') }}" */
/*              alt="{{ item.description|default('Default description') }}" />*/
/*     </div>*/
/*     <style>*/
/*         .tooltip_css {*/
/*             position: relative;*/
/*             display: inline-block;*/
/*         }*/
/* */
/*         .tooltip_css .tooltiptext {*/
/*             visibility: hidden;*/
/*             text-align: center;*/
/*             border-radius: 6px;*/
/*             padding: 5px 0;*/
/*             bottom: 100%;*/
/*             right: 0%;*/
/*             /* Position the tooltip *//* */
/*             position: absolute;*/
/*             z-index: 1;*/
/*         }*/
/* */
/*         .tooltip_css:hover .tooltiptext {*/
/*             visibility: visible;*/
/*         }*/
/* */
/* */
/*     </style>*/
