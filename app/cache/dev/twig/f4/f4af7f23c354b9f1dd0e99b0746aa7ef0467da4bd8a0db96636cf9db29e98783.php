<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4cbdbfbdb686a60150d88a83b1cc97c37be808ea3381d325cd65f860014076d9 extends Twig_Template
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
        $__internal_b28dbc616cf7c802a93fd40d01b5c46515a2dab62d2c222e120c6fa60de7d4f3 = $this->env->getExtension("native_profiler");
        $__internal_b28dbc616cf7c802a93fd40d01b5c46515a2dab62d2c222e120c6fa60de7d4f3->enter($__internal_b28dbc616cf7c802a93fd40d01b5c46515a2dab62d2c222e120c6fa60de7d4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b28dbc616cf7c802a93fd40d01b5c46515a2dab62d2c222e120c6fa60de7d4f3->leave($__internal_b28dbc616cf7c802a93fd40d01b5c46515a2dab62d2c222e120c6fa60de7d4f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
