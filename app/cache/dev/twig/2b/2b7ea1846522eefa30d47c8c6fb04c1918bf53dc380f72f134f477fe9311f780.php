<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_abfb999c1eab3f6f79accacb9c03a5ce095746c17e93bf02b949d740be640e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c3df6c140eb5213dbea1c72fcbc00ba0676a6c5f54bddcda98b679347e2a5841 = $this->env->getExtension("native_profiler");
        $__internal_c3df6c140eb5213dbea1c72fcbc00ba0676a6c5f54bddcda98b679347e2a5841->enter($__internal_c3df6c140eb5213dbea1c72fcbc00ba0676a6c5f54bddcda98b679347e2a5841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3df6c140eb5213dbea1c72fcbc00ba0676a6c5f54bddcda98b679347e2a5841->leave($__internal_c3df6c140eb5213dbea1c72fcbc00ba0676a6c5f54bddcda98b679347e2a5841_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db7d49e576ac9e24748b73fc86938dc9362751589ebd290ac64bd595da8d174d = $this->env->getExtension("native_profiler");
        $__internal_db7d49e576ac9e24748b73fc86938dc9362751589ebd290ac64bd595da8d174d->enter($__internal_db7d49e576ac9e24748b73fc86938dc9362751589ebd290ac64bd595da8d174d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_db7d49e576ac9e24748b73fc86938dc9362751589ebd290ac64bd595da8d174d->leave($__internal_db7d49e576ac9e24748b73fc86938dc9362751589ebd290ac64bd595da8d174d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
