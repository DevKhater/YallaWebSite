<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0d05ed6280671eeba43b7373be1b45a5a1a533f57e41111323cc2d72852d2f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_dbd6b08277dc959f2b831fde5134b1e5ff43716680ab6ba5d1b65da6fb6d9fdb = $this->env->getExtension("native_profiler");
        $__internal_dbd6b08277dc959f2b831fde5134b1e5ff43716680ab6ba5d1b65da6fb6d9fdb->enter($__internal_dbd6b08277dc959f2b831fde5134b1e5ff43716680ab6ba5d1b65da6fb6d9fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd6b08277dc959f2b831fde5134b1e5ff43716680ab6ba5d1b65da6fb6d9fdb->leave($__internal_dbd6b08277dc959f2b831fde5134b1e5ff43716680ab6ba5d1b65da6fb6d9fdb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb2ab52e79cd523c7b081d7c3ce50121f1fd6dca5b01ad5c3bd9e3aaf2a66642 = $this->env->getExtension("native_profiler");
        $__internal_fb2ab52e79cd523c7b081d7c3ce50121f1fd6dca5b01ad5c3bd9e3aaf2a66642->enter($__internal_fb2ab52e79cd523c7b081d7c3ce50121f1fd6dca5b01ad5c3bd9e3aaf2a66642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fb2ab52e79cd523c7b081d7c3ce50121f1fd6dca5b01ad5c3bd9e3aaf2a66642->leave($__internal_fb2ab52e79cd523c7b081d7c3ce50121f1fd6dca5b01ad5c3bd9e3aaf2a66642_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
