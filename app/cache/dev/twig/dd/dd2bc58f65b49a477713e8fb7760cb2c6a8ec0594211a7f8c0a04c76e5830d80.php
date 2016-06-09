<?php

/* SonataMediaBundle:Extra:pixlr_editor.html.twig */
class __TwigTemplate_87277ef29019d4f421d129722cd42af985507bb0c159f9b17fc694521f9d8c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::empty_layout.html.twig", "SonataMediaBundle:Extra:pixlr_editor.html.twig", 12);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2414b7674f17c9a1e250298a3de831ba8e7abe6bf443a157765f24040421016 = $this->env->getExtension("native_profiler");
        $__internal_b2414b7674f17c9a1e250298a3de831ba8e7abe6bf443a157765f24040421016->enter($__internal_b2414b7674f17c9a1e250298a3de831ba8e7abe6bf443a157765f24040421016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Extra:pixlr_editor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2414b7674f17c9a1e250298a3de831ba8e7abe6bf443a157765f24040421016->leave($__internal_b2414b7674f17c9a1e250298a3de831ba8e7abe6bf443a157765f24040421016_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_4da2dd5f989a0df121eac29d6310218dc26b4fce82b08501225193c3dc0d5d31 = $this->env->getExtension("native_profiler");
        $__internal_4da2dd5f989a0df121eac29d6310218dc26b4fce82b08501225193c3dc0d5d31->enter($__internal_4da2dd5f989a0df121eac29d6310218dc26b4fce82b08501225193c3dc0d5d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pixlr Editor";
        
        $__internal_4da2dd5f989a0df121eac29d6310218dc26b4fce82b08501225193c3dc0d5d31->leave($__internal_4da2dd5f989a0df121eac29d6310218dc26b4fce82b08501225193c3dc0d5d31_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_780dd3f51cec8b0858c8d0dde06144a94a282685f83aed63542813d25b81c2b4 = $this->env->getExtension("native_profiler");
        $__internal_780dd3f51cec8b0858c8d0dde06144a94a282685f83aed63542813d25b81c2b4->enter($__internal_780dd3f51cec8b0858c8d0dde06144a94a282685f83aed63542813d25b81c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .header {
            text-align: center;
            background: none repeat scroll 0 0 #222222;
            border-bottom: 5px solid #B6B6B6;
            padding: 15px 0;
        }

        a.pixlr-box {
            text-align: center;
            width: 230px;
            float: left;
            margin: 30px;
            margin-left: 35px;
            margin-right: 35px;

            padding: 30px;
            text-decoration: none;

            color: #B6B6B6;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            border:9px solid #B6B6B6;
            background-color:#222222;
        }

        a.pixlr-box:hover {
            color: #222222;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            border:9px solid #222222;
            background-color:#B6B6B6;
            text-decoration: none;
        }

        .centered {
            float: none;
            margin: 0 auto;
        }
    </style>
";
        
        $__internal_780dd3f51cec8b0858c8d0dde06144a94a282685f83aed63542813d25b81c2b4->leave($__internal_780dd3f51cec8b0858c8d0dde06144a94a282685f83aed63542813d25b81c2b4_prof);

    }

    // line 64
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_dc05f3c40bb59f6b450a090a49cd08cb597ba10ddc76229557d39300d428f124 = $this->env->getExtension("native_profiler");
        $__internal_dc05f3c40bb59f6b450a090a49cd08cb597ba10ddc76229557d39300d428f124->enter($__internal_dc05f3c40bb59f6b450a090a49cd08cb597ba10ddc76229557d39300d428f124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 65
        echo "    <section class=\"content\">
        <div class=\"row header\">
           <div class=\"col-sm-12\">
               <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonatamedia/extra/pixlr/pixlr.png"), "html", null, true);
        echo "\" alt=\"Pixlr\"/>
           </div>
       </div>

        <div class=\"row\">
            <div class=\"col-sm-6 centered\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_pixlr_edit", array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "mode" => "express")), "html", null, true);
        echo "\" class=\"pixlr-box\">
                            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonatamedia/extra/pixlr/express_128.png"), "html", null, true);
        echo "\" alt=\"Pixlr Express\"/>
                            ";
        // line 78
        echo $this->env->getExtension('translator')->trans("label.pixlr_express_editor", array(), "SonataMediaBundle");
        echo "
                        </a>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_pixlr_edit", array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "mode" => "editor")), "html", null, true);
        echo "\" class=\"pixlr-box\">
                            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonatamedia/extra/pixlr/editor_128.png"), "html", null, true);
        echo "\" alt=\"Pixlr Editor\"/>
                            ";
        // line 84
        echo $this->env->getExtension('translator')->trans("label.pixlr_advanced_editor", array(), "SonataMediaBundle");
        echo "
                        </a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12 centered\">
                        <div class=\"alert alert-warning\">
                            ";
        // line 91
        echo $this->env->getExtension('translator')->trans("label.pixlr_warning", array(), "SonataMediaBundle");
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_dc05f3c40bb59f6b450a090a49cd08cb597ba10ddc76229557d39300d428f124->leave($__internal_dc05f3c40bb59f6b450a090a49cd08cb597ba10ddc76229557d39300d428f124_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Extra:pixlr_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 91,  151 => 84,  147 => 83,  143 => 82,  136 => 78,  132 => 77,  128 => 76,  117 => 68,  112 => 65,  106 => 64,  54 => 18,  48 => 17,  36 => 15,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends "SonataAdminBundle::empty_layout.html.twig" %}*/
/* */
/* */
/* {% block title %}Pixlr Editor{% endblock title %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         .header {*/
/*             text-align: center;*/
/*             background: none repeat scroll 0 0 #222222;*/
/*             border-bottom: 5px solid #B6B6B6;*/
/*             padding: 15px 0;*/
/*         }*/
/* */
/*         a.pixlr-box {*/
/*             text-align: center;*/
/*             width: 230px;*/
/*             float: left;*/
/*             margin: 30px;*/
/*             margin-left: 35px;*/
/*             margin-right: 35px;*/
/* */
/*             padding: 30px;*/
/*             text-decoration: none;*/
/* */
/*             color: #B6B6B6;*/
/*             -webkit-border-radius: 20px;*/
/*             -moz-border-radius: 20px;*/
/*             border-radius: 20px;*/
/*             border:9px solid #B6B6B6;*/
/*             background-color:#222222;*/
/*         }*/
/* */
/*         a.pixlr-box:hover {*/
/*             color: #222222;*/
/*             -webkit-border-radius: 20px;*/
/*             -moz-border-radius: 20px;*/
/*             border-radius: 20px;*/
/*             border:9px solid #222222;*/
/*             background-color:#B6B6B6;*/
/*             text-decoration: none;*/
/*         }*/
/* */
/*         .centered {*/
/*             float: none;*/
/*             margin: 0 auto;*/
/*         }*/
/*     </style>*/
/* {% endblock stylesheets %}*/
/* */
/* */
/* {% block sonata_wrapper %}*/
/*     <section class="content">*/
/*         <div class="row header">*/
/*            <div class="col-sm-12">*/
/*                <img src="{{ asset('bundles/sonatamedia/extra/pixlr/pixlr.png')}}" alt="Pixlr"/>*/
/*            </div>*/
/*        </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-6 centered">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                         <a href="{{ url('sonata_media_pixlr_edit', {'id': media|sonata_urlsafeid , 'mode': 'express'}) }}" class="pixlr-box">*/
/*                             <img src="{{ asset('bundles/sonatamedia/extra/pixlr/express_128.png')}}" alt="Pixlr Express"/>*/
/*                             {{ "label.pixlr_express_editor"|trans({}, "SonataMediaBundle")|raw }}*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-sm-6">*/
/*                         <a href="{{ url('sonata_media_pixlr_edit', {'id': media|sonata_urlsafeid , 'mode': 'editor'}) }}" class="pixlr-box">*/
/*                             <img src="{{ asset('bundles/sonatamedia/extra/pixlr/editor_128.png')}}" alt="Pixlr Editor"/>*/
/*                             {{ "label.pixlr_advanced_editor"|trans({}, "SonataMediaBundle")|raw }}*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-12 centered">*/
/*                         <div class="alert alert-warning">*/
/*                             {{ "label.pixlr_warning"|trans({}, "SonataMediaBundle")|raw }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
