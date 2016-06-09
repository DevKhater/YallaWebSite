<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_52c5fc5a70046badbeeb9e33cd9b873baad90fa26b9eddd8d806688e0b79a946 extends Twig_Template
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
        $__internal_b32be96e3a8945b0a83e4b5cbe85c5952069712ec91a228358767246ea9029af = $this->env->getExtension("native_profiler");
        $__internal_b32be96e3a8945b0a83e4b5cbe85c5952069712ec91a228358767246ea9029af->enter($__internal_b32be96e3a8945b0a83e4b5cbe85c5952069712ec91a228358767246ea9029af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b32be96e3a8945b0a83e4b5cbe85c5952069712ec91a228358767246ea9029af->leave($__internal_b32be96e3a8945b0a83e4b5cbe85c5952069712ec91a228358767246ea9029af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
