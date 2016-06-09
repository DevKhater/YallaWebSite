<?php

/* YallaWebsiteBackendBundle:AdsManager:_type.html.twig */
class __TwigTemplate_ccd402db5d4490385061c81bf189a545c0ff6bc2635f96ef843451828d6dab30 extends Twig_Template
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
        $__internal_79a41e1add361c8bf2c1d7f1152efa384b95febceef52592ef6bc1475cd0718f = $this->env->getExtension("native_profiler");
        $__internal_79a41e1add361c8bf2c1d7f1152efa384b95febceef52592ef6bc1475cd0718f->enter($__internal_79a41e1add361c8bf2c1d7f1152efa384b95febceef52592ef6bc1475cd0718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:AdsManager:_type.html.twig"));

        // line 2
        if (twig_in_filter(twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), (isset($context["allowed_type"]) ? $context["allowed_type"] : $this->getContext($context, "allowed_type")))) {
            // line 3
            echo "  ";
            $this->loadTemplate((("@YallaWebsiteBackendBundle/views/AdsManager/_" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) . ".html.twig"), "YallaWebsiteBackendBundle:AdsManager:_type.html.twig", 3)->display(array_merge($context, array("item" => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))));
        } else {
            // line 6
            echo "  <p>Unknown type <code>";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "</code> for id <code>";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "</code>.</p>
";
        }
        
        $__internal_79a41e1add361c8bf2c1d7f1152efa384b95febceef52592ef6bc1475cd0718f->leave($__internal_79a41e1add361c8bf2c1d7f1152efa384b95febceef52592ef6bc1475cd0718f_prof);

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
        return array (  28 => 6,  24 => 3,  22 => 2,);
    }
}
/* {# If type is allowed, include the relevant partial #}*/
/* {% if type|lower in allowed_type %}*/
/*   {% include '@YallaWebsiteBackendBundle/views/AdsManager/_' ~ type ~ '.html.twig' with { item: item } %}*/
/* {# Else print an error #}*/
/* {% else %}*/
/*   <p>Unknown type <code>{{ type }}</code> for id <code>{{ id }}</code>.</p>*/
/* {% endif %}*/
