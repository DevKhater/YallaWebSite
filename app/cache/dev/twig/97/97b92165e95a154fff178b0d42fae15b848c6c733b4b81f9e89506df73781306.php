<?php

/* YallaWebsiteBackendBundle:Profile:base_profile.html.twig */
class __TwigTemplate_885c341fe74f5f0db983259ef88632f8656798c748fe6ae6321ff47a0b6fcbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Profile:base_profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'extraOptions' => array($this, 'block_extraOptions'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fd24112d7675260368c537f0c222d8beb7192e91a02ec4d37f21732acdea596 = $this->env->getExtension("native_profiler");
        $__internal_2fd24112d7675260368c537f0c222d8beb7192e91a02ec4d37f21732acdea596->enter($__internal_2fd24112d7675260368c537f0c222d8beb7192e91a02ec4d37f21732acdea596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Profile:base_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd24112d7675260368c537f0c222d8beb7192e91a02ec4d37f21732acdea596->leave($__internal_2fd24112d7675260368c537f0c222d8beb7192e91a02ec4d37f21732acdea596_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1493dd40eb6a576090b4037047ea1e688ee99909cfabcc5b66b911e5fba42502 = $this->env->getExtension("native_profiler");
        $__internal_1493dd40eb6a576090b4037047ea1e688ee99909cfabcc5b66b911e5fba42502->enter($__internal_1493dd40eb6a576090b4037047ea1e688ee99909cfabcc5b66b911e5fba42502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profile Section";
        
        $__internal_1493dd40eb6a576090b4037047ea1e688ee99909cfabcc5b66b911e5fba42502->leave($__internal_1493dd40eb6a576090b4037047ea1e688ee99909cfabcc5b66b911e5fba42502_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcd81fb7065efe68e0ab8b8f012bf1349586ff252f380f6f5b520ea7b9160497 = $this->env->getExtension("native_profiler");
        $__internal_fcd81fb7065efe68e0ab8b8f012bf1349586ff252f380f6f5b520ea7b9160497->enter($__internal_fcd81fb7065efe68e0ab8b8f012bf1349586ff252f380f6f5b520ea7b9160497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fcd81fb7065efe68e0ab8b8f012bf1349586ff252f380f6f5b520ea7b9160497->leave($__internal_fcd81fb7065efe68e0ab8b8f012bf1349586ff252f380f6f5b520ea7b9160497_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_522303757a6d06872c277c1ffb2f87df94e7522ef70ab5881e2753bfc9c8f152 = $this->env->getExtension("native_profiler");
        $__internal_522303757a6d06872c277c1ffb2f87df94e7522ef70ab5881e2753bfc9c8f152->enter($__internal_522303757a6d06872c277c1ffb2f87df94e7522ef70ab5881e2753bfc9c8f152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Profile</h4>
        </div>
    </div>
        <div id=\"edit_profile_div_head\">
        <a href='";
        // line 12
        echo $this->env->getExtension('routing')->getPath("backend_profile_edit");
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i>Edit Profile</button></a>
        ";
        // line 13
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 14
        echo "    </div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_522303757a6d06872c277c1ffb2f87df94e7522ef70ab5881e2753bfc9c8f152->leave($__internal_522303757a6d06872c277c1ffb2f87df94e7522ef70ab5881e2753bfc9c8f152_prof);

    }

    // line 13
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_4227fd4e4b405152390ccca38947ab1969aae3e7682616bcf729f92bbf6c0b83 = $this->env->getExtension("native_profiler");
        $__internal_4227fd4e4b405152390ccca38947ab1969aae3e7682616bcf729f92bbf6c0b83->enter($__internal_4227fd4e4b405152390ccca38947ab1969aae3e7682616bcf729f92bbf6c0b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_4227fd4e4b405152390ccca38947ab1969aae3e7682616bcf729f92bbf6c0b83->leave($__internal_4227fd4e4b405152390ccca38947ab1969aae3e7682616bcf729f92bbf6c0b83_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be31d626d54956c065d03f97473975d6a612956b04aee88716ffa40458d417a4 = $this->env->getExtension("native_profiler");
        $__internal_be31d626d54956c065d03f97473975d6a612956b04aee88716ffa40458d417a4->enter($__internal_be31d626d54956c065d03f97473975d6a612956b04aee88716ffa40458d417a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_be31d626d54956c065d03f97473975d6a612956b04aee88716ffa40458d417a4->leave($__internal_be31d626d54956c065d03f97473975d6a612956b04aee88716ffa40458d417a4_prof);

    }

    // line 16
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_a2e51b4c5670f7cd2f2abb350f61e53b3cd93241e4679d576555165af0049dbf = $this->env->getExtension("native_profiler");
        $__internal_a2e51b4c5670f7cd2f2abb350f61e53b3cd93241e4679d576555165af0049dbf->enter($__internal_a2e51b4c5670f7cd2f2abb350f61e53b3cd93241e4679d576555165af0049dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_a2e51b4c5670f7cd2f2abb350f61e53b3cd93241e4679d576555165af0049dbf->leave($__internal_a2e51b4c5670f7cd2f2abb350f61e53b3cd93241e4679d576555165af0049dbf_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Profile:base_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 16,  105 => 15,  94 => 13,  87 => 16,  85 => 15,  82 => 14,  80 => 13,  76 => 12,  68 => 6,  62 => 5,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Profile Section{% endblock %}*/
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Profile</h4>*/
/*         </div>*/
/*     </div>*/
/*         <div id="edit_profile_div_head">*/
/*         <a href='{{ path ('backend_profile_edit')}}'><button class="btn btn-primary create_new"><i class="fa fa-edit "></i>Edit Profile</button></a>*/
/*         {% block extraOptions %}{% endblock %}*/
/*     </div>*/
/*         {% block fos_user_content %}{% endblock %}*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
/* */
/* */
