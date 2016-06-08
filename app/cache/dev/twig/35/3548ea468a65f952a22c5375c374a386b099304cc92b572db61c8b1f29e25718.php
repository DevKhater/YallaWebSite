<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_47ead70940deeb5d2a4a6528821b5b834fdc29d59ee13ee2d36d9714cfe8d2c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a748661492c6923240b21b6270f36aa57037f75cbb94cae1209c9c493aede0da = $this->env->getExtension("native_profiler");
        $__internal_a748661492c6923240b21b6270f36aa57037f75cbb94cae1209c9c493aede0da->enter($__internal_a748661492c6923240b21b6270f36aa57037f75cbb94cae1209c9c493aede0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a748661492c6923240b21b6270f36aa57037f75cbb94cae1209c9c493aede0da->leave($__internal_a748661492c6923240b21b6270f36aa57037f75cbb94cae1209c9c493aede0da_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85c918871f3f50d44dd7fe9608a1a3ad911e0ca07a96fdd064789d216ec06c36 = $this->env->getExtension("native_profiler");
        $__internal_85c918871f3f50d44dd7fe9608a1a3ad911e0ca07a96fdd064789d216ec06c36->enter($__internal_85c918871f3f50d44dd7fe9608a1a3ad911e0ca07a96fdd064789d216ec06c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_85c918871f3f50d44dd7fe9608a1a3ad911e0ca07a96fdd064789d216ec06c36->leave($__internal_85c918871f3f50d44dd7fe9608a1a3ad911e0ca07a96fdd064789d216ec06c36_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
