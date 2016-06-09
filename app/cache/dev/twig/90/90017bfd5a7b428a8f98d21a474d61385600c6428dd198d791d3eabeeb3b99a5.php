<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_960e46f49e64e9c82d323439645a7c7a28e742c8651acd86ba0495a72d62df2b extends Twig_Template
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
        $__internal_94e3a250cff7f8cd79b585fffbc8968f258d60ade884d10f131813077d72e7c4 = $this->env->getExtension("native_profiler");
        $__internal_94e3a250cff7f8cd79b585fffbc8968f258d60ade884d10f131813077d72e7c4->enter($__internal_94e3a250cff7f8cd79b585fffbc8968f258d60ade884d10f131813077d72e7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_94e3a250cff7f8cd79b585fffbc8968f258d60ade884d10f131813077d72e7c4->leave($__internal_94e3a250cff7f8cd79b585fffbc8968f258d60ade884d10f131813077d72e7c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
