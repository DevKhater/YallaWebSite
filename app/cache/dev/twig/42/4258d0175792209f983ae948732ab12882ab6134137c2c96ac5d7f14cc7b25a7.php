<?php

/* YallaWebsiteBackendBundle:Venue:new.html.twig */
class __TwigTemplate_95aca53e32e4fe29635d781d7c6dc00e727686c4e77c8a13a52fef6d17929074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Venue:base_venue.html.twig", "YallaWebsiteBackendBundle:Venue:new.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Venue:base_venue.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2d55d51aab2b610af4d2fd544e801f83daf487e012794334f26de8bcc9e71ba = $this->env->getExtension("native_profiler");
        $__internal_a2d55d51aab2b610af4d2fd544e801f83daf487e012794334f26de8bcc9e71ba->enter($__internal_a2d55d51aab2b610af4d2fd544e801f83daf487e012794334f26de8bcc9e71ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Venue:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d55d51aab2b610af4d2fd544e801f83daf487e012794334f26de8bcc9e71ba->leave($__internal_a2d55d51aab2b610af4d2fd544e801f83daf487e012794334f26de8bcc9e71ba_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_3e706c86f97ecb1916e2d780097defbb004e831a8f44575251d7f9ae7496f44c = $this->env->getExtension("native_profiler");
        $__internal_3e706c86f97ecb1916e2d780097defbb004e831a8f44575251d7f9ae7496f44c->enter($__internal_3e706c86f97ecb1916e2d780097defbb004e831a8f44575251d7f9ae7496f44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Create Venue
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("backend_venue_new");
        echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"title\">Venue Name</label>
                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Venue Address</label>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Venue Working From</label>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "workingFrom", array()), 'widget');
        echo "
                        <label for=\"date\">Venue Working To</label>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "workingTo", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Website</label>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"date\">Venue Description</label>
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                    </div>
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "
                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>

            </form>
        </div>
    ";
        
        $__internal_3e706c86f97ecb1916e2d780097defbb004e831a8f44575251d7f9ae7496f44c->leave($__internal_3e706c86f97ecb1916e2d780097defbb004e831a8f44575251d7f9ae7496f44c_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Venue:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  107 => 41,  101 => 38,  95 => 35,  90 => 33,  83 => 29,  75 => 24,  70 => 22,  62 => 17,  54 => 12,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Venue:base_venue.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Create Venue*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_venue_new')}}" method="POST">*/
/*                     <div class="form-group">*/
/*                         <label for="title">Venue Name</label>*/
/*                         {{ form_widget(form.title)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Venue Address</label>*/
/*                         {{ form_widget(form.location)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Venue Working From</label>*/
/*                         {{ form_widget(form.workingFrom)}}*/
/*                         <label for="date">Venue Working To</label>*/
/*                         {{ form_widget(form.workingTo)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Website</label>*/
/*                         {{ form_widget(form.website)}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="date">Venue Description</label>*/
/*                         {{ form_widget(form.content)}}*/
/*                     </div>*/
/*                     {{ form_row(form.tags) }}*/
/*                     <div class="form-group">*/
/*                         <label for="media">Cover Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                         {{ form_errors(form) }}*/
/*                         {{ form_row(form._token) }}*/
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/* */
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
