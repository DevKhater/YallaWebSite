<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a109b5e5ce6e734ea2d17e6e1e54d83959b34b38f947c9b83077ff66a9801d9a extends Twig_Template
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
        $__internal_219ab84571ada82c8ca3c5cdf02a2839649b077c35de5af88aa3f6e7ef908968 = $this->env->getExtension("native_profiler");
        $__internal_219ab84571ada82c8ca3c5cdf02a2839649b077c35de5af88aa3f6e7ef908968->enter($__internal_219ab84571ada82c8ca3c5cdf02a2839649b077c35de5af88aa3f6e7ef908968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_219ab84571ada82c8ca3c5cdf02a2839649b077c35de5af88aa3f6e7ef908968->leave($__internal_219ab84571ada82c8ca3c5cdf02a2839649b077c35de5af88aa3f6e7ef908968_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
