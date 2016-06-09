<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a2c55417e4d7e2e704b03dae67ab2e28ce090a35e467595cf681f0b0cedcc54e extends Twig_Template
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
        $__internal_aedd5028e7012f2a2a252ab59b929f963fa11c8213f31f2501520b552680ed49 = $this->env->getExtension("native_profiler");
        $__internal_aedd5028e7012f2a2a252ab59b929f963fa11c8213f31f2501520b552680ed49->enter($__internal_aedd5028e7012f2a2a252ab59b929f963fa11c8213f31f2501520b552680ed49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aedd5028e7012f2a2a252ab59b929f963fa11c8213f31f2501520b552680ed49->leave($__internal_aedd5028e7012f2a2a252ab59b929f963fa11c8213f31f2501520b552680ed49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
