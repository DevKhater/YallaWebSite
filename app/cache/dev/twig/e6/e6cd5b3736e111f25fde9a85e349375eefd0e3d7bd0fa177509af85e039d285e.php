<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_fc56f665dcd325970f0a75bd903319b6ce086343c57ce1c1884de67cabf0b093 extends Twig_Template
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
        $__internal_b4e4c80eae0e6d7c66d800512eddd2e3d889cc2e339c82b61df14449675280ea = $this->env->getExtension("native_profiler");
        $__internal_b4e4c80eae0e6d7c66d800512eddd2e3d889cc2e339c82b61df14449675280ea->enter($__internal_b4e4c80eae0e6d7c66d800512eddd2e3d889cc2e339c82b61df14449675280ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e4c80eae0e6d7c66d800512eddd2e3d889cc2e339c82b61df14449675280ea->leave($__internal_b4e4c80eae0e6d7c66d800512eddd2e3d889cc2e339c82b61df14449675280ea_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_6b5508def46d34aa85224e732c53e3f07358fa5ab36da3c9905a3850be02adc8 = $this->env->getExtension("native_profiler");
        $__internal_6b5508def46d34aa85224e732c53e3f07358fa5ab36da3c9905a3850be02adc8->enter($__internal_6b5508def46d34aa85224e732c53e3f07358fa5ab36da3c9905a3850be02adc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_6b5508def46d34aa85224e732c53e3f07358fa5ab36da3c9905a3850be02adc8->leave($__internal_6b5508def46d34aa85224e732c53e3f07358fa5ab36da3c9905a3850be02adc8_prof);

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
