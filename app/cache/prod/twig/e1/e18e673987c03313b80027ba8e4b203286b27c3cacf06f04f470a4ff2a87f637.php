<?php

/* YallaWebsiteBackendBundle:Gallery:new.html.twig */
class __TwigTemplate_47f74df90fc829a904dc5973dfabc557cd17547b2e34f4fed066f734d0f4996f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "                    
                </div>
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
            </form>
        </div>
    ";
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
        return array (  45 => 12,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
