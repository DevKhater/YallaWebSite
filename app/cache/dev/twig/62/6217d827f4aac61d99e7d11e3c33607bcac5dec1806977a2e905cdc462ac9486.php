<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_f74c292daf122b94fd3af2443fb49419a8bc2658cfd2460fc62606a41bb64e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf3b7f261dd7f0b78bc8ad0862d4c60f6ee5bb5244f55a631fde00313a535ada = $this->env->getExtension("native_profiler");
        $__internal_cf3b7f261dd7f0b78bc8ad0862d4c60f6ee5bb5244f55a631fde00313a535ada->enter($__internal_cf3b7f261dd7f0b78bc8ad0862d4c60f6ee5bb5244f55a631fde00313a535ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3b7f261dd7f0b78bc8ad0862d4c60f6ee5bb5244f55a631fde00313a535ada->leave($__internal_cf3b7f261dd7f0b78bc8ad0862d4c60f6ee5bb5244f55a631fde00313a535ada_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_bceeaf46465651c8b9c7b509da099dcb0408c07ca3baa004f8b040e873f06de1 = $this->env->getExtension("native_profiler");
        $__internal_bceeaf46465651c8b9c7b509da099dcb0408c07ca3baa004f8b040e873f06de1->enter($__internal_bceeaf46465651c8b9c7b509da099dcb0408c07ca3baa004f8b040e873f06de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_bceeaf46465651c8b9c7b509da099dcb0408c07ca3baa004f8b040e873f06de1->leave($__internal_bceeaf46465651c8b9c7b509da099dcb0408c07ca3baa004f8b040e873f06de1_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>*/
/* {% endblock hwi_oauth_content %}*/
/* */
