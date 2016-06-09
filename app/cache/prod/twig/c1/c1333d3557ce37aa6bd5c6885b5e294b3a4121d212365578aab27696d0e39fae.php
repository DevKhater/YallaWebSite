<?php

/* YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig */
class __TwigTemplate_8bd14047362c280472c9af9ce2802ed84aa16198f1b2166bd017ece6cdda52fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Galleries Section";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/image-picker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Galleries</h4>
        </div>
    </div>
    <div>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("backend_gallery_new");
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Create New</button></a>
    ";
        // line 13
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 14
        echo "    ";
        if (array_key_exists("entity", $context)) {
            // line 15
            echo "        <div>
            <strong>Gallery Name : </strong>
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
            echo "</a><br/>
        ";
            // line 18
            if (array_key_exists("pagination", $context)) {
                if ( !twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : null))) {
                    echo "<strong>Number of Images : </strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
                    echo "<br/>";
                }
            }
            // line 19
            echo "
    </div>
    <div class='row'>
        <div class=\"col-md-12\" style=\"font: 20px;;\">
            <a href='";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "'><span class=\"label label-primary\">Add Tags/Chanege Gallery Name</span></a>    
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_add_images_gallery", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"label label-primary\">Add Images To Gallery</span></a>
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_set_preview", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"label label-primary\">Set Gallery Preview Image</span></a>
        </div>
    </div>
";
        }
        // line 29
        echo "</div>
";
        // line 30
        $this->displayBlock('controlleraction', $context, $blocks);
    }

    // line 13
    public function block_extraOptions($context, array $blocks = array())
    {
    }

    // line 30
    public function block_controlleraction($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/image-picker.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  126 => 34,  123 => 33,  118 => 30,  113 => 13,  109 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 23,  85 => 19,  77 => 18,  71 => 17,  67 => 15,  64 => 14,  62 => 13,  58 => 12,  50 => 6,  47 => 5,  39 => 4,  33 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Galleries Section{% endblock %}*/
/* */
/* {% block stylesheets %}    <link href="{{ asset ('css/image-picker.css') }}" rel="stylesheet"> {% endblock %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Galleries</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a href="{{ path ('backend_gallery_new')}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Create New</button></a>*/
/*     {% block extraOptions %}{% endblock %}*/
/*     {% if entity is defined %}*/
/*         <div>*/
/*             <strong>Gallery Name : </strong>*/
/*             <a href="{{path ('backend_gallery_show',  {'id': entity.id}) }}">{{entity.name}}</a><br/>*/
/*         {% if pagination is defined %}{% if pagination is not empty %}<strong>Number of Images : </strong>{{ pagination.getTotalItemCount }}<br/>{% endif %}{% endif %}*/
/* */
/*     </div>*/
/*     <div class='row'>*/
/*         <div class="col-md-12" style="font: 20px;;">*/
/*             <a href='{{ path ('backend_gallery_edit', {'id': entity.id})}}'><span class="label label-primary">Add Tags/Chanege Gallery Name</span></a>    */
/*             <a href="{{ path ('backend_gallery_add_images_gallery',  {'id': entity.id})}}"><span class="label label-primary">Add Images To Gallery</span></a>*/
/*             <a href="{{ path ('backend_gallery_set_preview',  {'id': entity.id})}}"><span class="label label-primary">Set Gallery Preview Image</span></a>*/
/*         </div>*/
/*     </div>*/
/* {%endif%}*/
/* </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent()}}*/
/*     <script src="{{ asset ('js/image-picker.min.js') }}"></script>*/
/* {% endblock %}*/
