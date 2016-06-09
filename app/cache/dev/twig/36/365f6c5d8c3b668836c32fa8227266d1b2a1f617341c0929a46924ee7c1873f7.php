<?php

/* YallaWebsiteBackendBundle:Venue:base_venue.html.twig */
class __TwigTemplate_ae8db5a6fe562276631ee1ca70f0f1667b3bbd9bae325b694f66a24d53408182 extends Twig_Template
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
        $__internal_1845e8b4937a2bc95a65104c7be7b1194c490d5b5d68106828d8c2648c225b35 = $this->env->getExtension("native_profiler");
        $__internal_1845e8b4937a2bc95a65104c7be7b1194c490d5b5d68106828d8c2648c225b35->enter($__internal_1845e8b4937a2bc95a65104c7be7b1194c490d5b5d68106828d8c2648c225b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Venue:base_venue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1845e8b4937a2bc95a65104c7be7b1194c490d5b5d68106828d8c2648c225b35->leave($__internal_1845e8b4937a2bc95a65104c7be7b1194c490d5b5d68106828d8c2648c225b35_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4adaa1d73bf8dcf8b17c22ee01c8438ef4c5ebe894e13ad9f83057747262ae80 = $this->env->getExtension("native_profiler");
        $__internal_4adaa1d73bf8dcf8b17c22ee01c8438ef4c5ebe894e13ad9f83057747262ae80->enter($__internal_4adaa1d73bf8dcf8b17c22ee01c8438ef4c5ebe894e13ad9f83057747262ae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Venue Section";
        
        $__internal_4adaa1d73bf8dcf8b17c22ee01c8438ef4c5ebe894e13ad9f83057747262ae80->leave($__internal_4adaa1d73bf8dcf8b17c22ee01c8438ef4c5ebe894e13ad9f83057747262ae80_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f3cf02126b786955280f4b3f3f02cb092dc67134104af2db1d7066b8010b8aa = $this->env->getExtension("native_profiler");
        $__internal_0f3cf02126b786955280f4b3f3f02cb092dc67134104af2db1d7066b8010b8aa->enter($__internal_0f3cf02126b786955280f4b3f3f02cb092dc67134104af2db1d7066b8010b8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f3cf02126b786955280f4b3f3f02cb092dc67134104af2db1d7066b8010b8aa->leave($__internal_0f3cf02126b786955280f4b3f3f02cb092dc67134104af2db1d7066b8010b8aa_prof);

    }

    // line 12
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_aa97d37871de2c6d60cb325cd46b02ae1d84c00daee7645438d12e097c732789 = $this->env->getExtension("native_profiler");
        $__internal_aa97d37871de2c6d60cb325cd46b02ae1d84c00daee7645438d12e097c732789->enter($__internal_aa97d37871de2c6d60cb325cd46b02ae1d84c00daee7645438d12e097c732789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_aa97d37871de2c6d60cb325cd46b02ae1d84c00daee7645438d12e097c732789->leave($__internal_aa97d37871de2c6d60cb325cd46b02ae1d84c00daee7645438d12e097c732789_prof);

    }

    // line 14
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_86abbe41cdc9bc7f8e38ff8e5e7be0c1b0538d1ea2c94f055a2ac1c5bfad878d = $this->env->getExtension("native_profiler");
        $__internal_86abbe41cdc9bc7f8e38ff8e5e7be0c1b0538d1ea2c94f055a2ac1c5bfad878d->enter($__internal_86abbe41cdc9bc7f8e38ff8e5e7be0c1b0538d1ea2c94f055a2ac1c5bfad878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_86abbe41cdc9bc7f8e38ff8e5e7be0c1b0538d1ea2c94f055a2ac1c5bfad878d->leave($__internal_86abbe41cdc9bc7f8e38ff8e5e7be0c1b0538d1ea2c94f055a2ac1c5bfad878d_prof);

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
