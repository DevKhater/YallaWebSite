<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d4774884f11dc25fa6afd6bea8257bf0a8be269879042daae0d1b2c2aee514a8 extends Twig_Template
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
        $__internal_f82e6617a69a7254ebffb8e1c9a2f5b188af35f87671018f884b4524ee887944 = $this->env->getExtension("native_profiler");
        $__internal_f82e6617a69a7254ebffb8e1c9a2f5b188af35f87671018f884b4524ee887944->enter($__internal_f82e6617a69a7254ebffb8e1c9a2f5b188af35f87671018f884b4524ee887944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f82e6617a69a7254ebffb8e1c9a2f5b188af35f87671018f884b4524ee887944->leave($__internal_f82e6617a69a7254ebffb8e1c9a2f5b188af35f87671018f884b4524ee887944_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
