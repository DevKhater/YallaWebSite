<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_cb45cedabd58fe7e7c08326b12ebeacbb36879abdd203f5e9da53a6b8155e643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_442675372ae37ec803c1f5d110b774ea9c599ad5bcd5313589dec2f1c613ed18 = $this->env->getExtension("native_profiler");
        $__internal_442675372ae37ec803c1f5d110b774ea9c599ad5bcd5313589dec2f1c613ed18->enter($__internal_442675372ae37ec803c1f5d110b774ea9c599ad5bcd5313589dec2f1c613ed18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442675372ae37ec803c1f5d110b774ea9c599ad5bcd5313589dec2f1c613ed18->leave($__internal_442675372ae37ec803c1f5d110b774ea9c599ad5bcd5313589dec2f1c613ed18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56d7a6ec9fb79db354403110a1c13ef468d128f5c44a4a1387aab5c2b7eab5aa = $this->env->getExtension("native_profiler");
        $__internal_56d7a6ec9fb79db354403110a1c13ef468d128f5c44a4a1387aab5c2b7eab5aa->enter($__internal_56d7a6ec9fb79db354403110a1c13ef468d128f5c44a4a1387aab5c2b7eab5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_56d7a6ec9fb79db354403110a1c13ef468d128f5c44a4a1387aab5c2b7eab5aa->leave($__internal_56d7a6ec9fb79db354403110a1c13ef468d128f5c44a4a1387aab5c2b7eab5aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
