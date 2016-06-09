<?php

/* SonataMediaBundle:MediaAdmin:list_image.html.twig */
class __TwigTemplate_80f249c30a823e60218e61be1c31e95b60ea55ba17324b4879b7b8a7b0103c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataMediaBundle:MediaAdmin:list_image.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65fc121b3d0839c1d36bad6714a2ff2706385ed1164e0f94c037bc2c7a1927dc = $this->env->getExtension("native_profiler");
        $__internal_65fc121b3d0839c1d36bad6714a2ff2706385ed1164e0f94c037bc2c7a1927dc->enter($__internal_65fc121b3d0839c1d36bad6714a2ff2706385ed1164e0f94c037bc2c7a1927dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65fc121b3d0839c1d36bad6714a2ff2706385ed1164e0f94c037bc2c7a1927dc->leave($__internal_65fc121b3d0839c1d36bad6714a2ff2706385ed1164e0f94c037bc2c7a1927dc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0b3eae9e957dec0f634098b0d05c1fbb5fd2aafe3fb2afacf73d5ed88859d445 = $this->env->getExtension("native_profiler");
        $__internal_0b3eae9e957dec0f634098b0d05c1fbb5fd2aafe3fb2afacf73d5ed88859d445->enter($__internal_0b3eae9e957dec0f634098b0d05c1fbb5fd2aafe3fb2afacf73d5ed88859d445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array())), "admin", array("width" => 75, "height" => 60));
        echo "</a>
";
        
        $__internal_0b3eae9e957dec0f634098b0d05c1fbb5fd2aafe3fb2afacf73d5ed88859d445->leave($__internal_0b3eae9e957dec0f634098b0d05c1fbb5fd2aafe3fb2afacf73d5ed88859d445_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     <a href="{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid }) }}">{% thumbnail attribute(object, field_description.name ), 'admin' with {'width': 75, 'height': 60} %}</a>*/
/* {% endblock %}*/
/* */
