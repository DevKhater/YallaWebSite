<?php

/* YallaWebsiteBackendBundle:Profile:show.html.twig */
class __TwigTemplate_af96844cd78f5305d694b151f71d4fcde921f9dfb650ae4dcfb7e0fbfa32d405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Venue:base_venue.html.twig", "YallaWebsiteBackendBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Venue:base_venue.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_087b7bec2e98f511c35c9cf3c053666ccf7a418c648ca27361fa1d7681e3f286 = $this->env->getExtension("native_profiler");
        $__internal_087b7bec2e98f511c35c9cf3c053666ccf7a418c648ca27361fa1d7681e3f286->enter($__internal_087b7bec2e98f511c35c9cf3c053666ccf7a418c648ca27361fa1d7681e3f286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_087b7bec2e98f511c35c9cf3c053666ccf7a418c648ca27361fa1d7681e3f286->leave($__internal_087b7bec2e98f511c35c9cf3c053666ccf7a418c648ca27361fa1d7681e3f286_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_f10a4f275872ab80847dfc021e70c583511f339fb9e599998aa504559d5bcb03 = $this->env->getExtension("native_profiler");
        $__internal_f10a4f275872ab80847dfc021e70c583511f339fb9e599998aa504559d5bcb03->enter($__internal_f10a4f275872ab80847dfc021e70c583511f339fb9e599998aa504559d5bcb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"row\">
        <div class='col-md-12'>
            <a href='";
        // line 5
        echo $this->env->getExtension('routing')->getPath("backend_profile_edit");
        echo "'><span class=\"label label-primary\">Edit</span></a>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-8'>
            Name : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "displayName", array()), "html", null, true);
        echo " 
        </div>
        <div class=\"col-md-4\">
            ";
        // line 13
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "small", array());
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_f10a4f275872ab80847dfc021e70c583511f339fb9e599998aa504559d5bcb03->leave($__internal_f10a4f275872ab80847dfc021e70c583511f339fb9e599998aa504559d5bcb03_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  58 => 13,  52 => 10,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Venue:base_venue.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*         <div class='col-md-12'>*/
/*             <a href='{{ path ('backend_profile_edit')}}'><span class="label label-primary">Edit</span></a>*/
/*         </div>*/
/*     </div>*/
/*     <div class='row'>*/
/*         <div class='col-md-8'>*/
/*             Name : {{entity.displayName}} */
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% thumbnail  entity.media, 'small' %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
