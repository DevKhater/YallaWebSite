<?php

/* @YallaWebsiteFrontendBundle/views/Ads/_type.html.twig */
class __TwigTemplate_fe5e294c82ef8d4a6d69fbb6e37b265ad1be96bb667a46f8c4f982a839df2dec extends Twig_Template
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
        $__internal_0710d7a98316b5589d5d83ec87b1a87a37a9eee10f083feef9391318e4302dd4 = $this->env->getExtension("native_profiler");
        $__internal_0710d7a98316b5589d5d83ec87b1a87a37a9eee10f083feef9391318e4302dd4->enter($__internal_0710d7a98316b5589d5d83ec87b1a87a37a9eee10f083feef9391318e4302dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@YallaWebsiteFrontendBundle/views/Ads/_type.html.twig"));

        // line 2
        if (twig_in_filter(twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), (isset($context["allowed_type"]) ? $context["allowed_type"] : $this->getContext($context, "allowed_type")))) {
            // line 3
            echo "  ";
            $this->loadTemplate((("@YallaWebsiteFrontendBundle/views/Ads/_" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) . ".html.twig"), "@YallaWebsiteFrontendBundle/views/Ads/_type.html.twig", 3)->display(array_merge($context, array("item" => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))));
        } else {
            // line 6
            echo "  <p>Unknown type <code>";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "</code> for id <code>";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "</code>.</p>
";
        }
        
        $__internal_0710d7a98316b5589d5d83ec87b1a87a37a9eee10f083feef9391318e4302dd4->leave($__internal_0710d7a98316b5589d5d83ec87b1a87a37a9eee10f083feef9391318e4302dd4_prof);

    }

    public function getTemplateName()
    {
        return "@YallaWebsiteFrontendBundle/views/Ads/_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  24 => 3,  22 => 2,);
    }
}
/* {# If type is allowed, include the relevant partial #}*/
/* {% if type|lower in allowed_type %}*/
/*   {% include '@YallaWebsiteFrontendBundle/views/Ads/_' ~ type ~ '.html.twig' with { item: item } %}*/
/* {# Else print an error #}*/
/* {% else %}*/
/*   <p>Unknown type <code>{{ type }}</code> for id <code>{{ id }}</code>.</p>*/
/* {% endif %}*/
