<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c4700b2ce4a5ac06ea1a4b5cdde8f11277e9d415d1833304ce44cb26a551ebf6 extends Twig_Template
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
        $__internal_d425b6e99b1e33c05cea80ffb19e0a565787881d411e2e43fc04fd61294a3f58 = $this->env->getExtension("native_profiler");
        $__internal_d425b6e99b1e33c05cea80ffb19e0a565787881d411e2e43fc04fd61294a3f58->enter($__internal_d425b6e99b1e33c05cea80ffb19e0a565787881d411e2e43fc04fd61294a3f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d425b6e99b1e33c05cea80ffb19e0a565787881d411e2e43fc04fd61294a3f58->leave($__internal_d425b6e99b1e33c05cea80ffb19e0a565787881d411e2e43fc04fd61294a3f58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_244862586c1ba0e7fec346bc26e0b028826ae0cda2f6a4b8170d5df6322a6f71 = $this->env->getExtension("native_profiler");
        $__internal_244862586c1ba0e7fec346bc26e0b028826ae0cda2f6a4b8170d5df6322a6f71->enter($__internal_244862586c1ba0e7fec346bc26e0b028826ae0cda2f6a4b8170d5df6322a6f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_244862586c1ba0e7fec346bc26e0b028826ae0cda2f6a4b8170d5df6322a6f71->leave($__internal_244862586c1ba0e7fec346bc26e0b028826ae0cda2f6a4b8170d5df6322a6f71_prof);

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
