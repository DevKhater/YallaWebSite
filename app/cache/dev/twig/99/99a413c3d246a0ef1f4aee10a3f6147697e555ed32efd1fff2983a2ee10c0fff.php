<?php

/* YallaWebsiteBackendBundle:Gallery:new.html.twig */
class __TwigTemplate_8f40baa3ceb1a6c4b4358f4160075674f5f965e1412fe30a32cfb43bcf356768 extends Twig_Template
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
        $__internal_6d1acc7dac73f67313ddbc620d1bb7f56181e6a8abeaffd1686fccd133932a4f = $this->env->getExtension("native_profiler");
        $__internal_6d1acc7dac73f67313ddbc620d1bb7f56181e6a8abeaffd1686fccd133932a4f->enter($__internal_6d1acc7dac73f67313ddbc620d1bb7f56181e6a8abeaffd1686fccd133932a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d1acc7dac73f67313ddbc620d1bb7f56181e6a8abeaffd1686fccd133932a4f->leave($__internal_6d1acc7dac73f67313ddbc620d1bb7f56181e6a8abeaffd1686fccd133932a4f_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_25aa0bc9ae1c0858175f0ee12ee6f41123b242f2dc5047fc815a0980ceee3645 = $this->env->getExtension("native_profiler");
        $__internal_25aa0bc9ae1c0858175f0ee12ee6f41123b242f2dc5047fc815a0980ceee3645->enter($__internal_25aa0bc9ae1c0858175f0ee12ee6f41123b242f2dc5047fc815a0980ceee3645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_25aa0bc9ae1c0858175f0ee12ee6f41123b242f2dc5047fc815a0980ceee3645->leave($__internal_25aa0bc9ae1c0858175f0ee12ee6f41123b242f2dc5047fc815a0980ceee3645_prof);

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
