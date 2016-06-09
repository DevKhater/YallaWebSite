<?php

/* YallaWebsiteBackendBundle:Artist:base_artist.html.twig */
class __TwigTemplate_1f007e2f835ae4ef08176b049330eea802ac362939dba5c3fa1bb7083d1cadc2 extends Twig_Template
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
        $__internal_4cc1d31b6f2a8acfcaec4dee81d4a2d9c35e5c4e310531738dd3b45e09fedbd7 = $this->env->getExtension("native_profiler");
        $__internal_4cc1d31b6f2a8acfcaec4dee81d4a2d9c35e5c4e310531738dd3b45e09fedbd7->enter($__internal_4cc1d31b6f2a8acfcaec4dee81d4a2d9c35e5c4e310531738dd3b45e09fedbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Artist:base_artist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc1d31b6f2a8acfcaec4dee81d4a2d9c35e5c4e310531738dd3b45e09fedbd7->leave($__internal_4cc1d31b6f2a8acfcaec4dee81d4a2d9c35e5c4e310531738dd3b45e09fedbd7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9f8cd658642052b6205c4f9662039d3c3baa9094e4b2294bb569f93a31f2d0e = $this->env->getExtension("native_profiler");
        $__internal_e9f8cd658642052b6205c4f9662039d3c3baa9094e4b2294bb569f93a31f2d0e->enter($__internal_e9f8cd658642052b6205c4f9662039d3c3baa9094e4b2294bb569f93a31f2d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artist Section";
        
        $__internal_e9f8cd658642052b6205c4f9662039d3c3baa9094e4b2294bb569f93a31f2d0e->leave($__internal_e9f8cd658642052b6205c4f9662039d3c3baa9094e4b2294bb569f93a31f2d0e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a06a3c0cc2ef7b77db3c6bbeef32bb8677b9fe7c0435be5e5cd15baeb5ae8253 = $this->env->getExtension("native_profiler");
        $__internal_a06a3c0cc2ef7b77db3c6bbeef32bb8677b9fe7c0435be5e5cd15baeb5ae8253->enter($__internal_a06a3c0cc2ef7b77db3c6bbeef32bb8677b9fe7c0435be5e5cd15baeb5ae8253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a06a3c0cc2ef7b77db3c6bbeef32bb8677b9fe7c0435be5e5cd15baeb5ae8253->leave($__internal_a06a3c0cc2ef7b77db3c6bbeef32bb8677b9fe7c0435be5e5cd15baeb5ae8253_prof);

    }

    // line 12
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_7468cb215debfb46f181dbc65dfcc9de5d32e7f536cc655a54aad50262380415 = $this->env->getExtension("native_profiler");
        $__internal_7468cb215debfb46f181dbc65dfcc9de5d32e7f536cc655a54aad50262380415->enter($__internal_7468cb215debfb46f181dbc65dfcc9de5d32e7f536cc655a54aad50262380415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_7468cb215debfb46f181dbc65dfcc9de5d32e7f536cc655a54aad50262380415->leave($__internal_7468cb215debfb46f181dbc65dfcc9de5d32e7f536cc655a54aad50262380415_prof);

    }

    // line 14
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_77294ed18dc9dc70d58bbda35e2cbc2fcf31cc47d2cdb1e7e781c2b9850f31e5 = $this->env->getExtension("native_profiler");
        $__internal_77294ed18dc9dc70d58bbda35e2cbc2fcf31cc47d2cdb1e7e781c2b9850f31e5->enter($__internal_77294ed18dc9dc70d58bbda35e2cbc2fcf31cc47d2cdb1e7e781c2b9850f31e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_77294ed18dc9dc70d58bbda35e2cbc2fcf31cc47d2cdb1e7e781c2b9850f31e5->leave($__internal_77294ed18dc9dc70d58bbda35e2cbc2fcf31cc47d2cdb1e7e781c2b9850f31e5_prof);

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
