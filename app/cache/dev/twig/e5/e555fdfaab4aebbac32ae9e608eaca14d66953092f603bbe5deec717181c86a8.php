<?php

/* YallaWebsiteBackendBundle:Article:new.html.twig */
class __TwigTemplate_dca10f9f9935f1fd4d849e58249db0fa1f5f1725de99d989eb3bd3150ef11b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Article:base_article.html.twig", "YallaWebsiteBackendBundle:Article:new.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Article:base_article.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a4f47775c589a27f21c5c2db98880d4a8cb8d45742accf48e82c3186a84924f = $this->env->getExtension("native_profiler");
        $__internal_6a4f47775c589a27f21c5c2db98880d4a8cb8d45742accf48e82c3186a84924f->enter($__internal_6a4f47775c589a27f21c5c2db98880d4a8cb8d45742accf48e82c3186a84924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a4f47775c589a27f21c5c2db98880d4a8cb8d45742accf48e82c3186a84924f->leave($__internal_6a4f47775c589a27f21c5c2db98880d4a8cb8d45742accf48e82c3186a84924f_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_d99545ce9c24738a60c569d1dcf44264588526ca4c7a9979dc75ddcb522378d8 = $this->env->getExtension("native_profiler");
        $__internal_d99545ce9c24738a60c569d1dcf44264588526ca4c7a9979dc75ddcb522378d8->enter($__internal_d99545ce9c24738a60c569d1dcf44264588526ca4c7a9979dc75ddcb522378d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            New Article
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("backend_article_new");
        echo "\" class=\"\" method=\"POST\">
                <div class=\"form-group\">
                        <label for=\"title\">Event Name</label>
                        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group col-md-12\">
                        <label for=\"tags\">Add Tags Separated by Comma </label>
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                <div class=\"col-lg-12\">
                    <div class=\"form-group\" style=\"min-height: 400px;\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                    </div>
                    
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
                </div>

            </form>
        </div>
    ";
        
        $__internal_d99545ce9c24738a60c569d1dcf44264588526ca4c7a9979dc75ddcb522378d8->leave($__internal_d99545ce9c24738a60c569d1dcf44264588526ca4c7a9979dc75ddcb522378d8_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  82 => 28,  76 => 25,  68 => 20,  61 => 16,  53 => 11,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Article:base_article.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             New Article*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_article_new')}}" class="" method="POST">*/
/*                 <div class="form-group">*/
/*                         <label for="title">Event Name</label>*/
/*                         {{ form_widget(form.title)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group col-md-12">*/
/*                         <label for="tags">Add Tags Separated by Comma </label>*/
/*                         {{ form_widget(form.tags)}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="media">Cover Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                 <div class="col-lg-12">*/
/*                     <div class="form-group" style="min-height: 400px;">*/
/*                         {{ form_widget(form.content) }}*/
/*                     </div>*/
/*                     */
/*                 {{ form_errors(form) }}*/
/*                 {{ form_row(form._token) }}*/
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/*                 </div>*/
/* */
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
