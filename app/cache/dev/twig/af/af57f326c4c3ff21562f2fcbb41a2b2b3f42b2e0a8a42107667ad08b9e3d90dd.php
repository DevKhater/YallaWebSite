<?php

/* YallaWebsiteBackendBundle:Article:new.html.twig */
class __TwigTemplate_34dab2fbc7c8539f22c78222bf3d291988a47eccff16b6ad505282705af1624f extends Twig_Template
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
        $__internal_98dcca734fb593f8aecd98f76703c6173f1ee5037f9cd0371dc84a762ca0b853 = $this->env->getExtension("native_profiler");
        $__internal_98dcca734fb593f8aecd98f76703c6173f1ee5037f9cd0371dc84a762ca0b853->enter($__internal_98dcca734fb593f8aecd98f76703c6173f1ee5037f9cd0371dc84a762ca0b853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98dcca734fb593f8aecd98f76703c6173f1ee5037f9cd0371dc84a762ca0b853->leave($__internal_98dcca734fb593f8aecd98f76703c6173f1ee5037f9cd0371dc84a762ca0b853_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_39803f076948cc16f1572c1234de518b019a09c830afeadfd577a7fa15acbac4 = $this->env->getExtension("native_profiler");
        $__internal_39803f076948cc16f1572c1234de518b019a09c830afeadfd577a7fa15acbac4->enter($__internal_39803f076948cc16f1572c1234de518b019a09c830afeadfd577a7fa15acbac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_39803f076948cc16f1572c1234de518b019a09c830afeadfd577a7fa15acbac4->leave($__internal_39803f076948cc16f1572c1234de518b019a09c830afeadfd577a7fa15acbac4_prof);

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
