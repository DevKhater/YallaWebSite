<?php

/* YallaWebsiteBackendBundle:Member:base_member.html.twig */
class __TwigTemplate_70684942bd69e789403f3b06463cd48d6197047ac01a4ce8e059df2541b9aacb extends Twig_Template
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
        $__internal_6f386ea50ac5277cc2533613d9f2e5d8d21d35e6c09a0fc6ad4835288bd380ff = $this->env->getExtension("native_profiler");
        $__internal_6f386ea50ac5277cc2533613d9f2e5d8d21d35e6c09a0fc6ad4835288bd380ff->enter($__internal_6f386ea50ac5277cc2533613d9f2e5d8d21d35e6c09a0fc6ad4835288bd380ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Member:base_member.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f386ea50ac5277cc2533613d9f2e5d8d21d35e6c09a0fc6ad4835288bd380ff->leave($__internal_6f386ea50ac5277cc2533613d9f2e5d8d21d35e6c09a0fc6ad4835288bd380ff_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3931bc799ca9854759f9189cf405172e0a69c9c1e148413d85c34d3a8286467d = $this->env->getExtension("native_profiler");
        $__internal_3931bc799ca9854759f9189cf405172e0a69c9c1e148413d85c34d3a8286467d->enter($__internal_3931bc799ca9854759f9189cf405172e0a69c9c1e148413d85c34d3a8286467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Member Section";
        
        $__internal_3931bc799ca9854759f9189cf405172e0a69c9c1e148413d85c34d3a8286467d->leave($__internal_3931bc799ca9854759f9189cf405172e0a69c9c1e148413d85c34d3a8286467d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b19d69c46a99903f6b4d77a0317e58909661ba44046abbf719782d8eaa0b011d = $this->env->getExtension("native_profiler");
        $__internal_b19d69c46a99903f6b4d77a0317e58909661ba44046abbf719782d8eaa0b011d->enter($__internal_b19d69c46a99903f6b4d77a0317e58909661ba44046abbf719782d8eaa0b011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b19d69c46a99903f6b4d77a0317e58909661ba44046abbf719782d8eaa0b011d->leave($__internal_b19d69c46a99903f6b4d77a0317e58909661ba44046abbf719782d8eaa0b011d_prof);

    }

    // line 12
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_662c399d90be1966e71c0731f7c6b21b34525780eddea42dfbd3115dd0a22fc2 = $this->env->getExtension("native_profiler");
        $__internal_662c399d90be1966e71c0731f7c6b21b34525780eddea42dfbd3115dd0a22fc2->enter($__internal_662c399d90be1966e71c0731f7c6b21b34525780eddea42dfbd3115dd0a22fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_662c399d90be1966e71c0731f7c6b21b34525780eddea42dfbd3115dd0a22fc2->leave($__internal_662c399d90be1966e71c0731f7c6b21b34525780eddea42dfbd3115dd0a22fc2_prof);

    }

    // line 14
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_81566d85aea35539d33e9e08bb761f51eb9bda3fe2508b9df67dcf54898a5cf0 = $this->env->getExtension("native_profiler");
        $__internal_81566d85aea35539d33e9e08bb761f51eb9bda3fe2508b9df67dcf54898a5cf0->enter($__internal_81566d85aea35539d33e9e08bb761f51eb9bda3fe2508b9df67dcf54898a5cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_81566d85aea35539d33e9e08bb761f51eb9bda3fe2508b9df67dcf54898a5cf0->leave($__internal_81566d85aea35539d33e9e08bb761f51eb9bda3fe2508b9df67dcf54898a5cf0_prof);

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
