<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_50f981fa688a47748c45ab5610834a987f56aaa9e88d86ddb3ae784af5f3320b extends Twig_Template
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
        $__internal_44b057540a2be47c56df19b7eacbd89b1286f87f7248cb3e72630ba32255db69 = $this->env->getExtension("native_profiler");
        $__internal_44b057540a2be47c56df19b7eacbd89b1286f87f7248cb3e72630ba32255db69->enter($__internal_44b057540a2be47c56df19b7eacbd89b1286f87f7248cb3e72630ba32255db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_44b057540a2be47c56df19b7eacbd89b1286f87f7248cb3e72630ba32255db69->leave($__internal_44b057540a2be47c56df19b7eacbd89b1286f87f7248cb3e72630ba32255db69_prof);

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
