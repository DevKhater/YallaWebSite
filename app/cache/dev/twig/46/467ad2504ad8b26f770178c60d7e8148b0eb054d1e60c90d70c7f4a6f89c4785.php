<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_cca6c4e03eff20a804037a832115f1119e26411c62c1ffdf498df4efc46abc5e extends Twig_Template
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
        $__internal_1e6e44eee7ac7d118e11d78709f5c86bd459662791704ff8d7f9888277a644c4 = $this->env->getExtension("native_profiler");
        $__internal_1e6e44eee7ac7d118e11d78709f5c86bd459662791704ff8d7f9888277a644c4->enter($__internal_1e6e44eee7ac7d118e11d78709f5c86bd459662791704ff8d7f9888277a644c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1e6e44eee7ac7d118e11d78709f5c86bd459662791704ff8d7f9888277a644c4->leave($__internal_1e6e44eee7ac7d118e11d78709f5c86bd459662791704ff8d7f9888277a644c4_prof);

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
