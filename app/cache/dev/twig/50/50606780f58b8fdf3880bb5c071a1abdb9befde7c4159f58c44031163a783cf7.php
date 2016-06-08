<?php

/* YallaWebsiteBackendBundle:Member:base_member.html.twig */
class __TwigTemplate_dbb08146a057bd9b7fd036ab24c4bb1d131f728485f8b8a0b1e7f90a81dacb64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Member:base_member.html.twig", 1);
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
        $__internal_743198b4e28ceac078631cde8e20e2084336e43685712bdf3ca24af9667664f8 = $this->env->getExtension("native_profiler");
        $__internal_743198b4e28ceac078631cde8e20e2084336e43685712bdf3ca24af9667664f8->enter($__internal_743198b4e28ceac078631cde8e20e2084336e43685712bdf3ca24af9667664f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Member:base_member.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743198b4e28ceac078631cde8e20e2084336e43685712bdf3ca24af9667664f8->leave($__internal_743198b4e28ceac078631cde8e20e2084336e43685712bdf3ca24af9667664f8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2b4c53e955736ff9410e04517f0bf9bd20e3f10627660c4c9697aed0a61578f = $this->env->getExtension("native_profiler");
        $__internal_e2b4c53e955736ff9410e04517f0bf9bd20e3f10627660c4c9697aed0a61578f->enter($__internal_e2b4c53e955736ff9410e04517f0bf9bd20e3f10627660c4c9697aed0a61578f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Member Section";
        
        $__internal_e2b4c53e955736ff9410e04517f0bf9bd20e3f10627660c4c9697aed0a61578f->leave($__internal_e2b4c53e955736ff9410e04517f0bf9bd20e3f10627660c4c9697aed0a61578f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_02404c40722f61ea421971240e3381cb2f2b959ee66009b49c46930a310dc37f = $this->env->getExtension("native_profiler");
        $__internal_02404c40722f61ea421971240e3381cb2f2b959ee66009b49c46930a310dc37f->enter($__internal_02404c40722f61ea421971240e3381cb2f2b959ee66009b49c46930a310dc37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Members</h4>
        </div>
    </div>
    <div>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("backend_member_new");
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Create New</button></a>
        ";
        // line 12
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 13
        echo "    </div>
";
        // line 14
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_02404c40722f61ea421971240e3381cb2f2b959ee66009b49c46930a310dc37f->leave($__internal_02404c40722f61ea421971240e3381cb2f2b959ee66009b49c46930a310dc37f_prof);

    }

    // line 12
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_3b76c44df41174c6b3825c0562e69d072b00daf85ee72fd5786454414c259f9f = $this->env->getExtension("native_profiler");
        $__internal_3b76c44df41174c6b3825c0562e69d072b00daf85ee72fd5786454414c259f9f->enter($__internal_3b76c44df41174c6b3825c0562e69d072b00daf85ee72fd5786454414c259f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_3b76c44df41174c6b3825c0562e69d072b00daf85ee72fd5786454414c259f9f->leave($__internal_3b76c44df41174c6b3825c0562e69d072b00daf85ee72fd5786454414c259f9f_prof);

    }

    // line 14
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_15416ee16c63d3db90290d4e39f9fb345fc6c14b591e179fff7044c19f5f71a9 = $this->env->getExtension("native_profiler");
        $__internal_15416ee16c63d3db90290d4e39f9fb345fc6c14b591e179fff7044c19f5f71a9->enter($__internal_15416ee16c63d3db90290d4e39f9fb345fc6c14b591e179fff7044c19f5f71a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_15416ee16c63d3db90290d4e39f9fb345fc6c14b591e179fff7044c19f5f71a9->leave($__internal_15416ee16c63d3db90290d4e39f9fb345fc6c14b591e179fff7044c19f5f71a9_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Member:base_member.html.twig";
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
/* {% block title %}Member Section{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Members</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a href="{{ path ('backend_member_new')}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Create New</button></a>*/
/*         {% block extraOptions %}{% endblock %}*/
/*     </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
