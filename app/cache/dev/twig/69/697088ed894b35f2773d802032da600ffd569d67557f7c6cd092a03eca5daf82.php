<?php

/* YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig */
class __TwigTemplate_edd4f72a6bdcb02f6fccdeae03f1a3032829a5aec23cf0c4c433c6825e4ab57d extends Twig_Template
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
        $__internal_93d1e8c4ab4956a4e2f4966605df964744deda1a55f332c57b50c14fbaa59f90 = $this->env->getExtension("native_profiler");
        $__internal_93d1e8c4ab4956a4e2f4966605df964744deda1a55f332c57b50c14fbaa59f90->enter($__internal_93d1e8c4ab4956a4e2f4966605df964744deda1a55f332c57b50c14fbaa59f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d1e8c4ab4956a4e2f4966605df964744deda1a55f332c57b50c14fbaa59f90->leave($__internal_93d1e8c4ab4956a4e2f4966605df964744deda1a55f332c57b50c14fbaa59f90_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3499225a95bdbbc72307eab44d9ab2a602fad9e473a6c7d1a16ad1062bccfb8 = $this->env->getExtension("native_profiler");
        $__internal_f3499225a95bdbbc72307eab44d9ab2a602fad9e473a6c7d1a16ad1062bccfb8->enter($__internal_f3499225a95bdbbc72307eab44d9ab2a602fad9e473a6c7d1a16ad1062bccfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articles Section";
        
        $__internal_f3499225a95bdbbc72307eab44d9ab2a602fad9e473a6c7d1a16ad1062bccfb8->leave($__internal_f3499225a95bdbbc72307eab44d9ab2a602fad9e473a6c7d1a16ad1062bccfb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa8304c19151d9ac2624c9d2d38c46991849c1784c156e08dca4d59dde5d9681 = $this->env->getExtension("native_profiler");
        $__internal_aa8304c19151d9ac2624c9d2d38c46991849c1784c156e08dca4d59dde5d9681->enter($__internal_aa8304c19151d9ac2624c9d2d38c46991849c1784c156e08dca4d59dde5d9681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa8304c19151d9ac2624c9d2d38c46991849c1784c156e08dca4d59dde5d9681->leave($__internal_aa8304c19151d9ac2624c9d2d38c46991849c1784c156e08dca4d59dde5d9681_prof);

    }

    // line 11
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_e1e654820ceaa3a31eb927c2af2fc67e486e69bf6094aceb2e596df5c3dbde40 = $this->env->getExtension("native_profiler");
        $__internal_e1e654820ceaa3a31eb927c2af2fc67e486e69bf6094aceb2e596df5c3dbde40->enter($__internal_e1e654820ceaa3a31eb927c2af2fc67e486e69bf6094aceb2e596df5c3dbde40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_e1e654820ceaa3a31eb927c2af2fc67e486e69bf6094aceb2e596df5c3dbde40->leave($__internal_e1e654820ceaa3a31eb927c2af2fc67e486e69bf6094aceb2e596df5c3dbde40_prof);

    }

    // line 13
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_bedc9d57a1766384a9106ac446054ddaa03904cd624fd74c9b94101684d5cb20 = $this->env->getExtension("native_profiler");
        $__internal_bedc9d57a1766384a9106ac446054ddaa03904cd624fd74c9b94101684d5cb20->enter($__internal_bedc9d57a1766384a9106ac446054ddaa03904cd624fd74c9b94101684d5cb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_bedc9d57a1766384a9106ac446054ddaa03904cd624fd74c9b94101684d5cb20->leave($__internal_bedc9d57a1766384a9106ac446054ddaa03904cd624fd74c9b94101684d5cb20_prof);

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
