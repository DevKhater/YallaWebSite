<?php

/* YallaWebsiteBackendBundle:Artist:new.html.twig */
class __TwigTemplate_a5ba18137521d9ebf0b8eda0e847fcf9d0cb1ae3a525e9385c31518972c39413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Artist:base_artist.html.twig", "YallaWebsiteBackendBundle:Artist:new.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Artist:base_artist.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_121cda6e6f13dbf6354b8a823e23296abffd481f66b1313b7e315b347759f48d = $this->env->getExtension("native_profiler");
        $__internal_121cda6e6f13dbf6354b8a823e23296abffd481f66b1313b7e315b347759f48d->enter($__internal_121cda6e6f13dbf6354b8a823e23296abffd481f66b1313b7e315b347759f48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Artist:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121cda6e6f13dbf6354b8a823e23296abffd481f66b1313b7e315b347759f48d->leave($__internal_121cda6e6f13dbf6354b8a823e23296abffd481f66b1313b7e315b347759f48d_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_072441985c9ea870d960ec214d91c651bd51f51730930fbbc8e7eb4e5126db18 = $this->env->getExtension("native_profiler");
        $__internal_072441985c9ea870d960ec214d91c651bd51f51730930fbbc8e7eb4e5126db18->enter($__internal_072441985c9ea870d960ec214d91c651bd51f51730930fbbc8e7eb4e5126db18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Create Artist
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("backend_artist_new");
        echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"title\">Artist Name</label>
                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Artist Biography</label>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography", array()), 'widget');
        echo "
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"date\">Artist Links</label>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sm", array()), 'widget');
        echo "
                    </div>

                    
                    
                    
                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
                    
            </form>
        </div>
    ";
        
        $__internal_072441985c9ea870d960ec214d91c651bd51f51730930fbbc8e7eb4e5126db18->leave($__internal_072441985c9ea870d960ec214d91c651bd51f51730930fbbc8e7eb4e5126db18_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Artist:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  87 => 33,  81 => 30,  70 => 22,  62 => 17,  54 => 12,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Artist:base_artist.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Create Artist*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_artist_new')}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <label for="title">Artist Name</label>*/
/*                         {{ form_widget(form.title)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Artist Biography</label>*/
/*                         {{ form_widget(form.biography)}}*/
/*                     </div>*/
/*                     */
/*                     <div class="form-group">*/
/*                         <label for="date">Artist Links</label>*/
/*                         {{ form_widget(form.sm)}}*/
/*                     </div>*/
/* */
/*                     */
/*                     */
/*                     */
/*                     <div class="form-group">*/
/*                         <label for="media">Cover Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                         {{ form_errors(form) }}*/
/*                         {{ form_row(form._token) }}*/
/*                 */
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/*                     */
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
