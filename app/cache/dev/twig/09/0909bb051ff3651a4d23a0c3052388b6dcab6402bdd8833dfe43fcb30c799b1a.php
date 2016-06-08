<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_47cf9a47ceaaff8c39c6c2c0a57785e4b7a527104f398d9ce1df60467ab4ebfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23dedead8e875bc2a8fd13334ee5e28725d1c8b7c6a3e43fd7500e1b224e315b = $this->env->getExtension("native_profiler");
        $__internal_23dedead8e875bc2a8fd13334ee5e28725d1c8b7c6a3e43fd7500e1b224e315b->enter($__internal_23dedead8e875bc2a8fd13334ee5e28725d1c8b7c6a3e43fd7500e1b224e315b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23dedead8e875bc2a8fd13334ee5e28725d1c8b7c6a3e43fd7500e1b224e315b->leave($__internal_23dedead8e875bc2a8fd13334ee5e28725d1c8b7c6a3e43fd7500e1b224e315b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a14c39e11dba7a86c38c6387c834d04d4cfb44f423b2522c415222076bc015d2 = $this->env->getExtension("native_profiler");
        $__internal_a14c39e11dba7a86c38c6387c834d04d4cfb44f423b2522c415222076bc015d2->enter($__internal_a14c39e11dba7a86c38c6387c834d04d4cfb44f423b2522c415222076bc015d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a14c39e11dba7a86c38c6387c834d04d4cfb44f423b2522c415222076bc015d2->leave($__internal_a14c39e11dba7a86c38c6387c834d04d4cfb44f423b2522c415222076bc015d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef42c56382c57673c74ac49d61b4a8e91ab8ad22fff3f7bcfb5fb173510102c6 = $this->env->getExtension("native_profiler");
        $__internal_ef42c56382c57673c74ac49d61b4a8e91ab8ad22fff3f7bcfb5fb173510102c6->enter($__internal_ef42c56382c57673c74ac49d61b4a8e91ab8ad22fff3f7bcfb5fb173510102c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ef42c56382c57673c74ac49d61b4a8e91ab8ad22fff3f7bcfb5fb173510102c6->leave($__internal_ef42c56382c57673c74ac49d61b4a8e91ab8ad22fff3f7bcfb5fb173510102c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
