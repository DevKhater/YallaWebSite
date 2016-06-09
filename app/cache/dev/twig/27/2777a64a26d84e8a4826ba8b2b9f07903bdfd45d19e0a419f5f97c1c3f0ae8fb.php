<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_398e66d6ec7d20ef4478ea26b29092edd3ad6a2f2151a6c7c6c3a352d96c9934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5e9f798168273f6bd38cb4e9ca4ae4b60ed3458bf7d03c96f84b7c45bb9e4bb8 = $this->env->getExtension("native_profiler");
        $__internal_5e9f798168273f6bd38cb4e9ca4ae4b60ed3458bf7d03c96f84b7c45bb9e4bb8->enter($__internal_5e9f798168273f6bd38cb4e9ca4ae4b60ed3458bf7d03c96f84b7c45bb9e4bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9f798168273f6bd38cb4e9ca4ae4b60ed3458bf7d03c96f84b7c45bb9e4bb8->leave($__internal_5e9f798168273f6bd38cb4e9ca4ae4b60ed3458bf7d03c96f84b7c45bb9e4bb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebdba91e427ec4c99268fcc77021ae32793ee1736cbcb440214e1f5769c33640 = $this->env->getExtension("native_profiler");
        $__internal_ebdba91e427ec4c99268fcc77021ae32793ee1736cbcb440214e1f5769c33640->enter($__internal_ebdba91e427ec4c99268fcc77021ae32793ee1736cbcb440214e1f5769c33640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ebdba91e427ec4c99268fcc77021ae32793ee1736cbcb440214e1f5769c33640->leave($__internal_ebdba91e427ec4c99268fcc77021ae32793ee1736cbcb440214e1f5769c33640_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
