<?php

/* SonataMediaBundle:GalleryAdmin:list.html.twig */
class __TwigTemplate_d89e7c6143804a07b40ca9e57dc81aa802f63172b020c8cd6fa67d810df5fba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:GalleryAdmin:list.html.twig", 12);
        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c2f6b27d988b52b131f91c9cd386b29505ebd6a38f3819699294ac4acc50ad = $this->env->getExtension("native_profiler");
        $__internal_a5c2f6b27d988b52b131f91c9cd386b29505ebd6a38f3819699294ac4acc50ad->enter($__internal_a5c2f6b27d988b52b131f91c9cd386b29505ebd6a38f3819699294ac4acc50ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:GalleryAdmin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c2f6b27d988b52b131f91c9cd386b29505ebd6a38f3819699294ac4acc50ad->leave($__internal_a5c2f6b27d988b52b131f91c9cd386b29505ebd6a38f3819699294ac4acc50ad_prof);

    }

    // line 14
    public function block_preview($context, array $blocks = array())
    {
        $__internal_096424ee6b0bac98738f37202770e49563e94d70f548e91d475c4fe1ce51a8e1 = $this->env->getExtension("native_profiler");
        $__internal_096424ee6b0bac98738f37202770e49563e94d70f548e91d475c4fe1ce51a8e1->enter($__internal_096424ee6b0bac98738f37202770e49563e94d70f548e91d475c4fe1ce51a8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 15
        echo "
    <ul class=\"nav nav-pills\">
        <li><a><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts", array()));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 19
            echo "            ";
            if (($context["name"] == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()))) {
                // line 20
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $context["name"])), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 22
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $context["name"])), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_096424ee6b0bac98738f37202770e49563e94d70f548e91d475c4fe1ce51a8e1->leave($__internal_096424ee6b0bac98738f37202770e49563e94d70f548e91d475c4fe1ce51a8e1_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:GalleryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  71 => 24,  63 => 22,  55 => 20,  52 => 19,  48 => 18,  44 => 17,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
/* {% block preview %}*/
/* */
/*     <ul class="nav nav-pills">*/
/*         <li><a><strong>{{ "label.select_context"|trans({}, 'SonataMediaBundle') }}</strong></a></li>*/
/*         {% for name, context in media_pool.contexts %}*/
/*             {% if name == persistent_parameters.context %}*/
/*                 <li class="active"><a href="{{ admin.generateUrl('list', {'context' : name }) }}">{{ name|trans({}, 'SonataMediaBundle') }}</a></li>*/
/*             {% else %}*/
/*                 <li><a href="{{ admin.generateUrl('list', {'context' : name }) }}">{{ name|trans({}, 'SonataMediaBundle') }}</a></li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
