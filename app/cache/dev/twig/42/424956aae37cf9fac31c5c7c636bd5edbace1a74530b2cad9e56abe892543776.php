<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bef95dedc631aea33224ac5a55d22f9a2557f7208a94f5aeaaba2dec5fdb9c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5ce98c86b42bc0a4de3a7d7eaa7ec103321b08eedaa23cc4a2604b76b0222102 = $this->env->getExtension("native_profiler");
        $__internal_5ce98c86b42bc0a4de3a7d7eaa7ec103321b08eedaa23cc4a2604b76b0222102->enter($__internal_5ce98c86b42bc0a4de3a7d7eaa7ec103321b08eedaa23cc4a2604b76b0222102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ce98c86b42bc0a4de3a7d7eaa7ec103321b08eedaa23cc4a2604b76b0222102->leave($__internal_5ce98c86b42bc0a4de3a7d7eaa7ec103321b08eedaa23cc4a2604b76b0222102_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0998a0cc6886c03bf127a10ba85810522d3d0b659023734ae33d7f9e338eaf94 = $this->env->getExtension("native_profiler");
        $__internal_0998a0cc6886c03bf127a10ba85810522d3d0b659023734ae33d7f9e338eaf94->enter($__internal_0998a0cc6886c03bf127a10ba85810522d3d0b659023734ae33d7f9e338eaf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0998a0cc6886c03bf127a10ba85810522d3d0b659023734ae33d7f9e338eaf94->leave($__internal_0998a0cc6886c03bf127a10ba85810522d3d0b659023734ae33d7f9e338eaf94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
