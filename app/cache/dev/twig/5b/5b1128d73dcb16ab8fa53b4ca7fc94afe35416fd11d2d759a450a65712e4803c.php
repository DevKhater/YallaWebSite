<?php

/* SonataMediaBundle:MediaAdmin:list_image.html.twig */
class __TwigTemplate_560831a10d1896090df7f6589babb950a9abecc8fa7a8ebb15103c975d0b3726 extends Twig_Template
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
        $__internal_cd74b41b539e78a8584e1ca563e06c24780d3c9394db679d349febef9e5fde18 = $this->env->getExtension("native_profiler");
        $__internal_cd74b41b539e78a8584e1ca563e06c24780d3c9394db679d349febef9e5fde18->enter($__internal_cd74b41b539e78a8584e1ca563e06c24780d3c9394db679d349febef9e5fde18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd74b41b539e78a8584e1ca563e06c24780d3c9394db679d349febef9e5fde18->leave($__internal_cd74b41b539e78a8584e1ca563e06c24780d3c9394db679d349febef9e5fde18_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9253e8196d7bed1cc37d7c639657d7d0d4d6c03b5ee084b126fedd6254114acf = $this->env->getExtension("native_profiler");
        $__internal_9253e8196d7bed1cc37d7c639657d7d0d4d6c03b5ee084b126fedd6254114acf->enter($__internal_9253e8196d7bed1cc37d7c639657d7d0d4d6c03b5ee084b126fedd6254114acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array())), "admin", array("width" => 75, "height" => 60));
        echo "</a>
";
        
        $__internal_9253e8196d7bed1cc37d7c639657d7d0d4d6c03b5ee084b126fedd6254114acf->leave($__internal_9253e8196d7bed1cc37d7c639657d7d0d4d6c03b5ee084b126fedd6254114acf_prof);

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
