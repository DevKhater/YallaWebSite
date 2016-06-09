<?php

/* SonataMediaBundle:Provider:thumbnail.html.twig */
class __TwigTemplate_bae82e001bfe154ef98aff0f2525e9ef99f53987cd4d127f5011104fc22bf100 extends Twig_Template
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
        $__internal_66de3224f3173c1bc2bad6e499254cb29caed43bcc24bde73d5fb0bf83d4585a = $this->env->getExtension("native_profiler");
        $__internal_66de3224f3173c1bc2bad6e499254cb29caed43bcc24bde73d5fb0bf83d4585a->enter($__internal_66de3224f3173c1bc2bad6e499254cb29caed43bcc24bde73d5fb0bf83d4585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Provider:thumbnail.html.twig"));

        // line 11
        echo "
<img ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " />
";
        
        $__internal_66de3224f3173c1bc2bad6e499254cb29caed43bcc24bde73d5fb0bf83d4585a->leave($__internal_66de3224f3173c1bc2bad6e499254cb29caed43bcc24bde73d5fb0bf83d4585a_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* <img {% for name, value in options %}{{name}}="{{value}}" {% endfor %} />*/
/* */
