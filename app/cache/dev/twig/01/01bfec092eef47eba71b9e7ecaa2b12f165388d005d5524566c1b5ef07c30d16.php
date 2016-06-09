<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_082d3ff3c1d1a95b55a1dcbfe84c9e4c29c2a00845dd9b489e0197187b9a8406 extends Twig_Template
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
        $__internal_da2c9ee7aa7dabc3cbf486fd68e5ff1a28f2a1c6ad43d76812f0a841f272e39b = $this->env->getExtension("native_profiler");
        $__internal_da2c9ee7aa7dabc3cbf486fd68e5ff1a28f2a1c6ad43d76812f0a841f272e39b->enter($__internal_da2c9ee7aa7dabc3cbf486fd68e5ff1a28f2a1c6ad43d76812f0a841f272e39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_da2c9ee7aa7dabc3cbf486fd68e5ff1a28f2a1c6ad43d76812f0a841f272e39b->leave($__internal_da2c9ee7aa7dabc3cbf486fd68e5ff1a28f2a1c6ad43d76812f0a841f272e39b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
