<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_8c2ea5e207deb588c0712fd7b8d837d237a31a1b80f7d3ce53c9ec1a6cf6601f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5f4e102d61264e4408c59e978b5475054c69f12518934125fe0bb7a5776a2233 = $this->env->getExtension("native_profiler");
        $__internal_5f4e102d61264e4408c59e978b5475054c69f12518934125fe0bb7a5776a2233->enter($__internal_5f4e102d61264e4408c59e978b5475054c69f12518934125fe0bb7a5776a2233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f4e102d61264e4408c59e978b5475054c69f12518934125fe0bb7a5776a2233->leave($__internal_5f4e102d61264e4408c59e978b5475054c69f12518934125fe0bb7a5776a2233_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eeea5e8b853409ae22f63a76edf70e3280b59bf3635bacaddbff1f07bf57690d = $this->env->getExtension("native_profiler");
        $__internal_eeea5e8b853409ae22f63a76edf70e3280b59bf3635bacaddbff1f07bf57690d->enter($__internal_eeea5e8b853409ae22f63a76edf70e3280b59bf3635bacaddbff1f07bf57690d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_eeea5e8b853409ae22f63a76edf70e3280b59bf3635bacaddbff1f07bf57690d->leave($__internal_eeea5e8b853409ae22f63a76edf70e3280b59bf3635bacaddbff1f07bf57690d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
