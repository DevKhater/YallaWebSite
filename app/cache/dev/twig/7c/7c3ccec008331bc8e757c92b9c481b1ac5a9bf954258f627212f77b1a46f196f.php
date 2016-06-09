<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_58c5d7dedde919f257bd1776d235ea06337d517f24a2f68e0216cfb07e8158fc extends Twig_Template
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
        $__internal_bda1b1fd86509deb779f5b90a171c63777f912e14c0bf2773b38ee246590d421 = $this->env->getExtension("native_profiler");
        $__internal_bda1b1fd86509deb779f5b90a171c63777f912e14c0bf2773b38ee246590d421->enter($__internal_bda1b1fd86509deb779f5b90a171c63777f912e14c0bf2773b38ee246590d421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda1b1fd86509deb779f5b90a171c63777f912e14c0bf2773b38ee246590d421->leave($__internal_bda1b1fd86509deb779f5b90a171c63777f912e14c0bf2773b38ee246590d421_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7833f9ab4763ac7c04fb614cb14a50a26d901fdfdbd8d8d482a7966b7ba6d7dd = $this->env->getExtension("native_profiler");
        $__internal_7833f9ab4763ac7c04fb614cb14a50a26d901fdfdbd8d8d482a7966b7ba6d7dd->enter($__internal_7833f9ab4763ac7c04fb614cb14a50a26d901fdfdbd8d8d482a7966b7ba6d7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7833f9ab4763ac7c04fb614cb14a50a26d901fdfdbd8d8d482a7966b7ba6d7dd->leave($__internal_7833f9ab4763ac7c04fb614cb14a50a26d901fdfdbd8d8d482a7966b7ba6d7dd_prof);

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
