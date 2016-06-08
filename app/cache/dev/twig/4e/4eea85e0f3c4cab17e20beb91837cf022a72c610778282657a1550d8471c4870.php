<?php

/* YallaWebsiteBackendBundle:Artist:base_artist.html.twig */
class __TwigTemplate_4aac324cfb4769d1d95ab944ede5c8977be9adb25c66c5921713e807b0ba517a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Artist:base_artist.html.twig", 1);
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
        $__internal_7ee67d5d5bc80ca21620296f0a27b8e886dd39594352ed00646f1f5ac9264cb6 = $this->env->getExtension("native_profiler");
        $__internal_7ee67d5d5bc80ca21620296f0a27b8e886dd39594352ed00646f1f5ac9264cb6->enter($__internal_7ee67d5d5bc80ca21620296f0a27b8e886dd39594352ed00646f1f5ac9264cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Artist:base_artist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee67d5d5bc80ca21620296f0a27b8e886dd39594352ed00646f1f5ac9264cb6->leave($__internal_7ee67d5d5bc80ca21620296f0a27b8e886dd39594352ed00646f1f5ac9264cb6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a08d5c12cb49ab2165bf0bfe47c270c229ca7ae8b84234fe4500a5f571873065 = $this->env->getExtension("native_profiler");
        $__internal_a08d5c12cb49ab2165bf0bfe47c270c229ca7ae8b84234fe4500a5f571873065->enter($__internal_a08d5c12cb49ab2165bf0bfe47c270c229ca7ae8b84234fe4500a5f571873065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artist Section";
        
        $__internal_a08d5c12cb49ab2165bf0bfe47c270c229ca7ae8b84234fe4500a5f571873065->leave($__internal_a08d5c12cb49ab2165bf0bfe47c270c229ca7ae8b84234fe4500a5f571873065_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eb8ded97e4db0fa7af9a44d9064ec1dfce94ebd94d45aff916a18f168b616d1 = $this->env->getExtension("native_profiler");
        $__internal_9eb8ded97e4db0fa7af9a44d9064ec1dfce94ebd94d45aff916a18f168b616d1->enter($__internal_9eb8ded97e4db0fa7af9a44d9064ec1dfce94ebd94d45aff916a18f168b616d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Artists</h4>
        </div>
    </div>
    <div>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("backend_artist_new");
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Create New</button></a>
        ";
        // line 12
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 13
        echo "    </div>
";
        // line 14
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_9eb8ded97e4db0fa7af9a44d9064ec1dfce94ebd94d45aff916a18f168b616d1->leave($__internal_9eb8ded97e4db0fa7af9a44d9064ec1dfce94ebd94d45aff916a18f168b616d1_prof);

    }

    // line 12
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_d4a023e516b389e94018bbf9ca8bcbfeccc5278cf488184837f10b956a1f5dfa = $this->env->getExtension("native_profiler");
        $__internal_d4a023e516b389e94018bbf9ca8bcbfeccc5278cf488184837f10b956a1f5dfa->enter($__internal_d4a023e516b389e94018bbf9ca8bcbfeccc5278cf488184837f10b956a1f5dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_d4a023e516b389e94018bbf9ca8bcbfeccc5278cf488184837f10b956a1f5dfa->leave($__internal_d4a023e516b389e94018bbf9ca8bcbfeccc5278cf488184837f10b956a1f5dfa_prof);

    }

    // line 14
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_5bda6f18cf35c6b78bd142959939bc6dc8921b053ac3230571902e1bf496f363 = $this->env->getExtension("native_profiler");
        $__internal_5bda6f18cf35c6b78bd142959939bc6dc8921b053ac3230571902e1bf496f363->enter($__internal_5bda6f18cf35c6b78bd142959939bc6dc8921b053ac3230571902e1bf496f363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_5bda6f18cf35c6b78bd142959939bc6dc8921b053ac3230571902e1bf496f363->leave($__internal_5bda6f18cf35c6b78bd142959939bc6dc8921b053ac3230571902e1bf496f363_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Artist:base_artist.html.twig";
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
/* {% block title %}Artist Section{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Artists</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a href="{{ path ('backend_artist_new')}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Create New</button></a>*/
/*         {% block extraOptions %}{% endblock %}*/
/*     </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
