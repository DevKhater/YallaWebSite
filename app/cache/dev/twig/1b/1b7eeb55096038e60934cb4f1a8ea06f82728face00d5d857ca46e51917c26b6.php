<?php

/* YallaWebsiteBackendBundle:AdsManager:edit.html.twig */
class __TwigTemplate_ecbd24a0535080e0a7fee1ea30b2569ec531bf5eff134ac585ce6340da707546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig", "YallaWebsiteBackendBundle:AdsManager:edit.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3f824c72277435063a8aae2e8d1aa5d118074ad0eb597b73fd0e2c10afe2689 = $this->env->getExtension("native_profiler");
        $__internal_b3f824c72277435063a8aae2e8d1aa5d118074ad0eb597b73fd0e2c10afe2689->enter($__internal_b3f824c72277435063a8aae2e8d1aa5d118074ad0eb597b73fd0e2c10afe2689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:AdsManager:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f824c72277435063a8aae2e8d1aa5d118074ad0eb597b73fd0e2c10afe2689->leave($__internal_b3f824c72277435063a8aae2e8d1aa5d118074ad0eb597b73fd0e2c10afe2689_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_93a5d889584ff6ef6d40e9515f33727e498f128d34c58f11894bf99aa2110407 = $this->env->getExtension("native_profiler");
        $__internal_93a5d889584ff6ef6d40e9515f33727e498f128d34c58f11894bf99aa2110407->enter($__internal_93a5d889584ff6ef6d40e9515f33727e498f128d34c58f11894bf99aa2110407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        if ((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) {
            // line 4
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "data", array()), 0, array(), "array"), "link", array(), "array"), "html", null, true);
            echo "\" width=\"150\" height=\"100\"/>
";
        }
        // line 6
        echo "

<form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ads_manager_save", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"\" method=\"POST\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
</form>
";
        
        $__internal_93a5d889584ff6ef6d40e9515f33727e498f128d34c58f11894bf99aa2110407->leave($__internal_93a5d889584ff6ef6d40e9515f33727e498f128d34c58f11894bf99aa2110407_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:AdsManager:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 6,  42 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig" %}*/
/* {% block controlleraction  %}*/
/* {% if content %}*/
/*     <img src="{{ content.data[0]['link'] }}" width="150" height="100"/>*/
/* {% endif %}*/
/* */
/* */
/* <form enctype="multipart/form-data" action="{{ path('backend_ads_manager_save',  {'id': id})}}" class="" method="POST">*/
/*     {{ form_widget(form) }}*/
/*     {{ form_errors(form) }}*/
/*     {{ form_row(form._token) }}*/
/*     <input type="submit" class="btn btn-default" value="Save"/>*/
/* </form>*/
/* {% endblock%}*/
