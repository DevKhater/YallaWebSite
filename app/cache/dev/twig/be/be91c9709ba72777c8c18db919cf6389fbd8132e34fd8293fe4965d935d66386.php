<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1a743e1e1d21bb09285bc38db6075eb5093ab3e1ab9964e34afef34bb08fae5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0d48c92bf9c19e42e5a4332696eab0ea60bbccbbc08e9941f9204bbdcfd74d4c = $this->env->getExtension("native_profiler");
        $__internal_0d48c92bf9c19e42e5a4332696eab0ea60bbccbbc08e9941f9204bbdcfd74d4c->enter($__internal_0d48c92bf9c19e42e5a4332696eab0ea60bbccbbc08e9941f9204bbdcfd74d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d48c92bf9c19e42e5a4332696eab0ea60bbccbbc08e9941f9204bbdcfd74d4c->leave($__internal_0d48c92bf9c19e42e5a4332696eab0ea60bbccbbc08e9941f9204bbdcfd74d4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b99b0161331c517d4a68eb39af096f96a2f62772ec236086605f98003296ecd3 = $this->env->getExtension("native_profiler");
        $__internal_b99b0161331c517d4a68eb39af096f96a2f62772ec236086605f98003296ecd3->enter($__internal_b99b0161331c517d4a68eb39af096f96a2f62772ec236086605f98003296ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b99b0161331c517d4a68eb39af096f96a2f62772ec236086605f98003296ecd3->leave($__internal_b99b0161331c517d4a68eb39af096f96a2f62772ec236086605f98003296ecd3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
