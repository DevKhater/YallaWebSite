<?php

/* YallaWebsiteBackendBundle:AdsManager:_image.html.twig */
class __TwigTemplate_8dcb83ab8d704f5a3a64f21abeefb1291b2720c9de0afb3c08e56d8912bd6f5e extends Twig_Template
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
        echo "    ";
        // line 2
        echo "    <div class=\"tooltip_css\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), "html", null, true);
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
        return array (  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
