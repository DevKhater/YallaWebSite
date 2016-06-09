<?php

/* YallaWebsiteBackendBundle:AdsManager:edit.html.twig */
class __TwigTemplate_37db29558d9fa01f8e1a69ef13fbd8a661749b7af54eb7b8f55a0969f0a550c4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 3
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 4
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "data", array()), 0, array(), "array"), "link", array(), "array"), "html", null, true);
            echo "\" width=\"150\" height=\"100\"/>
";
        }
        // line 6
        echo "

<form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ads_manager_save", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\" class=\"\" method=\"POST\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
</form>
";
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
        return array (  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 6,  33 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
