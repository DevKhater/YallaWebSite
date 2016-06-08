<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8fac53290354926b15dc966cf0c93afaa29ed0166ef68cd9153a2885b4a604f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a972b66ac46e1d2bcc06bff3f81f3d142553bea4e8ec47323bb9391f430fc994 = $this->env->getExtension("native_profiler");
        $__internal_a972b66ac46e1d2bcc06bff3f81f3d142553bea4e8ec47323bb9391f430fc994->enter($__internal_a972b66ac46e1d2bcc06bff3f81f3d142553bea4e8ec47323bb9391f430fc994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a972b66ac46e1d2bcc06bff3f81f3d142553bea4e8ec47323bb9391f430fc994->leave($__internal_a972b66ac46e1d2bcc06bff3f81f3d142553bea4e8ec47323bb9391f430fc994_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d498529ed93d572575125baf9763a7ae2d87d490044caad6f3d13122245b6ac = $this->env->getExtension("native_profiler");
        $__internal_5d498529ed93d572575125baf9763a7ae2d87d490044caad6f3d13122245b6ac->enter($__internal_5d498529ed93d572575125baf9763a7ae2d87d490044caad6f3d13122245b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5d498529ed93d572575125baf9763a7ae2d87d490044caad6f3d13122245b6ac->leave($__internal_5d498529ed93d572575125baf9763a7ae2d87d490044caad6f3d13122245b6ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
