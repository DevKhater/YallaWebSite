<?php

/* YallaWebsiteBackendBundle:Gallery:new.html.twig */
class __TwigTemplate_e0cba3cf578fe1020a22fcac5bba2af1e5e104c680a589715a2f9adcf9c87374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig", "YallaWebsiteBackendBundle:Gallery:new.html.twig", 1);
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
        $__internal_91e64607fbe7564226e9ed7168dca9d43bf18a70ac5b0fdd9e04fca4156ddfdc = $this->env->getExtension("native_profiler");
        $__internal_91e64607fbe7564226e9ed7168dca9d43bf18a70ac5b0fdd9e04fca4156ddfdc->enter($__internal_91e64607fbe7564226e9ed7168dca9d43bf18a70ac5b0fdd9e04fca4156ddfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e64607fbe7564226e9ed7168dca9d43bf18a70ac5b0fdd9e04fca4156ddfdc->leave($__internal_91e64607fbe7564226e9ed7168dca9d43bf18a70ac5b0fdd9e04fca4156ddfdc_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_deb61143f2233688250027b7411e36a7d51513c94a55562dfec95973667f7742 = $this->env->getExtension("native_profiler");
        $__internal_deb61143f2233688250027b7411e36a7d51513c94a55562dfec95973667f7742->enter($__internal_deb61143f2233688250027b7411e36a7d51513c94a55562dfec95973667f7742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Create Gallery
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("backend_gallery_new");
        echo "\" class=\"\" method=\"POST\">        
                <div class=\"form-group\">
                    <label for=\"title\">Gallery Name</label>
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "                    
                </div>
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
            </form>
        </div>
    ";
        
        $__internal_deb61143f2233688250027b7411e36a7d51513c94a55562dfec95973667f7742->leave($__internal_deb61143f2233688250027b7411e36a7d51513c94a55562dfec95973667f7742_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Gallery:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Create Gallery*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_gallery_new') }}" class="" method="POST">        */
/*                 <div class="form-group">*/
/*                     <label for="title">Gallery Name</label>*/
/*                     {{ form_widget(form)}}                    */
/*                 </div>*/
/*                 <input type="submit" class="btn btn-default" value="Save"/>*/
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
