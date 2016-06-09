<?php

/* KunstmaanVotingBundle:UpDown:voted.html.twig */
class __TwigTemplate_f4689ba21bbd76cac8ebbdc3f360c0639f68fa9260a2bf612def551d582218a5 extends Twig_Template
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
        // line 1
        if (((isset($context["response"]) ? $context["response"] : null) == false)) {
            echo "You Already Voted For This Image";
        } else {
            echo "Vote Registered";
        }
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
        return array (  19 => 1,);
    }
}
/* {% if response == false%}You Already Voted For This Image{% else %}Vote Registered{% endif %}*/
/* */
