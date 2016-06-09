<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_eae8e334dc5472917d02b3165f8d7513ea59a4de57b9530bcc10b6e40cdc903f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_90f2f92fa2e5999afa1c263b6109ad3fb55e499e7c81f64b40be3b91cc4abd1c = $this->env->getExtension("native_profiler");
        $__internal_90f2f92fa2e5999afa1c263b6109ad3fb55e499e7c81f64b40be3b91cc4abd1c->enter($__internal_90f2f92fa2e5999afa1c263b6109ad3fb55e499e7c81f64b40be3b91cc4abd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f2f92fa2e5999afa1c263b6109ad3fb55e499e7c81f64b40be3b91cc4abd1c->leave($__internal_90f2f92fa2e5999afa1c263b6109ad3fb55e499e7c81f64b40be3b91cc4abd1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6187e75dd88b367c61a26ad2263becaab0b31f5c2ca89b304f44b2b4cd1f457 = $this->env->getExtension("native_profiler");
        $__internal_d6187e75dd88b367c61a26ad2263becaab0b31f5c2ca89b304f44b2b4cd1f457->enter($__internal_d6187e75dd88b367c61a26ad2263becaab0b31f5c2ca89b304f44b2b4cd1f457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6187e75dd88b367c61a26ad2263becaab0b31f5c2ca89b304f44b2b4cd1f457->leave($__internal_d6187e75dd88b367c61a26ad2263becaab0b31f5c2ca89b304f44b2b4cd1f457_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49714c477643d108cbb3ec34f92d1fd27ee1128bdff7a96fe96ce18d58dfe6ce = $this->env->getExtension("native_profiler");
        $__internal_49714c477643d108cbb3ec34f92d1fd27ee1128bdff7a96fe96ce18d58dfe6ce->enter($__internal_49714c477643d108cbb3ec34f92d1fd27ee1128bdff7a96fe96ce18d58dfe6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_49714c477643d108cbb3ec34f92d1fd27ee1128bdff7a96fe96ce18d58dfe6ce->leave($__internal_49714c477643d108cbb3ec34f92d1fd27ee1128bdff7a96fe96ce18d58dfe6ce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_82b6fd1b73e7b8cbe03406e333142423b637beb84adc84f53a7b6bc58b54275f = $this->env->getExtension("native_profiler");
        $__internal_82b6fd1b73e7b8cbe03406e333142423b637beb84adc84f53a7b6bc58b54275f->enter($__internal_82b6fd1b73e7b8cbe03406e333142423b637beb84adc84f53a7b6bc58b54275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_82b6fd1b73e7b8cbe03406e333142423b637beb84adc84f53a7b6bc58b54275f->leave($__internal_82b6fd1b73e7b8cbe03406e333142423b637beb84adc84f53a7b6bc58b54275f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
