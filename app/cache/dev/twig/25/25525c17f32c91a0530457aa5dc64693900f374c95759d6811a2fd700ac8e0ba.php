<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d4e0ebc8c22e5cc0a80423aceb027167e84385d2ac418bffa20bb5a9d0f200d5 extends Twig_Template
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
        $__internal_05280f907692b7c7e6d8752a5acfea27e1e567e4ce2e772d6d43a93150dc6490 = $this->env->getExtension("native_profiler");
        $__internal_05280f907692b7c7e6d8752a5acfea27e1e567e4ce2e772d6d43a93150dc6490->enter($__internal_05280f907692b7c7e6d8752a5acfea27e1e567e4ce2e772d6d43a93150dc6490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05280f907692b7c7e6d8752a5acfea27e1e567e4ce2e772d6d43a93150dc6490->leave($__internal_05280f907692b7c7e6d8752a5acfea27e1e567e4ce2e772d6d43a93150dc6490_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a32a6e316e04d92ed3348656c06bc98f97650a51480874b9433a007c8c9a747c = $this->env->getExtension("native_profiler");
        $__internal_a32a6e316e04d92ed3348656c06bc98f97650a51480874b9433a007c8c9a747c->enter($__internal_a32a6e316e04d92ed3348656c06bc98f97650a51480874b9433a007c8c9a747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a32a6e316e04d92ed3348656c06bc98f97650a51480874b9433a007c8c9a747c->leave($__internal_a32a6e316e04d92ed3348656c06bc98f97650a51480874b9433a007c8c9a747c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_273617fb3f569c75c36fd3260427d3e16d3d9c2c89d4152accd4efdfb02bb9f6 = $this->env->getExtension("native_profiler");
        $__internal_273617fb3f569c75c36fd3260427d3e16d3d9c2c89d4152accd4efdfb02bb9f6->enter($__internal_273617fb3f569c75c36fd3260427d3e16d3d9c2c89d4152accd4efdfb02bb9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_273617fb3f569c75c36fd3260427d3e16d3d9c2c89d4152accd4efdfb02bb9f6->leave($__internal_273617fb3f569c75c36fd3260427d3e16d3d9c2c89d4152accd4efdfb02bb9f6_prof);

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
