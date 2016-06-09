<?php

/* YallaWebsiteBackendBundle:Photographer:new.html.twig */
class __TwigTemplate_1e6b30c882f0e9798a97a88bbeab8d08c795f5126870e36b4db88e094f004f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig", "YallaWebsiteBackendBundle:Photographer:new.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e0b67202067fcdf549e326dd01e4ad05506c745f974550422c491a72e769881 = $this->env->getExtension("native_profiler");
        $__internal_5e0b67202067fcdf549e326dd01e4ad05506c745f974550422c491a72e769881->enter($__internal_5e0b67202067fcdf549e326dd01e4ad05506c745f974550422c491a72e769881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e0b67202067fcdf549e326dd01e4ad05506c745f974550422c491a72e769881->leave($__internal_5e0b67202067fcdf549e326dd01e4ad05506c745f974550422c491a72e769881_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_c8741f39f7434383d3d14f1bded101dfc77e3d8b06682a2fd1cf125567f17e77 = $this->env->getExtension("native_profiler");
        $__internal_c8741f39f7434383d3d14f1bded101dfc77e3d8b06682a2fd1cf125567f17e77->enter($__internal_c8741f39f7434383d3d14f1bded101dfc77e3d8b06682a2fd1cf125567f17e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Create Photographer
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("backend_photographer_new");
        echo "\" class=\"\" method=\"POST\">        
                <div class=\"form-group\">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "                    
                </div>
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
            </form>
        </div>
    </div>
";
        
        $__internal_c8741f39f7434383d3d14f1bded101dfc77e3d8b06682a2fd1cf125567f17e77->leave($__internal_c8741f39f7434383d3d14f1bded101dfc77e3d8b06682a2fd1cf125567f17e77_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Photographer:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Create Photographer*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_photographer_new') }}" class="" method="POST">        */
/*                 <div class="form-group">*/
/*                     {{ form_widget(form)}}                    */
/*                 </div>*/
/*                 <input type="submit" class="btn btn-default" value="Save"/>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
