<?php

/* KunstmaanVotingBundle:Default:index.html.twig */
class __TwigTemplate_8f411b97086b76b03bda1eb2b46ed0f92dc6c615c96685de2c289a8378387fdb extends Twig_Template
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
        $__internal_862256efceac350f26c6d906f351931fef23a310d9d309d77b276ff97fc899a6 = $this->env->getExtension("native_profiler");
        $__internal_862256efceac350f26c6d906f351931fef23a310d9d309d77b276ff97fc899a6->enter($__internal_862256efceac350f26c6d906f351931fef23a310d9d309d77b276ff97fc899a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_862256efceac350f26c6d906f351931fef23a310d9d309d77b276ff97fc899a6->leave($__internal_862256efceac350f26c6d906f351931fef23a310d9d309d77b276ff97fc899a6_prof);

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
