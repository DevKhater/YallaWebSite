<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b31d6147f07350bad43fc1f6e990d095549d839e996ea764b5f3c21f43e6d209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Profile:base_profile.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Profile:base_profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a54e097c4daf31489eb90e65c5667ea485dd9ca559dc0ba2ee6e5c374cd5892 = $this->env->getExtension("native_profiler");
        $__internal_9a54e097c4daf31489eb90e65c5667ea485dd9ca559dc0ba2ee6e5c374cd5892->enter($__internal_9a54e097c4daf31489eb90e65c5667ea485dd9ca559dc0ba2ee6e5c374cd5892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a54e097c4daf31489eb90e65c5667ea485dd9ca559dc0ba2ee6e5c374cd5892->leave($__internal_9a54e097c4daf31489eb90e65c5667ea485dd9ca559dc0ba2ee6e5c374cd5892_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77b06d4a88fbf8a9780105d3ab186b56930251807c44c289d2446275c47f3500 = $this->env->getExtension("native_profiler");
        $__internal_77b06d4a88fbf8a9780105d3ab186b56930251807c44c289d2446275c47f3500->enter($__internal_77b06d4a88fbf8a9780105d3ab186b56930251807c44c289d2446275c47f3500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    
";
        // line 6
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 6)->display($context);
        
        $__internal_77b06d4a88fbf8a9780105d3ab186b56930251807c44c289d2446275c47f3500->leave($__internal_77b06d4a88fbf8a9780105d3ab186b56930251807c44c289d2446275c47f3500_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Profile:base_profile.html.twig" %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/*     */
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
