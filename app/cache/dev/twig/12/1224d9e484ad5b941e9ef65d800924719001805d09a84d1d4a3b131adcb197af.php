<?php

/* YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig */
class __TwigTemplate_634ee87ad0ce25c31da2284501edbee334c9505144f2b66a61405bf5804c6105 extends Twig_Template
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
        $__internal_b664bd55e0352c6c421751653d31009b63ec1078bc60e1c9b4f6ed3785ab28f4 = $this->env->getExtension("native_profiler");
        $__internal_b664bd55e0352c6c421751653d31009b63ec1078bc60e1c9b4f6ed3785ab28f4->enter($__internal_b664bd55e0352c6c421751653d31009b63ec1078bc60e1c9b4f6ed3785ab28f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b664bd55e0352c6c421751653d31009b63ec1078bc60e1c9b4f6ed3785ab28f4->leave($__internal_b664bd55e0352c6c421751653d31009b63ec1078bc60e1c9b4f6ed3785ab28f4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0405f88fd0a07742f75d7a5eceb0792cb86aa279de9d9c57f703147ac5d02e42 = $this->env->getExtension("native_profiler");
        $__internal_0405f88fd0a07742f75d7a5eceb0792cb86aa279de9d9c57f703147ac5d02e42->enter($__internal_0405f88fd0a07742f75d7a5eceb0792cb86aa279de9d9c57f703147ac5d02e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galleries Section";
        
        $__internal_0405f88fd0a07742f75d7a5eceb0792cb86aa279de9d9c57f703147ac5d02e42->leave($__internal_0405f88fd0a07742f75d7a5eceb0792cb86aa279de9d9c57f703147ac5d02e42_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b439f51bdd5cd784f037bd61c1d7a8f057aab261f46ab25935ce7fad75d77f1d = $this->env->getExtension("native_profiler");
        $__internal_b439f51bdd5cd784f037bd61c1d7a8f057aab261f46ab25935ce7fad75d77f1d->enter($__internal_b439f51bdd5cd784f037bd61c1d7a8f057aab261f46ab25935ce7fad75d77f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/image-picker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> ";
        
        $__internal_b439f51bdd5cd784f037bd61c1d7a8f057aab261f46ab25935ce7fad75d77f1d->leave($__internal_b439f51bdd5cd784f037bd61c1d7a8f057aab261f46ab25935ce7fad75d77f1d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_df8cb000b2f5dd1a10858dcf4ecd784a9a95973ea3ac2f446bc2528da0ec993f = $this->env->getExtension("native_profiler");
        $__internal_df8cb000b2f5dd1a10858dcf4ecd784a9a95973ea3ac2f446bc2528da0ec993f->enter($__internal_df8cb000b2f5dd1a10858dcf4ecd784a9a95973ea3ac2f446bc2528da0ec993f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_df8cb000b2f5dd1a10858dcf4ecd784a9a95973ea3ac2f446bc2528da0ec993f->leave($__internal_df8cb000b2f5dd1a10858dcf4ecd784a9a95973ea3ac2f446bc2528da0ec993f_prof);

    }

    // line 13
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_a4425b7c2c598c45054c312f9e7d4baa8a173bb33f7d0de018df631ff25f7c26 = $this->env->getExtension("native_profiler");
        $__internal_a4425b7c2c598c45054c312f9e7d4baa8a173bb33f7d0de018df631ff25f7c26->enter($__internal_a4425b7c2c598c45054c312f9e7d4baa8a173bb33f7d0de018df631ff25f7c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_a4425b7c2c598c45054c312f9e7d4baa8a173bb33f7d0de018df631ff25f7c26->leave($__internal_a4425b7c2c598c45054c312f9e7d4baa8a173bb33f7d0de018df631ff25f7c26_prof);

    }

    // line 30
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_71bd95e0dd9de7037c208c24661c63935889995b5a6ddb49bc1de8b0a227a238 = $this->env->getExtension("native_profiler");
        $__internal_71bd95e0dd9de7037c208c24661c63935889995b5a6ddb49bc1de8b0a227a238->enter($__internal_71bd95e0dd9de7037c208c24661c63935889995b5a6ddb49bc1de8b0a227a238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_71bd95e0dd9de7037c208c24661c63935889995b5a6ddb49bc1de8b0a227a238->leave($__internal_71bd95e0dd9de7037c208c24661c63935889995b5a6ddb49bc1de8b0a227a238_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44863575705ba85253ad7072b48dfcb6f479dced1d8c3e6cc05a15c08c2dd46c = $this->env->getExtension("native_profiler");
        $__internal_44863575705ba85253ad7072b48dfcb6f479dced1d8c3e6cc05a15c08c2dd46c->enter($__internal_44863575705ba85253ad7072b48dfcb6f479dced1d8c3e6cc05a15c08c2dd46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/image-picker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_44863575705ba85253ad7072b48dfcb6f479dced1d8c3e6cc05a15c08c2dd46c->leave($__internal_44863575705ba85253ad7072b48dfcb6f479dced1d8c3e6cc05a15c08c2dd46c_prof);

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
