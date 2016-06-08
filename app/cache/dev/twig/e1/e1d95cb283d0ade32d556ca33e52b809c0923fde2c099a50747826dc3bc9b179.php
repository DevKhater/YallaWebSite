<?php

/* SonataSeoBundle:Default:index.html.twig */
class __TwigTemplate_6d8521abe22c81ff1915040e5804a0eb3c8bcd286cae4f55cbba4025fa4f8c35 extends Twig_Template
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
        $__internal_19eae165c0be72421f1361156104862097e73bd627dc0412c3208f9b9bf35730 = $this->env->getExtension("native_profiler");
        $__internal_19eae165c0be72421f1361156104862097e73bd627dc0412c3208f9b9bf35730->enter($__internal_19eae165c0be72421f1361156104862097e73bd627dc0412c3208f9b9bf35730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_19eae165c0be72421f1361156104862097e73bd627dc0412c3208f9b9bf35730->leave($__internal_19eae165c0be72421f1361156104862097e73bd627dc0412c3208f9b9bf35730_prof);

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
