<?php

/* @YallaWebsiteFrontendBundle/views/Ads/_image.html.twig */
class __TwigTemplate_3a7cc71a93a6d5ffb6c1b5af3dfc6e0faa458fbc62662a709121561cf66c5955 extends Twig_Template
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
        $__internal_0d93997eb8b70d6e30aea5c5e709465cbc4eb91bcc5079d6ea86fdefb13b822f = $this->env->getExtension("native_profiler");
        $__internal_0d93997eb8b70d6e30aea5c5e709465cbc4eb91bcc5079d6ea86fdefb13b822f->enter($__internal_0d93997eb8b70d6e30aea5c5e709465cbc4eb91bcc5079d6ea86fdefb13b822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@YallaWebsiteFrontendBundle/views/Ads/_image.html.twig"));

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
        
        $__internal_0d93997eb8b70d6e30aea5c5e709465cbc4eb91bcc5079d6ea86fdefb13b822f->leave($__internal_0d93997eb8b70d6e30aea5c5e709465cbc4eb91bcc5079d6ea86fdefb13b822f_prof);

    }

    public function getTemplateName()
    {
        return "@YallaWebsiteFrontendBundle/views/Ads/_image.html.twig";
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
