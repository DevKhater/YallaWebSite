<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_bbc17151ce02753f88b3b78e3a44f11c925679df8b37d037408635e48ce27ddd extends Twig_Template
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
        $__internal_cc9c9811e24a39da2dd854019ed7107d2db8fd19ed429bb61d8d42e2ad2da9ca = $this->env->getExtension("native_profiler");
        $__internal_cc9c9811e24a39da2dd854019ed7107d2db8fd19ed429bb61d8d42e2ad2da9ca->enter($__internal_cc9c9811e24a39da2dd854019ed7107d2db8fd19ed429bb61d8d42e2ad2da9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cc9c9811e24a39da2dd854019ed7107d2db8fd19ed429bb61d8d42e2ad2da9ca->leave($__internal_cc9c9811e24a39da2dd854019ed7107d2db8fd19ed429bb61d8d42e2ad2da9ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
