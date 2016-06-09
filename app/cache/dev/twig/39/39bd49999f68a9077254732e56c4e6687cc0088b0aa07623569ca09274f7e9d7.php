<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_a80a7ef819cee9211504f758f5993256f78997e93af30f9d03c5ae7687f5260a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa9d20e999b10e708beda121d56f6ffe1e65f569357cf0891ad7bafccdfa603 = $this->env->getExtension("native_profiler");
        $__internal_cfa9d20e999b10e708beda121d56f6ffe1e65f569357cf0891ad7bafccdfa603->enter($__internal_cfa9d20e999b10e708beda121d56f6ffe1e65f569357cf0891ad7bafccdfa603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfa9d20e999b10e708beda121d56f6ffe1e65f569357cf0891ad7bafccdfa603->leave($__internal_cfa9d20e999b10e708beda121d56f6ffe1e65f569357cf0891ad7bafccdfa603_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_4e72d691e6a82a91a395ac98d63aadc94ff5ac71ea68981d1047f72adbd7f4e0 = $this->env->getExtension("native_profiler");
        $__internal_4e72d691e6a82a91a395ac98d63aadc94ff5ac71ea68981d1047f72adbd7f4e0->enter($__internal_4e72d691e6a82a91a395ac98d63aadc94ff5ac71ea68981d1047f72adbd7f4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_4e72d691e6a82a91a395ac98d63aadc94ff5ac71ea68981d1047f72adbd7f4e0->leave($__internal_4e72d691e6a82a91a395ac98d63aadc94ff5ac71ea68981d1047f72adbd7f4e0_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>*/
/* {% endblock hwi_oauth_content %}*/
/* */
