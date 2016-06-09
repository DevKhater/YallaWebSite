<?php

/* YallaWebsiteFrontendBundle::base.html.twig */
class __TwigTemplate_66eb1cc5232e7e1d3f043a57ed89543895ad13fd3eac621a780e9f0b2c609239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2755ac7e40b118a112bbd8edf985589c4a73ea2aef70003214e51d32dfd0c89 = $this->env->getExtension("native_profiler");
        $__internal_d2755ac7e40b118a112bbd8edf985589c4a73ea2aef70003214e51d32dfd0c89->enter($__internal_d2755ac7e40b118a112bbd8edf985589c4a73ea2aef70003214e51d32dfd0c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d2755ac7e40b118a112bbd8edf985589c4a73ea2aef70003214e51d32dfd0c89->leave($__internal_d2755ac7e40b118a112bbd8edf985589c4a73ea2aef70003214e51d32dfd0c89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceb5815a4d8f0c00ac64fac70729d9bc6fc1e0401ff65c50c6db3c00dfc64c01 = $this->env->getExtension("native_profiler");
        $__internal_ceb5815a4d8f0c00ac64fac70729d9bc6fc1e0401ff65c50c6db3c00dfc64c01->enter($__internal_ceb5815a4d8f0c00ac64fac70729d9bc6fc1e0401ff65c50c6db3c00dfc64c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ceb5815a4d8f0c00ac64fac70729d9bc6fc1e0401ff65c50c6db3c00dfc64c01->leave($__internal_ceb5815a4d8f0c00ac64fac70729d9bc6fc1e0401ff65c50c6db3c00dfc64c01_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b285f844d255c721a6461bd872c87d6a6c571daf04b70ba237ce4fe1587fdd2f = $this->env->getExtension("native_profiler");
        $__internal_b285f844d255c721a6461bd872c87d6a6c571daf04b70ba237ce4fe1587fdd2f->enter($__internal_b285f844d255c721a6461bd872c87d6a6c571daf04b70ba237ce4fe1587fdd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b285f844d255c721a6461bd872c87d6a6c571daf04b70ba237ce4fe1587fdd2f->leave($__internal_b285f844d255c721a6461bd872c87d6a6c571daf04b70ba237ce4fe1587fdd2f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_74f5086e7839e1b4f52da887e417a5d299579090a3b99d3e0becc58683baba09 = $this->env->getExtension("native_profiler");
        $__internal_74f5086e7839e1b4f52da887e417a5d299579090a3b99d3e0becc58683baba09->enter($__internal_74f5086e7839e1b4f52da887e417a5d299579090a3b99d3e0becc58683baba09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_74f5086e7839e1b4f52da887e417a5d299579090a3b99d3e0becc58683baba09->leave($__internal_74f5086e7839e1b4f52da887e417a5d299579090a3b99d3e0becc58683baba09_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd73461309aa4efaaf7c8ec16d2c6a3257b6826a87797d50b532d9a091917371 = $this->env->getExtension("native_profiler");
        $__internal_bd73461309aa4efaaf7c8ec16d2c6a3257b6826a87797d50b532d9a091917371->enter($__internal_bd73461309aa4efaaf7c8ec16d2c6a3257b6826a87797d50b532d9a091917371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd73461309aa4efaaf7c8ec16d2c6a3257b6826a87797d50b532d9a091917371->leave($__internal_bd73461309aa4efaaf7c8ec16d2c6a3257b6826a87797d50b532d9a091917371_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
