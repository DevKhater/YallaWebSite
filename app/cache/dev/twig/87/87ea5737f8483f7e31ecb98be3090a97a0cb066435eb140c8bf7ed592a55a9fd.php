<?php

/* SonataMediaBundle:Extra:pixlr_editor.html.twig */
class __TwigTemplate_679e8735c746704d30ad4a02aebee4e79d55e14a238cc5aadb29bb858f08443a extends Twig_Template
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
        $__internal_9099b6c7a2981c343f783413941e53030fcbffc2938725ea5187b49fd32915cc = $this->env->getExtension("native_profiler");
        $__internal_9099b6c7a2981c343f783413941e53030fcbffc2938725ea5187b49fd32915cc->enter($__internal_9099b6c7a2981c343f783413941e53030fcbffc2938725ea5187b49fd32915cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Extra:pixlr_editor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9099b6c7a2981c343f783413941e53030fcbffc2938725ea5187b49fd32915cc->leave($__internal_9099b6c7a2981c343f783413941e53030fcbffc2938725ea5187b49fd32915cc_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_800121226f834f58bb72da137d7b8c7def4da36549b6e26afeadfc698b433b2a = $this->env->getExtension("native_profiler");
        $__internal_800121226f834f58bb72da137d7b8c7def4da36549b6e26afeadfc698b433b2a->enter($__internal_800121226f834f58bb72da137d7b8c7def4da36549b6e26afeadfc698b433b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pixlr Editor";
        
        $__internal_800121226f834f58bb72da137d7b8c7def4da36549b6e26afeadfc698b433b2a->leave($__internal_800121226f834f58bb72da137d7b8c7def4da36549b6e26afeadfc698b433b2a_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdecdc5ab8c5d9ccb7d558e8bbcb771914577b58745f546ac4383a965ddbddc7 = $this->env->getExtension("native_profiler");
        $__internal_bdecdc5ab8c5d9ccb7d558e8bbcb771914577b58745f546ac4383a965ddbddc7->enter($__internal_bdecdc5ab8c5d9ccb7d558e8bbcb771914577b58745f546ac4383a965ddbddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bdecdc5ab8c5d9ccb7d558e8bbcb771914577b58745f546ac4383a965ddbddc7->leave($__internal_bdecdc5ab8c5d9ccb7d558e8bbcb771914577b58745f546ac4383a965ddbddc7_prof);

    }

    // line 64
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a6ae0082c4ba59fc34482075d3482056fb90f462d74fe58006f074ed8f2c3acd = $this->env->getExtension("native_profiler");
        $__internal_a6ae0082c4ba59fc34482075d3482056fb90f462d74fe58006f074ed8f2c3acd->enter($__internal_a6ae0082c4ba59fc34482075d3482056fb90f462d74fe58006f074ed8f2c3acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_a6ae0082c4ba59fc34482075d3482056fb90f462d74fe58006f074ed8f2c3acd->leave($__internal_a6ae0082c4ba59fc34482075d3482056fb90f462d74fe58006f074ed8f2c3acd_prof);

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
