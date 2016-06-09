<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f17195fd7956bce17dcda08cfd601872b7c81fa4c0e70a5e1df608e76637fd8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5eec336e78acbc0d6564de32df7537cef364c8794adb2388a2034fb25642b5f9 = $this->env->getExtension("native_profiler");
        $__internal_5eec336e78acbc0d6564de32df7537cef364c8794adb2388a2034fb25642b5f9->enter($__internal_5eec336e78acbc0d6564de32df7537cef364c8794adb2388a2034fb25642b5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eec336e78acbc0d6564de32df7537cef364c8794adb2388a2034fb25642b5f9->leave($__internal_5eec336e78acbc0d6564de32df7537cef364c8794adb2388a2034fb25642b5f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33a663ca0c58fa05c6f0cb664e9a5a0d3450a2181d98e3b24c8e0211bc1e30b7 = $this->env->getExtension("native_profiler");
        $__internal_33a663ca0c58fa05c6f0cb664e9a5a0d3450a2181d98e3b24c8e0211bc1e30b7->enter($__internal_33a663ca0c58fa05c6f0cb664e9a5a0d3450a2181d98e3b24c8e0211bc1e30b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_33a663ca0c58fa05c6f0cb664e9a5a0d3450a2181d98e3b24c8e0211bc1e30b7->leave($__internal_33a663ca0c58fa05c6f0cb664e9a5a0d3450a2181d98e3b24c8e0211bc1e30b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
