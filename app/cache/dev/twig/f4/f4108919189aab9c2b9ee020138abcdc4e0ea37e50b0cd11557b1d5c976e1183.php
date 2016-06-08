<?php

/* KunstmaanVotingBundle:UpDown:voted.html.twig */
class __TwigTemplate_8e9881aa6b8d98f9429874f0900b3af01cb0659c0aa57324aa4563c2f013052c extends Twig_Template
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
        $__internal_31eacb6e0b2aa2115bdbf08b35199006e8241dccd242f27d99ef86a7c5c2521f = $this->env->getExtension("native_profiler");
        $__internal_31eacb6e0b2aa2115bdbf08b35199006e8241dccd242f27d99ef86a7c5c2521f->enter($__internal_31eacb6e0b2aa2115bdbf08b35199006e8241dccd242f27d99ef86a7c5c2521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:UpDown:voted.html.twig"));

        // line 1
        if (((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")) == false)) {
            echo "You Already Voted For This Image";
        } else {
            echo "Vote Registered";
        }
        
        $__internal_31eacb6e0b2aa2115bdbf08b35199006e8241dccd242f27d99ef86a7c5c2521f->leave($__internal_31eacb6e0b2aa2115bdbf08b35199006e8241dccd242f27d99ef86a7c5c2521f_prof);

    }

    public function getTemplateName()
    {
        return "KunstmaanVotingBundle:UpDown:voted.html.twig";
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
/* {% if response == false%}You Already Voted For This Image{% else %}Vote Registered{% endif %}*/
/* */
