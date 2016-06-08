<?php

/* YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig */
class __TwigTemplate_89286c0953ac3674f2ef924bdf08d45d808903b3e4c22b729a4b56c6c36c86f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig", 1);
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
        $__internal_327e25e9c159f19e6768337fd3067e6f851bad42902779cff1d2370ba6e4010d = $this->env->getExtension("native_profiler");
        $__internal_327e25e9c159f19e6768337fd3067e6f851bad42902779cff1d2370ba6e4010d->enter($__internal_327e25e9c159f19e6768337fd3067e6f851bad42902779cff1d2370ba6e4010d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327e25e9c159f19e6768337fd3067e6f851bad42902779cff1d2370ba6e4010d->leave($__internal_327e25e9c159f19e6768337fd3067e6f851bad42902779cff1d2370ba6e4010d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd13ac12127e6b36d0621bf7df91cd636d6a16383857074a5349f9fb2d31ca56 = $this->env->getExtension("native_profiler");
        $__internal_dd13ac12127e6b36d0621bf7df91cd636d6a16383857074a5349f9fb2d31ca56->enter($__internal_dd13ac12127e6b36d0621bf7df91cd636d6a16383857074a5349f9fb2d31ca56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articles Section";
        
        $__internal_dd13ac12127e6b36d0621bf7df91cd636d6a16383857074a5349f9fb2d31ca56->leave($__internal_dd13ac12127e6b36d0621bf7df91cd636d6a16383857074a5349f9fb2d31ca56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ffc6bf901af1dae091c57cc5cbd5acc3f9c000ff779dfc7ba2f5ff6a01741fd = $this->env->getExtension("native_profiler");
        $__internal_0ffc6bf901af1dae091c57cc5cbd5acc3f9c000ff779dfc7ba2f5ff6a01741fd->enter($__internal_0ffc6bf901af1dae091c57cc5cbd5acc3f9c000ff779dfc7ba2f5ff6a01741fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Articles</h4>
        </div>
    </div>
    <div>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("backend_photographer_new");
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Create Photographer</button></a>
    ";
        // line 11
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 12
        echo "</div>
";
        // line 13
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_0ffc6bf901af1dae091c57cc5cbd5acc3f9c000ff779dfc7ba2f5ff6a01741fd->leave($__internal_0ffc6bf901af1dae091c57cc5cbd5acc3f9c000ff779dfc7ba2f5ff6a01741fd_prof);

    }

    // line 11
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_ba897b7fc4a93859b30fe5d6aa27787c4dcb94d0e0f42bab381a839360fbce75 = $this->env->getExtension("native_profiler");
        $__internal_ba897b7fc4a93859b30fe5d6aa27787c4dcb94d0e0f42bab381a839360fbce75->enter($__internal_ba897b7fc4a93859b30fe5d6aa27787c4dcb94d0e0f42bab381a839360fbce75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_ba897b7fc4a93859b30fe5d6aa27787c4dcb94d0e0f42bab381a839360fbce75->leave($__internal_ba897b7fc4a93859b30fe5d6aa27787c4dcb94d0e0f42bab381a839360fbce75_prof);

    }

    // line 13
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_a0588a0bc2d7b3520766b744d918423fdee67ae71baa8d4898f1802b1e050c96 = $this->env->getExtension("native_profiler");
        $__internal_a0588a0bc2d7b3520766b744d918423fdee67ae71baa8d4898f1802b1e050c96->enter($__internal_a0588a0bc2d7b3520766b744d918423fdee67ae71baa8d4898f1802b1e050c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_a0588a0bc2d7b3520766b744d918423fdee67ae71baa8d4898f1802b1e050c96->leave($__internal_a0588a0bc2d7b3520766b744d918423fdee67ae71baa8d4898f1802b1e050c96_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 13,  79 => 11,  72 => 13,  69 => 12,  67 => 11,  63 => 10,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Articles Section{% endblock %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Articles</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a href="{{ path ('backend_photographer_new')}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Create Photographer</button></a>*/
/*     {% block extraOptions %}{% endblock %}*/
/* </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
