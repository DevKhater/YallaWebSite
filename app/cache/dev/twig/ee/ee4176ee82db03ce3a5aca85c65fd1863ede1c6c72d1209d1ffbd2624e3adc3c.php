<?php

/* SonataMediaBundle:Provider:view_image.html.twig */
class __TwigTemplate_38fc1790bbcbee037b9e790baf990d7815b3ef5f3f4008130e643810731bd2c0 extends Twig_Template
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
        $__internal_d4e931f9f344dfb4c4b1244646befdc0315dba22083fea54fae34c7c59ba1f04 = $this->env->getExtension("native_profiler");
        $__internal_d4e931f9f344dfb4c4b1244646befdc0315dba22083fea54fae34c7c59ba1f04->enter($__internal_d4e931f9f344dfb4c4b1244646befdc0315dba22083fea54fae34c7c59ba1f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Provider:view_image.html.twig"));

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
        
        $__internal_d4e931f9f344dfb4c4b1244646befdc0315dba22083fea54fae34c7c59ba1f04->leave($__internal_d4e931f9f344dfb4c4b1244646befdc0315dba22083fea54fae34c7c59ba1f04_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_image.html.twig";
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
/* <img {% for name, value in options %}{{ name }}="{{ value }}" {% endfor %} />*/
/* */
