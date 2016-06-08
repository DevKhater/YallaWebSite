<?php

/* YallaWebsiteBackendBundle:AdsManager:edit.html.twig */
class __TwigTemplate_5034e1dd77cd9a9b8761192abc49a762e62b002b30a1078e1bce5ea5520b1f18 extends Twig_Template
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
        $__internal_a889b04f8f804974ab897d983be057eaff85586777cc9c3d52de1c1ee39e72ad = $this->env->getExtension("native_profiler");
        $__internal_a889b04f8f804974ab897d983be057eaff85586777cc9c3d52de1c1ee39e72ad->enter($__internal_a889b04f8f804974ab897d983be057eaff85586777cc9c3d52de1c1ee39e72ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:AdsManager:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a889b04f8f804974ab897d983be057eaff85586777cc9c3d52de1c1ee39e72ad->leave($__internal_a889b04f8f804974ab897d983be057eaff85586777cc9c3d52de1c1ee39e72ad_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_f7cc1617e02c0dbc34893f856bd2eca3b544cee572620275c19c61797a82a8ae = $this->env->getExtension("native_profiler");
        $__internal_f7cc1617e02c0dbc34893f856bd2eca3b544cee572620275c19c61797a82a8ae->enter($__internal_f7cc1617e02c0dbc34893f856bd2eca3b544cee572620275c19c61797a82a8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_f7cc1617e02c0dbc34893f856bd2eca3b544cee572620275c19c61797a82a8ae->leave($__internal_f7cc1617e02c0dbc34893f856bd2eca3b544cee572620275c19c61797a82a8ae_prof);

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
