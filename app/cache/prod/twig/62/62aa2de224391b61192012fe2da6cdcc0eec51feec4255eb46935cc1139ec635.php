<?php

/* YallaWebsiteBackendBundle:Venue:base_venue.html.twig */
class __TwigTemplate_ac6b9f79667d4958c3c951fa3e4e4fb50917eb545f6006ec399a86ca4ecb6d4e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Venue Section";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 12
    public function block_extraOptions($context, array $blocks = array())
    {
    }

    // line 14
    public function block_controlleraction($context, array $blocks = array())
    {
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
        return array (  66 => 14,  61 => 12,  57 => 14,  54 => 13,  52 => 12,  48 => 11,  40 => 5,  37 => 4,  31 => 2,  11 => 1,);
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
