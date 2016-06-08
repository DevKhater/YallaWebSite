<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_9803cc104259dac2b864537c0c7fea774df774d60dbb891b98031d107fad778f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e57efb3f4a520f53c88c2f1b01e26e79ff30cba4dfe478ae5d7593b4cd30e277 = $this->env->getExtension("native_profiler");
        $__internal_e57efb3f4a520f53c88c2f1b01e26e79ff30cba4dfe478ae5d7593b4cd30e277->enter($__internal_e57efb3f4a520f53c88c2f1b01e26e79ff30cba4dfe478ae5d7593b4cd30e277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e57efb3f4a520f53c88c2f1b01e26e79ff30cba4dfe478ae5d7593b4cd30e277->leave($__internal_e57efb3f4a520f53c88c2f1b01e26e79ff30cba4dfe478ae5d7593b4cd30e277_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b604fdd18cfb29526089837fbb8522828051de914d02456d42131191defb396 = $this->env->getExtension("native_profiler");
        $__internal_7b604fdd18cfb29526089837fbb8522828051de914d02456d42131191defb396->enter($__internal_7b604fdd18cfb29526089837fbb8522828051de914d02456d42131191defb396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7b604fdd18cfb29526089837fbb8522828051de914d02456d42131191defb396->leave($__internal_7b604fdd18cfb29526089837fbb8522828051de914d02456d42131191defb396_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10f67eba0d531ec55db4ea2639b6ca9e6e1b771ca61cd9f66c5272e8e44fe25a = $this->env->getExtension("native_profiler");
        $__internal_10f67eba0d531ec55db4ea2639b6ca9e6e1b771ca61cd9f66c5272e8e44fe25a->enter($__internal_10f67eba0d531ec55db4ea2639b6ca9e6e1b771ca61cd9f66c5272e8e44fe25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_10f67eba0d531ec55db4ea2639b6ca9e6e1b771ca61cd9f66c5272e8e44fe25a->leave($__internal_10f67eba0d531ec55db4ea2639b6ca9e6e1b771ca61cd9f66c5272e8e44fe25a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_979f92c772d5bb0573d032a25a199378623d76f95d7a28f5f5e5b252cf83c598 = $this->env->getExtension("native_profiler");
        $__internal_979f92c772d5bb0573d032a25a199378623d76f95d7a28f5f5e5b252cf83c598->enter($__internal_979f92c772d5bb0573d032a25a199378623d76f95d7a28f5f5e5b252cf83c598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_979f92c772d5bb0573d032a25a199378623d76f95d7a28f5f5e5b252cf83c598->leave($__internal_979f92c772d5bb0573d032a25a199378623d76f95d7a28f5f5e5b252cf83c598_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_52a8a1b278238ad241fb575182c94dcfe28b2782c8fe9c549ed08b88d3e4a1df = $this->env->getExtension("native_profiler");
        $__internal_52a8a1b278238ad241fb575182c94dcfe28b2782c8fe9c549ed08b88d3e4a1df->enter($__internal_52a8a1b278238ad241fb575182c94dcfe28b2782c8fe9c549ed08b88d3e4a1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_52a8a1b278238ad241fb575182c94dcfe28b2782c8fe9c549ed08b88d3e4a1df->leave($__internal_52a8a1b278238ad241fb575182c94dcfe28b2782c8fe9c549ed08b88d3e4a1df_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
