<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_67eba1c5d1b98eae3e317f173e1622e5c2cfbbe65d3db6b986584b75d411a815 extends Twig_Template
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
        $__internal_af569c502baf327b2d2b0b4e3baa03d94f513164f111512c19a27bc13f6d3a80 = $this->env->getExtension("native_profiler");
        $__internal_af569c502baf327b2d2b0b4e3baa03d94f513164f111512c19a27bc13f6d3a80->enter($__internal_af569c502baf327b2d2b0b4e3baa03d94f513164f111512c19a27bc13f6d3a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_af569c502baf327b2d2b0b4e3baa03d94f513164f111512c19a27bc13f6d3a80->leave($__internal_af569c502baf327b2d2b0b4e3baa03d94f513164f111512c19a27bc13f6d3a80_prof);

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
