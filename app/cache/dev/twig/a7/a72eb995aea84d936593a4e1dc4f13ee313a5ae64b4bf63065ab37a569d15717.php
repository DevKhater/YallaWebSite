<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d4660f8df14544d90ad00bf4cac10a9fcd7de4a4f4face35a8a262bb8e19ded4 extends Twig_Template
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
        $__internal_2b5bc98bc1d32e67d8852ee189cc23e91006ed8cee1d5b0cd7f4dda85d9a34de = $this->env->getExtension("native_profiler");
        $__internal_2b5bc98bc1d32e67d8852ee189cc23e91006ed8cee1d5b0cd7f4dda85d9a34de->enter($__internal_2b5bc98bc1d32e67d8852ee189cc23e91006ed8cee1d5b0cd7f4dda85d9a34de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b5bc98bc1d32e67d8852ee189cc23e91006ed8cee1d5b0cd7f4dda85d9a34de->leave($__internal_2b5bc98bc1d32e67d8852ee189cc23e91006ed8cee1d5b0cd7f4dda85d9a34de_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cddc7fe82555bf83a0acb174c98a844d9a799b74fb12136c104de9b017b96ae9 = $this->env->getExtension("native_profiler");
        $__internal_cddc7fe82555bf83a0acb174c98a844d9a799b74fb12136c104de9b017b96ae9->enter($__internal_cddc7fe82555bf83a0acb174c98a844d9a799b74fb12136c104de9b017b96ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cddc7fe82555bf83a0acb174c98a844d9a799b74fb12136c104de9b017b96ae9->leave($__internal_cddc7fe82555bf83a0acb174c98a844d9a799b74fb12136c104de9b017b96ae9_prof);

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
