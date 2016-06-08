<?php

/* YallaWebsiteBackendBundle:Article:base_article.html.twig */
class __TwigTemplate_bbbe3cc0b8c504c3ace1c3e88654572c6d55311c2bf3e0a56fede7f72151fb59 extends Twig_Template
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
        $__internal_c357fd7ca22bddc529d40eb330f1717054de0f6fe7a43439e7eec837ab4b45ec = $this->env->getExtension("native_profiler");
        $__internal_c357fd7ca22bddc529d40eb330f1717054de0f6fe7a43439e7eec837ab4b45ec->enter($__internal_c357fd7ca22bddc529d40eb330f1717054de0f6fe7a43439e7eec837ab4b45ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Article:base_article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c357fd7ca22bddc529d40eb330f1717054de0f6fe7a43439e7eec837ab4b45ec->leave($__internal_c357fd7ca22bddc529d40eb330f1717054de0f6fe7a43439e7eec837ab4b45ec_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf72d525866f5823464ba81365f5fb0598c47f9f4fd2a70507571872dce2801e = $this->env->getExtension("native_profiler");
        $__internal_cf72d525866f5823464ba81365f5fb0598c47f9f4fd2a70507571872dce2801e->enter($__internal_cf72d525866f5823464ba81365f5fb0598c47f9f4fd2a70507571872dce2801e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articles Section";
        
        $__internal_cf72d525866f5823464ba81365f5fb0598c47f9f4fd2a70507571872dce2801e->leave($__internal_cf72d525866f5823464ba81365f5fb0598c47f9f4fd2a70507571872dce2801e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f863057408021042c6ce7414e5613c5e1a0b82299245ba48c565913d619ea1b = $this->env->getExtension("native_profiler");
        $__internal_5f863057408021042c6ce7414e5613c5e1a0b82299245ba48c565913d619ea1b->enter($__internal_5f863057408021042c6ce7414e5613c5e1a0b82299245ba48c565913d619ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f863057408021042c6ce7414e5613c5e1a0b82299245ba48c565913d619ea1b->leave($__internal_5f863057408021042c6ce7414e5613c5e1a0b82299245ba48c565913d619ea1b_prof);

    }

    // line 11
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_3cb7ce2a6bd932fff8eb1e0dcf77e27af6f6643006974300b39433a71c164442 = $this->env->getExtension("native_profiler");
        $__internal_3cb7ce2a6bd932fff8eb1e0dcf77e27af6f6643006974300b39433a71c164442->enter($__internal_3cb7ce2a6bd932fff8eb1e0dcf77e27af6f6643006974300b39433a71c164442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_3cb7ce2a6bd932fff8eb1e0dcf77e27af6f6643006974300b39433a71c164442->leave($__internal_3cb7ce2a6bd932fff8eb1e0dcf77e27af6f6643006974300b39433a71c164442_prof);

    }

    // line 13
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_02901c47b9e86371174ff16d8c45c5ab9f73d3ec0d741d03b4e049760d9eb656 = $this->env->getExtension("native_profiler");
        $__internal_02901c47b9e86371174ff16d8c45c5ab9f73d3ec0d741d03b4e049760d9eb656->enter($__internal_02901c47b9e86371174ff16d8c45c5ab9f73d3ec0d741d03b4e049760d9eb656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_02901c47b9e86371174ff16d8c45c5ab9f73d3ec0d741d03b4e049760d9eb656->leave($__internal_02901c47b9e86371174ff16d8c45c5ab9f73d3ec0d741d03b4e049760d9eb656_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c454f2bac597b8edd31593c5d22633c8fce75bc57998cd6358c8217a8013778 = $this->env->getExtension("native_profiler");
        $__internal_3c454f2bac597b8edd31593c5d22633c8fce75bc57998cd6358c8217a8013778->enter($__internal_3c454f2bac597b8edd31593c5d22633c8fce75bc57998cd6358c8217a8013778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\"#article_tags\").tagit({
                allowSpaces: true
            });
        });
    </script>
";
        
        $__internal_3c454f2bac597b8edd31593c5d22633c8fce75bc57998cd6358c8217a8013778->leave($__internal_3c454f2bac597b8edd31593c5d22633c8fce75bc57998cd6358c8217a8013778_prof);

    }

    // line 27
    public function block_tinymce($context, array $blocks = array())
    {
        $__internal_b9169a162b3d3334e34fb27c105a0bf4827b628fa8aca74a4a75f76cc5a6cd59 = $this->env->getExtension("native_profiler");
        $__internal_b9169a162b3d3334e34fb27c105a0bf4827b628fa8aca74a4a75f76cc5a6cd59->enter($__internal_b9169a162b3d3334e34fb27c105a0bf4827b628fa8aca74a4a75f76cc5a6cd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tinymce"));

        echo " 
    ";
        // line 28
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
";
        
        $__internal_b9169a162b3d3334e34fb27c105a0bf4827b628fa8aca74a4a75f76cc5a6cd59->leave($__internal_b9169a162b3d3334e34fb27c105a0bf4827b628fa8aca74a4a75f76cc5a6cd59_prof);

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
