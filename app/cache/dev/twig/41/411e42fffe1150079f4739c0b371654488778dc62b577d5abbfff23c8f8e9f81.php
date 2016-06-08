<?php

/* YallaWebsiteBackendBundle:Venue:base_venue.html.twig */
class __TwigTemplate_9f9c4c409349018c46ca81168fc2c2d97affb889ca698e0f13f81b47a0054ee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Venue:base_venue.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24a34d137bd87ec5b17c740f8b6eeda2a4611a0e523da16478727a5630655d31 = $this->env->getExtension("native_profiler");
        $__internal_24a34d137bd87ec5b17c740f8b6eeda2a4611a0e523da16478727a5630655d31->enter($__internal_24a34d137bd87ec5b17c740f8b6eeda2a4611a0e523da16478727a5630655d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Venue:base_venue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a34d137bd87ec5b17c740f8b6eeda2a4611a0e523da16478727a5630655d31->leave($__internal_24a34d137bd87ec5b17c740f8b6eeda2a4611a0e523da16478727a5630655d31_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2247fc2117c6620108ab20e8f7f92dab54c1d5238da59fec49c802e8f2b5722 = $this->env->getExtension("native_profiler");
        $__internal_d2247fc2117c6620108ab20e8f7f92dab54c1d5238da59fec49c802e8f2b5722->enter($__internal_d2247fc2117c6620108ab20e8f7f92dab54c1d5238da59fec49c802e8f2b5722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Venue Section";
        
        $__internal_d2247fc2117c6620108ab20e8f7f92dab54c1d5238da59fec49c802e8f2b5722->leave($__internal_d2247fc2117c6620108ab20e8f7f92dab54c1d5238da59fec49c802e8f2b5722_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_85d14a83fb4a8e7f23c995d9251a1255b288332dacdf1cea00123814790ebeb2 = $this->env->getExtension("native_profiler");
        $__internal_85d14a83fb4a8e7f23c995d9251a1255b288332dacdf1cea00123814790ebeb2->enter($__internal_85d14a83fb4a8e7f23c995d9251a1255b288332dacdf1cea00123814790ebeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Venues</h4>
        </div>
    </div>
    <div>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("backend_venue_new");
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Create New</button></a>
        ";
        // line 12
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 13
        echo "    </div>
";
        // line 14
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_85d14a83fb4a8e7f23c995d9251a1255b288332dacdf1cea00123814790ebeb2->leave($__internal_85d14a83fb4a8e7f23c995d9251a1255b288332dacdf1cea00123814790ebeb2_prof);

    }

    // line 12
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_6733988732a7a20d9e9a09fac079f726f11aef6ebd912cac1d1731fb5ba9fefe = $this->env->getExtension("native_profiler");
        $__internal_6733988732a7a20d9e9a09fac079f726f11aef6ebd912cac1d1731fb5ba9fefe->enter($__internal_6733988732a7a20d9e9a09fac079f726f11aef6ebd912cac1d1731fb5ba9fefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_6733988732a7a20d9e9a09fac079f726f11aef6ebd912cac1d1731fb5ba9fefe->leave($__internal_6733988732a7a20d9e9a09fac079f726f11aef6ebd912cac1d1731fb5ba9fefe_prof);

    }

    // line 14
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_764ed07d2630eaffcb697b0c4b9f889377c9ad36aac55ee06a54e98b7ed74788 = $this->env->getExtension("native_profiler");
        $__internal_764ed07d2630eaffcb697b0c4b9f889377c9ad36aac55ee06a54e98b7ed74788->enter($__internal_764ed07d2630eaffcb697b0c4b9f889377c9ad36aac55ee06a54e98b7ed74788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_764ed07d2630eaffcb697b0c4b9f889377c9ad36aac55ee06a54e98b7ed74788->leave($__internal_764ed07d2630eaffcb697b0c4b9f889377c9ad36aac55ee06a54e98b7ed74788_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Venue:base_venue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  79 => 12,  72 => 14,  69 => 13,  67 => 12,  63 => 11,  55 => 5,  49 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Venue Section{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Venues</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a href="{{ path ('backend_venue_new')}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Create New</button></a>*/
/*         {% block extraOptions %}{% endblock %}*/
/*     </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
