<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fdd576f0ccc8553366d91d47733672fabaa13b84916a2531c796196c701df4d4 extends Twig_Template
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
        $__internal_7f2893844754e7fce80bb62cd818ed0679362f6c5043713cde1ee38daa8fd327 = $this->env->getExtension("native_profiler");
        $__internal_7f2893844754e7fce80bb62cd818ed0679362f6c5043713cde1ee38daa8fd327->enter($__internal_7f2893844754e7fce80bb62cd818ed0679362f6c5043713cde1ee38daa8fd327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f2893844754e7fce80bb62cd818ed0679362f6c5043713cde1ee38daa8fd327->leave($__internal_7f2893844754e7fce80bb62cd818ed0679362f6c5043713cde1ee38daa8fd327_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdb84da5beef8c467bb4b027083dccceca7f0200300da80fae8fcaf64ef06076 = $this->env->getExtension("native_profiler");
        $__internal_bdb84da5beef8c467bb4b027083dccceca7f0200300da80fae8fcaf64ef06076->enter($__internal_bdb84da5beef8c467bb4b027083dccceca7f0200300da80fae8fcaf64ef06076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bdb84da5beef8c467bb4b027083dccceca7f0200300da80fae8fcaf64ef06076->leave($__internal_bdb84da5beef8c467bb4b027083dccceca7f0200300da80fae8fcaf64ef06076_prof);

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
