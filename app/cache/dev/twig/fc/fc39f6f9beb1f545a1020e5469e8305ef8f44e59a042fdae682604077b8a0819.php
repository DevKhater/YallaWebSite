<?php

/* YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig */
class __TwigTemplate_1a8c0150957774212449bbb3ad51e6c3abfcbd00c8d73231c9b314d2a6ed852a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_701758e0b823929521011126d2513a3cf556468c53cec0e60a159f10a3e79cce = $this->env->getExtension("native_profiler");
        $__internal_701758e0b823929521011126d2513a3cf556468c53cec0e60a159f10a3e79cce->enter($__internal_701758e0b823929521011126d2513a3cf556468c53cec0e60a159f10a3e79cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_701758e0b823929521011126d2513a3cf556468c53cec0e60a159f10a3e79cce->leave($__internal_701758e0b823929521011126d2513a3cf556468c53cec0e60a159f10a3e79cce_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_df869b86398eb13003a1c7f83fdcb7d82623f308446a9412680d6a6ddce45dbc = $this->env->getExtension("native_profiler");
        $__internal_df869b86398eb13003a1c7f83fdcb7d82623f308446a9412680d6a6ddce45dbc->enter($__internal_df869b86398eb13003a1c7f83fdcb7d82623f308446a9412680d6a6ddce45dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Venue Section";
        
        $__internal_df869b86398eb13003a1c7f83fdcb7d82623f308446a9412680d6a6ddce45dbc->leave($__internal_df869b86398eb13003a1c7f83fdcb7d82623f308446a9412680d6a6ddce45dbc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_02e23e0774c7423b1c9448f9422a8d093e711970558e6cf5d2ebef9b7df357c7 = $this->env->getExtension("native_profiler");
        $__internal_02e23e0774c7423b1c9448f9422a8d093e711970558e6cf5d2ebef9b7df357c7->enter($__internal_02e23e0774c7423b1c9448f9422a8d093e711970558e6cf5d2ebef9b7df357c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Website Advertisment</h4>
        </div>
    </div>
";
        // line 10
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_02e23e0774c7423b1c9448f9422a8d093e711970558e6cf5d2ebef9b7df357c7->leave($__internal_02e23e0774c7423b1c9448f9422a8d093e711970558e6cf5d2ebef9b7df357c7_prof);

    }

    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_19e82e45b593c2f3fdc96fc90922c9d168eecd3e9d03f6fc36193dd26dc775b5 = $this->env->getExtension("native_profiler");
        $__internal_19e82e45b593c2f3fdc96fc90922c9d168eecd3e9d03f6fc36193dd26dc775b5->enter($__internal_19e82e45b593c2f3fdc96fc90922c9d168eecd3e9d03f6fc36193dd26dc775b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_19e82e45b593c2f3fdc96fc90922c9d168eecd3e9d03f6fc36193dd26dc775b5->leave($__internal_19e82e45b593c2f3fdc96fc90922c9d168eecd3e9d03f6fc36193dd26dc775b5_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  54 => 5,  48 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Venue Section{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Website Advertisment</h4>*/
/*         </div>*/
/*     </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
