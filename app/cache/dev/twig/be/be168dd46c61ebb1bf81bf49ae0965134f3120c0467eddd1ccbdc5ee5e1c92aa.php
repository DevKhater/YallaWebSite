<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_37b2dcb57394027a85c3ca110664564255c31035286f0347b15503d7168d1156 extends Twig_Template
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
        $__internal_6ce41d2e7d2b6a038eb98e3f1fb370d0e87cd8fee51805c1a127a4df98bff319 = $this->env->getExtension("native_profiler");
        $__internal_6ce41d2e7d2b6a038eb98e3f1fb370d0e87cd8fee51805c1a127a4df98bff319->enter($__internal_6ce41d2e7d2b6a038eb98e3f1fb370d0e87cd8fee51805c1a127a4df98bff319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce41d2e7d2b6a038eb98e3f1fb370d0e87cd8fee51805c1a127a4df98bff319->leave($__internal_6ce41d2e7d2b6a038eb98e3f1fb370d0e87cd8fee51805c1a127a4df98bff319_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4cda41bd051936fc152068669634b22178721cd492f3300170ef9ba36a35426 = $this->env->getExtension("native_profiler");
        $__internal_b4cda41bd051936fc152068669634b22178721cd492f3300170ef9ba36a35426->enter($__internal_b4cda41bd051936fc152068669634b22178721cd492f3300170ef9ba36a35426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b4cda41bd051936fc152068669634b22178721cd492f3300170ef9ba36a35426->leave($__internal_b4cda41bd051936fc152068669634b22178721cd492f3300170ef9ba36a35426_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c9ef9490388db18429808b25dfa7b372a7e11264bb9045f062075356a0bcc88 = $this->env->getExtension("native_profiler");
        $__internal_5c9ef9490388db18429808b25dfa7b372a7e11264bb9045f062075356a0bcc88->enter($__internal_5c9ef9490388db18429808b25dfa7b372a7e11264bb9045f062075356a0bcc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5c9ef9490388db18429808b25dfa7b372a7e11264bb9045f062075356a0bcc88->leave($__internal_5c9ef9490388db18429808b25dfa7b372a7e11264bb9045f062075356a0bcc88_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_30ce029b5e5c61b0215b4f14b058ad9b16e105106e3ff21c24806e72d8bb59ad = $this->env->getExtension("native_profiler");
        $__internal_30ce029b5e5c61b0215b4f14b058ad9b16e105106e3ff21c24806e72d8bb59ad->enter($__internal_30ce029b5e5c61b0215b4f14b058ad9b16e105106e3ff21c24806e72d8bb59ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30ce029b5e5c61b0215b4f14b058ad9b16e105106e3ff21c24806e72d8bb59ad->leave($__internal_30ce029b5e5c61b0215b4f14b058ad9b16e105106e3ff21c24806e72d8bb59ad_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_383ee4bc708bba33ea429a49e2bc8894d59b85e74ebff341c839a3cad02f4c63 = $this->env->getExtension("native_profiler");
        $__internal_383ee4bc708bba33ea429a49e2bc8894d59b85e74ebff341c839a3cad02f4c63->enter($__internal_383ee4bc708bba33ea429a49e2bc8894d59b85e74ebff341c839a3cad02f4c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_383ee4bc708bba33ea429a49e2bc8894d59b85e74ebff341c839a3cad02f4c63->leave($__internal_383ee4bc708bba33ea429a49e2bc8894d59b85e74ebff341c839a3cad02f4c63_prof);

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
