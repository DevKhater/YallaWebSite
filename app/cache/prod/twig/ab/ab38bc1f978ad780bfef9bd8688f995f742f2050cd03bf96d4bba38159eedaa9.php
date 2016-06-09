<?php

/* YallaWebsiteBackendBundle:Article:base_article.html.twig */
class __TwigTemplate_d44deaec1cb2ad210372903ddcb9236efe73039398531dc4865d1dc13dc50401 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Articles Section";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 11
    public function block_extraOptions($context, array $blocks = array())
    {
    }

    // line 13
    public function block_controlleraction($context, array $blocks = array())
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\"#article_tags\").tagit({
                allowSpaces: true
            });
        });
    </script>
";
    }

    // line 27
    public function block_tinymce($context, array $blocks = array())
    {
        echo " 
    ";
        // line 28
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
";
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
        return array (  92 => 28,  87 => 27,  76 => 18,  73 => 17,  68 => 13,  63 => 11,  59 => 13,  56 => 12,  54 => 11,  50 => 10,  42 => 4,  39 => 3,  33 => 2,  11 => 1,);
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
