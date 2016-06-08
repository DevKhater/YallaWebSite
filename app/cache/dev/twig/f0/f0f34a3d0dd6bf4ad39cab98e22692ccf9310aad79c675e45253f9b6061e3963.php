<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b114c0962fee68eba82ae721e2e35f770a8fc3c0a82281ac84fcc7c275200f05 extends Twig_Template
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
        $__internal_90984ac714fd69147eecda0917d5f62f978446e40a7bcd808e0ed21b5a053de4 = $this->env->getExtension("native_profiler");
        $__internal_90984ac714fd69147eecda0917d5f62f978446e40a7bcd808e0ed21b5a053de4->enter($__internal_90984ac714fd69147eecda0917d5f62f978446e40a7bcd808e0ed21b5a053de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_90984ac714fd69147eecda0917d5f62f978446e40a7bcd808e0ed21b5a053de4->leave($__internal_90984ac714fd69147eecda0917d5f62f978446e40a7bcd808e0ed21b5a053de4_prof);

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
