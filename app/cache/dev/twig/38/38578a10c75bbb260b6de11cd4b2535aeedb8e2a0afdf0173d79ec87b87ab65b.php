<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1e7b9b476b46cd0f7f397c271c130eb9586bde0db6149ed26890e84cd1e6ca7b extends Twig_Template
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
        $__internal_426a60a0a3951ff75194326446497ab45593f46bce282f92a819b488eba5ebe2 = $this->env->getExtension("native_profiler");
        $__internal_426a60a0a3951ff75194326446497ab45593f46bce282f92a819b488eba5ebe2->enter($__internal_426a60a0a3951ff75194326446497ab45593f46bce282f92a819b488eba5ebe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_426a60a0a3951ff75194326446497ab45593f46bce282f92a819b488eba5ebe2->leave($__internal_426a60a0a3951ff75194326446497ab45593f46bce282f92a819b488eba5ebe2_prof);

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
