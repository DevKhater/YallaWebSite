<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_19a9cae8e8bbed5c2e5a106fc3a76b018da72e8940995239950bbe17bd2d89bf extends Twig_Template
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
        $__internal_c7dd9e1ee923ded070193bef50cdc560e0ddcbacf408facc400d8309e7449f51 = $this->env->getExtension("native_profiler");
        $__internal_c7dd9e1ee923ded070193bef50cdc560e0ddcbacf408facc400d8309e7449f51->enter($__internal_c7dd9e1ee923ded070193bef50cdc560e0ddcbacf408facc400d8309e7449f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7dd9e1ee923ded070193bef50cdc560e0ddcbacf408facc400d8309e7449f51->leave($__internal_c7dd9e1ee923ded070193bef50cdc560e0ddcbacf408facc400d8309e7449f51_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2f98739362a1d8caa5b96577996f837abf5ae9300db922ad1cd27d05973663a = $this->env->getExtension("native_profiler");
        $__internal_d2f98739362a1d8caa5b96577996f837abf5ae9300db922ad1cd27d05973663a->enter($__internal_d2f98739362a1d8caa5b96577996f837abf5ae9300db922ad1cd27d05973663a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d2f98739362a1d8caa5b96577996f837abf5ae9300db922ad1cd27d05973663a->leave($__internal_d2f98739362a1d8caa5b96577996f837abf5ae9300db922ad1cd27d05973663a_prof);

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
