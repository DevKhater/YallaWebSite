<?php

/* KunstmaanVotingBundle:Default:index.html.twig */
class __TwigTemplate_9c2fd17ec0a37e68971da30f9b5cf93653c38d94e2b4583424607577cbe16476 extends Twig_Template
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
        $__internal_37ea6a4c01a97a9ac529ef88ec64efa78d040632c79c4b03077ea084f0fab93b = $this->env->getExtension("native_profiler");
        $__internal_37ea6a4c01a97a9ac529ef88ec64efa78d040632c79c4b03077ea084f0fab93b->enter($__internal_37ea6a4c01a97a9ac529ef88ec64efa78d040632c79c4b03077ea084f0fab93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_37ea6a4c01a97a9ac529ef88ec64efa78d040632c79c4b03077ea084f0fab93b->leave($__internal_37ea6a4c01a97a9ac529ef88ec64efa78d040632c79c4b03077ea084f0fab93b_prof);

    }

    public function getTemplateName()
    {
        return "KunstmaanVotingBundle:Default:index.html.twig";
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
