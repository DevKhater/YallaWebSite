<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bf4448444f492d5a5bacd2fc719dd230e087cd2c2765e6554acc6c6029ac2750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baf124cc4aa612576fb7e45f0a59586279c7827335112dbed5c673b59dcc9a97 = $this->env->getExtension("native_profiler");
        $__internal_baf124cc4aa612576fb7e45f0a59586279c7827335112dbed5c673b59dcc9a97->enter($__internal_baf124cc4aa612576fb7e45f0a59586279c7827335112dbed5c673b59dcc9a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_baf124cc4aa612576fb7e45f0a59586279c7827335112dbed5c673b59dcc9a97->leave($__internal_baf124cc4aa612576fb7e45f0a59586279c7827335112dbed5c673b59dcc9a97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
