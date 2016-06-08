<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_9147098f28075b04d27e784c4e4d7393b2fcde070126b36166d1e1c04c71f3da extends Twig_Template
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
        $__internal_db730b04018223d3919d9c88824c602a5639e10821799957c2138c02aed8227f = $this->env->getExtension("native_profiler");
        $__internal_db730b04018223d3919d9c88824c602a5639e10821799957c2138c02aed8227f->enter($__internal_db730b04018223d3919d9c88824c602a5639e10821799957c2138c02aed8227f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db730b04018223d3919d9c88824c602a5639e10821799957c2138c02aed8227f->leave($__internal_db730b04018223d3919d9c88824c602a5639e10821799957c2138c02aed8227f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c18a769e9aacb97ce86529e159fce1dc1cfb1b1e1ce4a6868a685038277b7f67 = $this->env->getExtension("native_profiler");
        $__internal_c18a769e9aacb97ce86529e159fce1dc1cfb1b1e1ce4a6868a685038277b7f67->enter($__internal_c18a769e9aacb97ce86529e159fce1dc1cfb1b1e1ce4a6868a685038277b7f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c18a769e9aacb97ce86529e159fce1dc1cfb1b1e1ce4a6868a685038277b7f67->leave($__internal_c18a769e9aacb97ce86529e159fce1dc1cfb1b1e1ce4a6868a685038277b7f67_prof);

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
