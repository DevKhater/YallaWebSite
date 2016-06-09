<?php

/* SonataSeoBundle:Default:index.html.twig */
class __TwigTemplate_2c5489c7ec3c5386f7424cb9491a1344b9f10b29437a89310bd69402801e7d78 extends Twig_Template
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
        $__internal_be7b50671ebefeb224075f0be30b014468228d4eae8f039022bac5ee9c2d60c1 = $this->env->getExtension("native_profiler");
        $__internal_be7b50671ebefeb224075f0be30b014468228d4eae8f039022bac5ee9c2d60c1->enter($__internal_be7b50671ebefeb224075f0be30b014468228d4eae8f039022bac5ee9c2d60c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_be7b50671ebefeb224075f0be30b014468228d4eae8f039022bac5ee9c2d60c1->leave($__internal_be7b50671ebefeb224075f0be30b014468228d4eae8f039022bac5ee9c2d60c1_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
