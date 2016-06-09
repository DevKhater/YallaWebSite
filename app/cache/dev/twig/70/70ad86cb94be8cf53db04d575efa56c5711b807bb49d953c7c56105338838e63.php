<?php

/* YallaWebsiteBackendBundle:Artist:new.html.twig */
class __TwigTemplate_5e9aadac5b70eb8bca7adc9e34882f62c4033b7f20dd5fd9b09215cafb61417d extends Twig_Template
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
        $__internal_d12361c0903b5d434c8d6aef9eb374f2001ff7f275cec18640eea7cf66d9f98a = $this->env->getExtension("native_profiler");
        $__internal_d12361c0903b5d434c8d6aef9eb374f2001ff7f275cec18640eea7cf66d9f98a->enter($__internal_d12361c0903b5d434c8d6aef9eb374f2001ff7f275cec18640eea7cf66d9f98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Artist:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12361c0903b5d434c8d6aef9eb374f2001ff7f275cec18640eea7cf66d9f98a->leave($__internal_d12361c0903b5d434c8d6aef9eb374f2001ff7f275cec18640eea7cf66d9f98a_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_3ed742ecf38f4c8d7f586da6957fb40726b555f028e1a528af2ecf21763ed0e2 = $this->env->getExtension("native_profiler");
        $__internal_3ed742ecf38f4c8d7f586da6957fb40726b555f028e1a528af2ecf21763ed0e2->enter($__internal_3ed742ecf38f4c8d7f586da6957fb40726b555f028e1a528af2ecf21763ed0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_3ed742ecf38f4c8d7f586da6957fb40726b555f028e1a528af2ecf21763ed0e2->leave($__internal_3ed742ecf38f4c8d7f586da6957fb40726b555f028e1a528af2ecf21763ed0e2_prof);

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
