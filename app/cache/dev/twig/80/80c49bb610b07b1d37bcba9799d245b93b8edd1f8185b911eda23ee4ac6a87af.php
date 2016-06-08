<?php

/* YallaWebsiteBackendBundle:Gallery:add.html.twig */
class __TwigTemplate_d280bedb87cf93bf5a3b5e9320d12f1d5e06ab8ad6e78a53e27bf96cafad9306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig", "YallaWebsiteBackendBundle:Gallery:add.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e04cb0cc24111cadab6da85774e0c74977884978df4adcfa2bf724d3d14ffe5 = $this->env->getExtension("native_profiler");
        $__internal_3e04cb0cc24111cadab6da85774e0c74977884978df4adcfa2bf724d3d14ffe5->enter($__internal_3e04cb0cc24111cadab6da85774e0c74977884978df4adcfa2bf724d3d14ffe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e04cb0cc24111cadab6da85774e0c74977884978df4adcfa2bf724d3d14ffe5->leave($__internal_3e04cb0cc24111cadab6da85774e0c74977884978df4adcfa2bf724d3d14ffe5_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_8b635bbbb32eca80ae4875c7d0ac68cb28181479f0fb6645af1d967859948a10 = $this->env->getExtension("native_profiler");
        $__internal_8b635bbbb32eca80ae4875c7d0ac68cb28181479f0fb6645af1d967859948a10->enter($__internal_8b635bbbb32eca80ae4875c7d0ac68cb28181479f0fb6645af1d967859948a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Agg Images To Gallery
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_add_images_gallery", array("id" => (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))), "html", null, true);
        echo "\" method=\"POST\">
                <div class=\"form-group\">
                    <label for=\"media\">Add Images</label>
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addForm"]) ? $context["addForm"] : $this->getContext($context, "addForm")), 'widget');
        echo "
                    <p class=\"help-block\">Only Images.</p>
                </div>

                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addForm"]) ? $context["addForm"] : $this->getContext($context, "addForm")), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addForm"]) ? $context["addForm"] : $this->getContext($context, "addForm")), "_token", array()), 'row');
        echo "
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
        </div>

    </form>
</div>
";
        
        $__internal_8b635bbbb32eca80ae4875c7d0ac68cb28181479f0fb6645af1d967859948a10->leave($__internal_8b635bbbb32eca80ae4875c7d0ac68cb28181479f0fb6645af1d967859948a10_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Gallery:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  60 => 15,  53 => 11,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Agg Images To Gallery*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_gallery_add_images_gallery', {'id': data}) }}" method="POST">*/
/*                 <div class="form-group">*/
/*                     <label for="media">Add Images</label>*/
/*                     {{ form_widget(addForm)}}*/
/*                     <p class="help-block">Only Images.</p>*/
/*                 </div>*/
/* */
/*                 {{ form_errors(addForm) }}*/
/*                 {{ form_row(addForm._token) }}*/
/*                 <input type="submit" class="btn btn-default" value="Save"/>*/
/*         </div>*/
/* */
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
