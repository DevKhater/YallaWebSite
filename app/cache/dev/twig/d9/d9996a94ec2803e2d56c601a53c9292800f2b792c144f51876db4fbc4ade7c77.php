<?php

/* YallaWebsiteBackendBundle:Article:base_article.html.twig */
class __TwigTemplate_f35ece279aa23e0660a16fefd3d01ac251ae36b10b916e28feffdd9f9fd91e7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Article:base_article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
            'javascripts' => array($this, 'block_javascripts'),
            'tinymce' => array($this, 'block_tinymce'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33c762125c95a4c977dd58e188a1ed8b0242b9dae9c8c8428e594f5f1f1bf44b = $this->env->getExtension("native_profiler");
        $__internal_33c762125c95a4c977dd58e188a1ed8b0242b9dae9c8c8428e594f5f1f1bf44b->enter($__internal_33c762125c95a4c977dd58e188a1ed8b0242b9dae9c8c8428e594f5f1f1bf44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Article:base_article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c762125c95a4c977dd58e188a1ed8b0242b9dae9c8c8428e594f5f1f1bf44b->leave($__internal_33c762125c95a4c977dd58e188a1ed8b0242b9dae9c8c8428e594f5f1f1bf44b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_152324e76f625f5d34c0650f5719b8b46eae99b41c8e7dbd37f94462827acf02 = $this->env->getExtension("native_profiler");
        $__internal_152324e76f625f5d34c0650f5719b8b46eae99b41c8e7dbd37f94462827acf02->enter($__internal_152324e76f625f5d34c0650f5719b8b46eae99b41c8e7dbd37f94462827acf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articles Section";
        
        $__internal_152324e76f625f5d34c0650f5719b8b46eae99b41c8e7dbd37f94462827acf02->leave($__internal_152324e76f625f5d34c0650f5719b8b46eae99b41c8e7dbd37f94462827acf02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_274a55f5caa8e4e00929622adaa4e8359c6e51546d9634db84b54ef8e7c62c0d = $this->env->getExtension("native_profiler");
        $__internal_274a55f5caa8e4e00929622adaa4e8359c6e51546d9634db84b54ef8e7c62c0d->enter($__internal_274a55f5caa8e4e00929622adaa4e8359c6e51546d9634db84b54ef8e7c62c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Articles</h4>
        </div>
    </div>
    <div>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("backend_article_new");
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Create Article</button></a>
    ";
        // line 11
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 12
        echo "</div>
";
        // line 13
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_274a55f5caa8e4e00929622adaa4e8359c6e51546d9634db84b54ef8e7c62c0d->leave($__internal_274a55f5caa8e4e00929622adaa4e8359c6e51546d9634db84b54ef8e7c62c0d_prof);

    }

    // line 11
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_6781e8a48994be4c8b9e7a14ea0fb7166def1e18a9a8dcc842db2ed59ef1993f = $this->env->getExtension("native_profiler");
        $__internal_6781e8a48994be4c8b9e7a14ea0fb7166def1e18a9a8dcc842db2ed59ef1993f->enter($__internal_6781e8a48994be4c8b9e7a14ea0fb7166def1e18a9a8dcc842db2ed59ef1993f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_6781e8a48994be4c8b9e7a14ea0fb7166def1e18a9a8dcc842db2ed59ef1993f->leave($__internal_6781e8a48994be4c8b9e7a14ea0fb7166def1e18a9a8dcc842db2ed59ef1993f_prof);

    }

    // line 13
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_dcda32df8e89cd10b1835fc8860370eac2f5eed58e6a2548c5fe9b8465a35603 = $this->env->getExtension("native_profiler");
        $__internal_dcda32df8e89cd10b1835fc8860370eac2f5eed58e6a2548c5fe9b8465a35603->enter($__internal_dcda32df8e89cd10b1835fc8860370eac2f5eed58e6a2548c5fe9b8465a35603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_dcda32df8e89cd10b1835fc8860370eac2f5eed58e6a2548c5fe9b8465a35603->leave($__internal_dcda32df8e89cd10b1835fc8860370eac2f5eed58e6a2548c5fe9b8465a35603_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dea92c96eb6d174bf0809e94c42da59e8174e2af8fd6ea899d55161e9930148f = $this->env->getExtension("native_profiler");
        $__internal_dea92c96eb6d174bf0809e94c42da59e8174e2af8fd6ea899d55161e9930148f->enter($__internal_dea92c96eb6d174bf0809e94c42da59e8174e2af8fd6ea899d55161e9930148f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\"#article_tags\").tagit({
                allowSpaces: true
            });
        });
    </script>
";
        
        $__internal_dea92c96eb6d174bf0809e94c42da59e8174e2af8fd6ea899d55161e9930148f->leave($__internal_dea92c96eb6d174bf0809e94c42da59e8174e2af8fd6ea899d55161e9930148f_prof);

    }

    // line 27
    public function block_tinymce($context, array $blocks = array())
    {
        $__internal_5a35a487c47823e3be4705fbb662712d6204f9ab6b70103a089e49425978ad62 = $this->env->getExtension("native_profiler");
        $__internal_5a35a487c47823e3be4705fbb662712d6204f9ab6b70103a089e49425978ad62->enter($__internal_5a35a487c47823e3be4705fbb662712d6204f9ab6b70103a089e49425978ad62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tinymce"));

        echo " 
    ";
        // line 28
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
";
        
        $__internal_5a35a487c47823e3be4705fbb662712d6204f9ab6b70103a089e49425978ad62->leave($__internal_5a35a487c47823e3be4705fbb662712d6204f9ab6b70103a089e49425978ad62_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Article:base_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  123 => 27,  109 => 18,  103 => 17,  92 => 13,  81 => 11,  74 => 13,  71 => 12,  69 => 11,  65 => 10,  57 => 4,  51 => 3,  39 => 2,  11 => 1,);
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
/*         <a href="{{ path ('backend_article_new')}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Create Article</button></a>*/
/*     {% block extraOptions %}{% endblock %}*/
/* </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $("#article_tags").tagit({*/
/*                 allowSpaces: true*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block tinymce %} */
/*     {{ tinymce_init() }}*/
/* {#        <script>*/
/*         tinymce.init({*/
/*             paste_data_images: true*/
/*         });*/
/*     </script>*/
/* #}*/
/* {% endblock %}*/
/* */
