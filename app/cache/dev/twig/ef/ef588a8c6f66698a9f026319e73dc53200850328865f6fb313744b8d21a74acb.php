<?php

/* YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig */
class __TwigTemplate_57cdec505e2bebcbcb2110b11f597ae0d3fa23406c310f63eb53641030eee6dc extends Twig_Template
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
        $__internal_199f117f8aeee53b0e7a32e8b2ddc9316986f8610c88efd35b6838dfd3d7e00b = $this->env->getExtension("native_profiler");
        $__internal_199f117f8aeee53b0e7a32e8b2ddc9316986f8610c88efd35b6838dfd3d7e00b->enter($__internal_199f117f8aeee53b0e7a32e8b2ddc9316986f8610c88efd35b6838dfd3d7e00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199f117f8aeee53b0e7a32e8b2ddc9316986f8610c88efd35b6838dfd3d7e00b->leave($__internal_199f117f8aeee53b0e7a32e8b2ddc9316986f8610c88efd35b6838dfd3d7e00b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0798325defb2a1f069fe3fb37dc0dad846267a70d4d8101dde5f4ee73f9dde9d = $this->env->getExtension("native_profiler");
        $__internal_0798325defb2a1f069fe3fb37dc0dad846267a70d4d8101dde5f4ee73f9dde9d->enter($__internal_0798325defb2a1f069fe3fb37dc0dad846267a70d4d8101dde5f4ee73f9dde9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galleries Section";
        
        $__internal_0798325defb2a1f069fe3fb37dc0dad846267a70d4d8101dde5f4ee73f9dde9d->leave($__internal_0798325defb2a1f069fe3fb37dc0dad846267a70d4d8101dde5f4ee73f9dde9d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a04144a44b214d4d8a45720de5952604a3e0bc8f0adf476041e623a2ea57ce9 = $this->env->getExtension("native_profiler");
        $__internal_7a04144a44b214d4d8a45720de5952604a3e0bc8f0adf476041e623a2ea57ce9->enter($__internal_7a04144a44b214d4d8a45720de5952604a3e0bc8f0adf476041e623a2ea57ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/image-picker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> ";
        
        $__internal_7a04144a44b214d4d8a45720de5952604a3e0bc8f0adf476041e623a2ea57ce9->leave($__internal_7a04144a44b214d4d8a45720de5952604a3e0bc8f0adf476041e623a2ea57ce9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6324d5199836aac890445692bcdf1e5909c85fee52d228826decba6a1dff3973 = $this->env->getExtension("native_profiler");
        $__internal_6324d5199836aac890445692bcdf1e5909c85fee52d228826decba6a1dff3973->enter($__internal_6324d5199836aac890445692bcdf1e5909c85fee52d228826decba6a1dff3973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
            echo "</a><br/>
        ";
            // line 18
            if (array_key_exists("pagination", $context)) {
                if ( !twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
                    echo "<strong>Number of Images : </strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "'><span class=\"label label-primary\">Add Tags/Chanege Gallery Name</span></a>    
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_add_images_gallery", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"label label-primary\">Add Images To Gallery</span></a>
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_set_preview", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_6324d5199836aac890445692bcdf1e5909c85fee52d228826decba6a1dff3973->leave($__internal_6324d5199836aac890445692bcdf1e5909c85fee52d228826decba6a1dff3973_prof);

    }

    // line 13
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_0aef9f6fc836cb77c598e9c857f2a0e6d39108dd261aa43deb343467bde8137b = $this->env->getExtension("native_profiler");
        $__internal_0aef9f6fc836cb77c598e9c857f2a0e6d39108dd261aa43deb343467bde8137b->enter($__internal_0aef9f6fc836cb77c598e9c857f2a0e6d39108dd261aa43deb343467bde8137b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_0aef9f6fc836cb77c598e9c857f2a0e6d39108dd261aa43deb343467bde8137b->leave($__internal_0aef9f6fc836cb77c598e9c857f2a0e6d39108dd261aa43deb343467bde8137b_prof);

    }

    // line 30
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_302d3250650f09cba37071f0f109f967ab6b38ddda8edb46875c74d6ec830c57 = $this->env->getExtension("native_profiler");
        $__internal_302d3250650f09cba37071f0f109f967ab6b38ddda8edb46875c74d6ec830c57->enter($__internal_302d3250650f09cba37071f0f109f967ab6b38ddda8edb46875c74d6ec830c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_302d3250650f09cba37071f0f109f967ab6b38ddda8edb46875c74d6ec830c57->leave($__internal_302d3250650f09cba37071f0f109f967ab6b38ddda8edb46875c74d6ec830c57_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eebb1ecce2ae74d410c6b8ca9a4356adc8c3b6638295f4c3614e762746d11da2 = $this->env->getExtension("native_profiler");
        $__internal_eebb1ecce2ae74d410c6b8ca9a4356adc8c3b6638295f4c3614e762746d11da2->enter($__internal_eebb1ecce2ae74d410c6b8ca9a4356adc8c3b6638295f4c3614e762746d11da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/image-picker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_eebb1ecce2ae74d410c6b8ca9a4356adc8c3b6638295f4c3614e762746d11da2->leave($__internal_eebb1ecce2ae74d410c6b8ca9a4356adc8c3b6638295f4c3614e762746d11da2_prof);

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
        return array (  170 => 35,  165 => 34,  159 => 33,  148 => 30,  137 => 13,  130 => 30,  127 => 29,  120 => 25,  116 => 24,  112 => 23,  106 => 19,  98 => 18,  92 => 17,  88 => 15,  85 => 14,  83 => 13,  79 => 12,  71 => 6,  65 => 5,  51 => 4,  39 => 2,  11 => 1,);
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
