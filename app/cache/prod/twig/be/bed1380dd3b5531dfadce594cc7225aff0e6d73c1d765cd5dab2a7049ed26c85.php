<?php

/* YallaWebsiteFrontendBundle:Ads:_image.html.twig */
class __TwigTemplate_8a761c3cfa2916db9013fcc5b47e65dd5ff7529dac727b23f829fc9c4eac3727 extends Twig_Template
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
        return array (  30 => 5,  26 => 4,  22 => 3,  19 => 2,);
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
