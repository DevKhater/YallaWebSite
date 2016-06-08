<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e2cc8fa03ffd55374a6c267546762822a22c0d5466e7b67c705cbcf4b0b51eee extends Twig_Template
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
        $__internal_c38e0ce0d3a321876623c27cc3ca27a1f820d6d690058fe3fa2d3aad34d9ee7a = $this->env->getExtension("native_profiler");
        $__internal_c38e0ce0d3a321876623c27cc3ca27a1f820d6d690058fe3fa2d3aad34d9ee7a->enter($__internal_c38e0ce0d3a321876623c27cc3ca27a1f820d6d690058fe3fa2d3aad34d9ee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c38e0ce0d3a321876623c27cc3ca27a1f820d6d690058fe3fa2d3aad34d9ee7a->leave($__internal_c38e0ce0d3a321876623c27cc3ca27a1f820d6d690058fe3fa2d3aad34d9ee7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10bf661f2df0cf93e6014aa36f7fe0e4f759effa9517c8585e775484874e3253 = $this->env->getExtension("native_profiler");
        $__internal_10bf661f2df0cf93e6014aa36f7fe0e4f759effa9517c8585e775484874e3253->enter($__internal_10bf661f2df0cf93e6014aa36f7fe0e4f759effa9517c8585e775484874e3253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_10bf661f2df0cf93e6014aa36f7fe0e4f759effa9517c8585e775484874e3253->leave($__internal_10bf661f2df0cf93e6014aa36f7fe0e4f759effa9517c8585e775484874e3253_prof);

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
