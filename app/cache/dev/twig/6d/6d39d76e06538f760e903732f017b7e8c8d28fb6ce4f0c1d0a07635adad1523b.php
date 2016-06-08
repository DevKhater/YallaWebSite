<?php

/* YallaWebsiteBackendBundle:Artist:show.html.twig */
class __TwigTemplate_1f5abf70cd2402a2e03a0a712269946a0fd2f20fa9cc41773a339ceb658a5d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Artist:base_artist.html.twig", "YallaWebsiteBackendBundle:Artist:show.html.twig", 1);
        $this->blocks = array(
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Artist:base_artist.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b491bd15ce842cab7fa5994abf9440e61fe0c383f07383e84a7706c6f15911ab = $this->env->getExtension("native_profiler");
        $__internal_b491bd15ce842cab7fa5994abf9440e61fe0c383f07383e84a7706c6f15911ab->enter($__internal_b491bd15ce842cab7fa5994abf9440e61fe0c383f07383e84a7706c6f15911ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Artist:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b491bd15ce842cab7fa5994abf9440e61fe0c383f07383e84a7706c6f15911ab->leave($__internal_b491bd15ce842cab7fa5994abf9440e61fe0c383f07383e84a7706c6f15911ab_prof);

    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_7b33a8f531d613d6396d63cdf753fe29cf3dede4a6a0def6916b634160adb1e0 = $this->env->getExtension("native_profiler");
        $__internal_7b33a8f531d613d6396d63cdf753fe29cf3dede4a6a0def6916b634160adb1e0->enter($__internal_7b33a8f531d613d6396d63cdf753fe29cf3dede4a6a0def6916b634160adb1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
        
        $__internal_7b33a8f531d613d6396d63cdf753fe29cf3dede4a6a0def6916b634160adb1e0->leave($__internal_7b33a8f531d613d6396d63cdf753fe29cf3dede4a6a0def6916b634160adb1e0_prof);

    }

    // line 6
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_a72b221e3e6d774358b9c3128e7eac8b3e53841f40caa7c84393985022a4ecef = $this->env->getExtension("native_profiler");
        $__internal_a72b221e3e6d774358b9c3128e7eac8b3e53841f40caa7c84393985022a4ecef->enter($__internal_a72b221e3e6d774358b9c3128e7eac8b3e53841f40caa7c84393985022a4ecef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 7
        echo "    <div class='col-md-8'>
        <strong>Name : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo " <br/>
            <strong>Biography: </strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "biography", array()), "html", null, true);
        echo " <br/>
            <strong>Social Media: </strong><br/>
            <p>
                ";
        // line 12
        $this->loadTemplate("@YallaWebsiteFrontendBundle/views/Template/artistSocialMedia.html.twig", "YallaWebsiteBackendBundle:Artist:show.html.twig", 12)->display($context);
        // line 13
        echo "            </p>
    </div>
    <div class=\"col-md-4\">
        ";
        // line 16
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "medium", array());
        // line 17
        echo "    </div>
";
        
        $__internal_a72b221e3e6d774358b9c3128e7eac8b3e53841f40caa7c84393985022a4ecef->leave($__internal_a72b221e3e6d774358b9c3128e7eac8b3e53841f40caa7c84393985022a4ecef_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Artist:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  81 => 16,  76 => 13,  74 => 12,  68 => 9,  64 => 8,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Artist:base_artist.html.twig" %}*/
/* {% block extraOptions %}*/
/*     <a href="{{ path ('backend_artist_edit', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Edit</button></a>*/
/*     <a href="{{ path ('backend_artist_delete', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Delete</button></a>*/
/* {% endblock %}*/
/* {% block controlleraction  %}*/
/*     <div class='col-md-8'>*/
/*         <strong>Name : {{entity.title}} <br/>*/
/*             <strong>Biography: </strong>{{entity.biography}} <br/>*/
/*             <strong>Social Media: </strong><br/>*/
/*             <p>*/
/*                 {% include '@YallaWebsiteFrontendBundle/views/Template/artistSocialMedia.html.twig'%}*/
/*             </p>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         {% thumbnail  entity.media, 'medium' %}*/
/*     </div>*/
/* {% endblock %}*/
