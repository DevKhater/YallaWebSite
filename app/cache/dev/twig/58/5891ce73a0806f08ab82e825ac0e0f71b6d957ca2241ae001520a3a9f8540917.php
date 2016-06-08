<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_367852398ef2f6fcb29f00a6f0761f0e841440cef77456f1be8f1052f3f6d906 extends Twig_Template
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
        $__internal_93715b77926ebd51e53f96f83ddbfc9b1b6bd4b32d4f5fb9fa139a1d8289e3af = $this->env->getExtension("native_profiler");
        $__internal_93715b77926ebd51e53f96f83ddbfc9b1b6bd4b32d4f5fb9fa139a1d8289e3af->enter($__internal_93715b77926ebd51e53f96f83ddbfc9b1b6bd4b32d4f5fb9fa139a1d8289e3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_93715b77926ebd51e53f96f83ddbfc9b1b6bd4b32d4f5fb9fa139a1d8289e3af->leave($__internal_93715b77926ebd51e53f96f83ddbfc9b1b6bd4b32d4f5fb9fa139a1d8289e3af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
