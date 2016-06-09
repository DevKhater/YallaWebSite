<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1e62939d11cab4ed5c737001fb844826ece12950121ad35cf2a89a7df3dd746f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0a2e0447c15467295adfe4f4ea48cedba4d7648084e0892a01915db59fbc0d7b = $this->env->getExtension("native_profiler");
        $__internal_0a2e0447c15467295adfe4f4ea48cedba4d7648084e0892a01915db59fbc0d7b->enter($__internal_0a2e0447c15467295adfe4f4ea48cedba4d7648084e0892a01915db59fbc0d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a2e0447c15467295adfe4f4ea48cedba4d7648084e0892a01915db59fbc0d7b->leave($__internal_0a2e0447c15467295adfe4f4ea48cedba4d7648084e0892a01915db59fbc0d7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e642c7471ffee872ae8f4b477f8beb8ccb10d197021d21360f94339779025483 = $this->env->getExtension("native_profiler");
        $__internal_e642c7471ffee872ae8f4b477f8beb8ccb10d197021d21360f94339779025483->enter($__internal_e642c7471ffee872ae8f4b477f8beb8ccb10d197021d21360f94339779025483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e642c7471ffee872ae8f4b477f8beb8ccb10d197021d21360f94339779025483->leave($__internal_e642c7471ffee872ae8f4b477f8beb8ccb10d197021d21360f94339779025483_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
