<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cb417c06b73a4777e0decb6900cd527c1c6147aa337a90bcfb9ec0280fe2934e extends Twig_Template
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
        $__internal_b0fc80732918e34053df24758df4ea8a6b91be0aa34fccba1aa09a81737b3fe7 = $this->env->getExtension("native_profiler");
        $__internal_b0fc80732918e34053df24758df4ea8a6b91be0aa34fccba1aa09a81737b3fe7->enter($__internal_b0fc80732918e34053df24758df4ea8a6b91be0aa34fccba1aa09a81737b3fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0fc80732918e34053df24758df4ea8a6b91be0aa34fccba1aa09a81737b3fe7->leave($__internal_b0fc80732918e34053df24758df4ea8a6b91be0aa34fccba1aa09a81737b3fe7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11c4b221e24228e6a75460faff841e0e464d9d5d178c1f510e83e054329a4ae3 = $this->env->getExtension("native_profiler");
        $__internal_11c4b221e24228e6a75460faff841e0e464d9d5d178c1f510e83e054329a4ae3->enter($__internal_11c4b221e24228e6a75460faff841e0e464d9d5d178c1f510e83e054329a4ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_11c4b221e24228e6a75460faff841e0e464d9d5d178c1f510e83e054329a4ae3->leave($__internal_11c4b221e24228e6a75460faff841e0e464d9d5d178c1f510e83e054329a4ae3_prof);

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
