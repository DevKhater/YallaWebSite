<?php

/* YallaWebsiteFrontendBundle:Ads:_image.html.twig */
class __TwigTemplate_5a9182534d7f4a855ebf3902045d14bd08e094728de47298581212167d473aa5 extends Twig_Template
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
        $__internal_c0ba8ffec3832ae21c1afc6e7b0a496f637c5a992e67aefde791a1526b4b4f73 = $this->env->getExtension("native_profiler");
        $__internal_c0ba8ffec3832ae21c1afc6e7b0a496f637c5a992e67aefde791a1526b4b4f73->enter($__internal_c0ba8ffec3832ae21c1afc6e7b0a496f637c5a992e67aefde791a1526b4b4f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Ads:_image.html.twig"));

        // line 2
        echo "<div class=\"epub\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), "#")) : ("#")), "html", null, true);
        echo "\" class=\"epub__link\" target=\"_blank\">
    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "http://cdn.domain.tld/path/to/default.png")) : ("http://cdn.domain.tld/path/to/default.png"))), "html", null, true);
        echo "\" 
         alt=\"";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description", array()), "Default description")) : ("Default description")), "html", null, true);
        echo "\" 
         class=\"epub__image img-responsive\" />
  </a>
</div>";
        
        $__internal_c0ba8ffec3832ae21c1afc6e7b0a496f637c5a992e67aefde791a1526b4b4f73->leave($__internal_c0ba8ffec3832ae21c1afc6e7b0a496f637c5a992e67aefde791a1526b4b4f73_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Ads:_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# _image.html.twig #}*/
/* <div class="epub">*/
/*     <a href="{{ item.target|default('#') }}" class="epub__link" target="_blank">*/
/*     <img src="{{ asset(item.link|default('http://cdn.domain.tld/path/to/default.png')) }}" */
/*          alt="{{ item.description|default('Default description') }}" */
/*          class="epub__image img-responsive" />*/
/*   </a>*/
/* </div>*/
