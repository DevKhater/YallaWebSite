<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2deeade643622e441f559777885c2cb58453793cd477c70f8bf1a10dfaa184da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_63a2db139b55ecb7b6ea63b76046ffcc9bb7ae00fd7c8bfabbb9c005bb609882 = $this->env->getExtension("native_profiler");
        $__internal_63a2db139b55ecb7b6ea63b76046ffcc9bb7ae00fd7c8bfabbb9c005bb609882->enter($__internal_63a2db139b55ecb7b6ea63b76046ffcc9bb7ae00fd7c8bfabbb9c005bb609882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a2db139b55ecb7b6ea63b76046ffcc9bb7ae00fd7c8bfabbb9c005bb609882->leave($__internal_63a2db139b55ecb7b6ea63b76046ffcc9bb7ae00fd7c8bfabbb9c005bb609882_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ec6563e7aa8fb8fadc373af2dab8bb0ddc0e5a126b33731a191ad1f3ae0a18a = $this->env->getExtension("native_profiler");
        $__internal_7ec6563e7aa8fb8fadc373af2dab8bb0ddc0e5a126b33731a191ad1f3ae0a18a->enter($__internal_7ec6563e7aa8fb8fadc373af2dab8bb0ddc0e5a126b33731a191ad1f3ae0a18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7ec6563e7aa8fb8fadc373af2dab8bb0ddc0e5a126b33731a191ad1f3ae0a18a->leave($__internal_7ec6563e7aa8fb8fadc373af2dab8bb0ddc0e5a126b33731a191ad1f3ae0a18a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
