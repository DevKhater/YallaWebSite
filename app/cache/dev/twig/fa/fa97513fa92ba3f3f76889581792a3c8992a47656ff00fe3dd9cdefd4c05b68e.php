<?php

/* YallaWebsiteFrontendBundle:Ads:_image.html.twig */
class __TwigTemplate_50275303e9d51f8dd4938ceeae3e232647d8c506b82f4ccd6183571e0c6989f7 extends Twig_Template
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
        $__internal_4c1b99eae774b9110b1f865d3707c4a98b521cdf301a8ab3ef907c8c53bf19f3 = $this->env->getExtension("native_profiler");
        $__internal_4c1b99eae774b9110b1f865d3707c4a98b521cdf301a8ab3ef907c8c53bf19f3->enter($__internal_4c1b99eae774b9110b1f865d3707c4a98b521cdf301a8ab3ef907c8c53bf19f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Ads:_image.html.twig"));

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
        
        $__internal_4c1b99eae774b9110b1f865d3707c4a98b521cdf301a8ab3ef907c8c53bf19f3->leave($__internal_4c1b99eae774b9110b1f865d3707c4a98b521cdf301a8ab3ef907c8c53bf19f3_prof);

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
