<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_2176727306575653a8f17f928dc87fb90dbb3c4c10439ef8e18b923d58679f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_a6644e4d150ad8de652d3938d5a70d421284fb7e3c890a783aaf2eb0eae32d5d = $this->env->getExtension("native_profiler");
        $__internal_a6644e4d150ad8de652d3938d5a70d421284fb7e3c890a783aaf2eb0eae32d5d->enter($__internal_a6644e4d150ad8de652d3938d5a70d421284fb7e3c890a783aaf2eb0eae32d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6644e4d150ad8de652d3938d5a70d421284fb7e3c890a783aaf2eb0eae32d5d->leave($__internal_a6644e4d150ad8de652d3938d5a70d421284fb7e3c890a783aaf2eb0eae32d5d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ff57d217aabac3788f71d8b387e34445872ff71e4c32c8cf30c950859e37a2a = $this->env->getExtension("native_profiler");
        $__internal_0ff57d217aabac3788f71d8b387e34445872ff71e4c32c8cf30c950859e37a2a->enter($__internal_0ff57d217aabac3788f71d8b387e34445872ff71e4c32c8cf30c950859e37a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0ff57d217aabac3788f71d8b387e34445872ff71e4c32c8cf30c950859e37a2a->leave($__internal_0ff57d217aabac3788f71d8b387e34445872ff71e4c32c8cf30c950859e37a2a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
