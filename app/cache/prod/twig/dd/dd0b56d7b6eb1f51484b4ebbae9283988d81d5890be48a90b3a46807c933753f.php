<?php

/* YallaWebsiteBackendBundle:AdsManager:_type.html.twig */
class __TwigTemplate_9fbbcc32c9a7afce066e5103a5cb0f496fe1239f234a05e9b153e41796b772cf extends Twig_Template
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
        // line 2
        if (twig_in_filter(twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)), (isset($context["allowed_type"]) ? $context["allowed_type"] : null))) {
            // line 3
            echo "  ";
            $this->loadTemplate((("@YallaWebsiteBackendBundle/views/AdsManager/_" . (isset($context["type"]) ? $context["type"] : null)) . ".html.twig"), "YallaWebsiteBackendBundle:AdsManager:_type.html.twig", 3)->display(array_merge($context, array("item" => (isset($context["item"]) ? $context["item"] : null))));
        } else {
            // line 6
            echo "  <p>Unknown type <code>";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "</code> for id <code>";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "</code>.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:AdsManager:_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  21 => 3,  19 => 2,);
    }
}
/* {# If type is allowed, include the relevant partial #}*/
/* {% if type|lower in allowed_type %}*/
/*   {% include '@YallaWebsiteBackendBundle/views/AdsManager/_' ~ type ~ '.html.twig' with { item: item } %}*/
/* {# Else print an error #}*/
/* {% else %}*/
/*   <p>Unknown type <code>{{ type }}</code> for id <code>{{ id }}</code>.</p>*/
/* {% endif %}*/
