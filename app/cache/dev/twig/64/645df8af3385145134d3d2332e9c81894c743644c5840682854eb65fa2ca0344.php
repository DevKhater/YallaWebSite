<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e38112c6ef89d8d3919979b3a0370140d977ffa190ac2194c8a0bf48a5a43ad3 extends Twig_Template
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
        $__internal_8d3069abb28b975bc0a228a121e5a28dc44cf3cabc87a6be816c06f760bd18ea = $this->env->getExtension("native_profiler");
        $__internal_8d3069abb28b975bc0a228a121e5a28dc44cf3cabc87a6be816c06f760bd18ea->enter($__internal_8d3069abb28b975bc0a228a121e5a28dc44cf3cabc87a6be816c06f760bd18ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3069abb28b975bc0a228a121e5a28dc44cf3cabc87a6be816c06f760bd18ea->leave($__internal_8d3069abb28b975bc0a228a121e5a28dc44cf3cabc87a6be816c06f760bd18ea_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35e735f21ebe0e66ae78a526d171eb1f326d1a68359c65245641d23f7c896614 = $this->env->getExtension("native_profiler");
        $__internal_35e735f21ebe0e66ae78a526d171eb1f326d1a68359c65245641d23f7c896614->enter($__internal_35e735f21ebe0e66ae78a526d171eb1f326d1a68359c65245641d23f7c896614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    
";
        // line 6
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 6)->display($context);
        
        $__internal_35e735f21ebe0e66ae78a526d171eb1f326d1a68359c65245641d23f7c896614->leave($__internal_35e735f21ebe0e66ae78a526d171eb1f326d1a68359c65245641d23f7c896614_prof);

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
