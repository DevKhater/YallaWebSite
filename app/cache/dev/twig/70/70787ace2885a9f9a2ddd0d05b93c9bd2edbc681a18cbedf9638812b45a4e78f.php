<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_23efb88c6a2185ce11bd1fbd826efebc88785d664e5f9bbea246442810cd9c16 extends Twig_Template
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
        $__internal_094f42c6c335bb18892e8866def8123efb7f8917d55c08f092db068f5e60394b = $this->env->getExtension("native_profiler");
        $__internal_094f42c6c335bb18892e8866def8123efb7f8917d55c08f092db068f5e60394b->enter($__internal_094f42c6c335bb18892e8866def8123efb7f8917d55c08f092db068f5e60394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_094f42c6c335bb18892e8866def8123efb7f8917d55c08f092db068f5e60394b->leave($__internal_094f42c6c335bb18892e8866def8123efb7f8917d55c08f092db068f5e60394b_prof);

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
