<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_cfecd379e7d84351b61bb5fde7168934403f60f2d08bb3320aa631cf462e5008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
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
        $__internal_86fed9cea2c9bcc5c513c24edf7c5a22018098460b34c11e87d4bcf137be3af6 = $this->env->getExtension("native_profiler");
        $__internal_86fed9cea2c9bcc5c513c24edf7c5a22018098460b34c11e87d4bcf137be3af6->enter($__internal_86fed9cea2c9bcc5c513c24edf7c5a22018098460b34c11e87d4bcf137be3af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86fed9cea2c9bcc5c513c24edf7c5a22018098460b34c11e87d4bcf137be3af6->leave($__internal_86fed9cea2c9bcc5c513c24edf7c5a22018098460b34c11e87d4bcf137be3af6_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_f47b9bc5e59e6c8e64438056eb09562e589486649f2478c194c10cfbfa664a01 = $this->env->getExtension("native_profiler");
        $__internal_f47b9bc5e59e6c8e64438056eb09562e589486649f2478c194c10cfbfa664a01->enter($__internal_f47b9bc5e59e6c8e64438056eb09562e589486649f2478c194c10cfbfa664a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_f47b9bc5e59e6c8e64438056eb09562e589486649f2478c194c10cfbfa664a01->leave($__internal_f47b9bc5e59e6c8e64438056eb09562e589486649f2478c194c10cfbfa664a01_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
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
/*     <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>*/
/* {% endblock hwi_oauth_content %}*/
/* */
