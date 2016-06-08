<?php

/* YallaWebsiteFrontendBundle:Ads:_type.html.twig */
class __TwigTemplate_ef3b2e18605b41df92b5e6c29ad66261a85890d9e7d29d807448f77cc1b9d845 extends Twig_Template
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
        $__internal_728901d467fad68b06a4e8fdd81f481825fe9d8549a595ecbdaef1938c32ef2a = $this->env->getExtension("native_profiler");
        $__internal_728901d467fad68b06a4e8fdd81f481825fe9d8549a595ecbdaef1938c32ef2a->enter($__internal_728901d467fad68b06a4e8fdd81f481825fe9d8549a595ecbdaef1938c32ef2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Ads:_type.html.twig"));

        // line 2
        if (twig_in_filter(twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), (isset($context["allowed_type"]) ? $context["allowed_type"] : $this->getContext($context, "allowed_type")))) {
            // line 3
            echo "  ";
            $this->loadTemplate((("@YallaWebsiteFrontendBundle/views/Ads/_" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) . ".html.twig"), "YallaWebsiteFrontendBundle:Ads:_type.html.twig", 3)->display(array_merge($context, array("item" => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))));
        } else {
            // line 6
            echo "  <p>Unknown type <code>";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "</code> for id <code>";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "</code>.</p>
";
        }
        
        $__internal_728901d467fad68b06a4e8fdd81f481825fe9d8549a595ecbdaef1938c32ef2a->leave($__internal_728901d467fad68b06a4e8fdd81f481825fe9d8549a595ecbdaef1938c32ef2a_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Ads:_type.html.twig";
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
