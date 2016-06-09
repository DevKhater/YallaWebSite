<?php

/* YallaWebsiteBackendBundle:Profile:show.html.twig */
class __TwigTemplate_f2daeae52d89fc1fa87f7a190e732681909857c8f79c9c704c5eabb90778368b extends Twig_Template
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
        $__internal_a3c65e09c0ba9a9a53ce08d716ed58a836f84c80691c9e5e1ef799faccc46dac = $this->env->getExtension("native_profiler");
        $__internal_a3c65e09c0ba9a9a53ce08d716ed58a836f84c80691c9e5e1ef799faccc46dac->enter($__internal_a3c65e09c0ba9a9a53ce08d716ed58a836f84c80691c9e5e1ef799faccc46dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c65e09c0ba9a9a53ce08d716ed58a836f84c80691c9e5e1ef799faccc46dac->leave($__internal_a3c65e09c0ba9a9a53ce08d716ed58a836f84c80691c9e5e1ef799faccc46dac_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_3b3d244c9932c568d9b0a09adc515676c5101f0416e16afc478b6407c4769a43 = $this->env->getExtension("native_profiler");
        $__internal_3b3d244c9932c568d9b0a09adc515676c5101f0416e16afc478b6407c4769a43->enter($__internal_3b3d244c9932c568d9b0a09adc515676c5101f0416e16afc478b6407c4769a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_3b3d244c9932c568d9b0a09adc515676c5101f0416e16afc478b6407c4769a43->leave($__internal_3b3d244c9932c568d9b0a09adc515676c5101f0416e16afc478b6407c4769a43_prof);

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
