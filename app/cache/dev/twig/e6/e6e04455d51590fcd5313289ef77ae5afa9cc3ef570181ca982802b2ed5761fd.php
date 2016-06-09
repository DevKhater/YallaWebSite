<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_8f8e3810d1db4b4d646f637507001673fb1a90a945b075cd9574a57efa318b58 extends Twig_Template
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
        $__internal_a1e940f0bace723e6e3658db832a34360b97fbfb4fc6cd14bfc281f286a8520d = $this->env->getExtension("native_profiler");
        $__internal_a1e940f0bace723e6e3658db832a34360b97fbfb4fc6cd14bfc281f286a8520d->enter($__internal_a1e940f0bace723e6e3658db832a34360b97fbfb4fc6cd14bfc281f286a8520d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_a1e940f0bace723e6e3658db832a34360b97fbfb4fc6cd14bfc281f286a8520d->leave($__internal_a1e940f0bace723e6e3658db832a34360b97fbfb4fc6cd14bfc281f286a8520d_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
