<?php

/* KunstmaanVotingBundle:UpDown:voted.html.twig */
class __TwigTemplate_339fcb42e0312a271b4078e304b6c34101d84d5b51477dd77d23aa7b55151d56 extends Twig_Template
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
        $__internal_18b5457a491ec82cb2f7bfd73ad06b5e1acb69523074f4d54872133ea622a3f4 = $this->env->getExtension("native_profiler");
        $__internal_18b5457a491ec82cb2f7bfd73ad06b5e1acb69523074f4d54872133ea622a3f4->enter($__internal_18b5457a491ec82cb2f7bfd73ad06b5e1acb69523074f4d54872133ea622a3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KunstmaanVotingBundle:UpDown:voted.html.twig"));

        // line 1
        if (((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")) == false)) {
            echo "You Already Voted For This Image";
        } else {
            echo "Vote Registered";
        }
        
        $__internal_18b5457a491ec82cb2f7bfd73ad06b5e1acb69523074f4d54872133ea622a3f4->leave($__internal_18b5457a491ec82cb2f7bfd73ad06b5e1acb69523074f4d54872133ea622a3f4_prof);

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
