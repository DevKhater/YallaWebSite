<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_af7587d8d82a160664cf1b7e965000cdb3ad09cb347f9ef6e9c8311ce3e77f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_434d999004eefb1863b2cb4a8cabd6d16d21c0c4b3a9d451aafb79321e49b1a7 = $this->env->getExtension("native_profiler");
        $__internal_434d999004eefb1863b2cb4a8cabd6d16d21c0c4b3a9d451aafb79321e49b1a7->enter($__internal_434d999004eefb1863b2cb4a8cabd6d16d21c0c4b3a9d451aafb79321e49b1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_434d999004eefb1863b2cb4a8cabd6d16d21c0c4b3a9d451aafb79321e49b1a7->leave($__internal_434d999004eefb1863b2cb4a8cabd6d16d21c0c4b3a9d451aafb79321e49b1a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5deee8c39cc95f6af71ea3efb56b2c762e4c09a593a5d80f94d30ab629cbc0f9 = $this->env->getExtension("native_profiler");
        $__internal_5deee8c39cc95f6af71ea3efb56b2c762e4c09a593a5d80f94d30ab629cbc0f9->enter($__internal_5deee8c39cc95f6af71ea3efb56b2c762e4c09a593a5d80f94d30ab629cbc0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5deee8c39cc95f6af71ea3efb56b2c762e4c09a593a5d80f94d30ab629cbc0f9->leave($__internal_5deee8c39cc95f6af71ea3efb56b2c762e4c09a593a5d80f94d30ab629cbc0f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
