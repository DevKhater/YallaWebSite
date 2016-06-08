<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a1f018ad2745d0606894c79c04ad4ec7d39d41b7546c34e65c09fec991551ad2 extends Twig_Template
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
        $__internal_b246be328c3471dc8d4933ea391ab0c26bbccd6aef2d00889680a5baacc8d9b3 = $this->env->getExtension("native_profiler");
        $__internal_b246be328c3471dc8d4933ea391ab0c26bbccd6aef2d00889680a5baacc8d9b3->enter($__internal_b246be328c3471dc8d4933ea391ab0c26bbccd6aef2d00889680a5baacc8d9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b246be328c3471dc8d4933ea391ab0c26bbccd6aef2d00889680a5baacc8d9b3->leave($__internal_b246be328c3471dc8d4933ea391ab0c26bbccd6aef2d00889680a5baacc8d9b3_prof);

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
