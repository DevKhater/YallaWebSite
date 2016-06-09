<?php

/* YallaWebsiteBackendBundle:Photographer:edit.html.twig */
class __TwigTemplate_189822969c320d941d9349d014348caf06212123a56f26a6dfc9af1e582f0f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig", "YallaWebsiteBackendBundle:Photographer:edit.html.twig", 1);
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
        $__internal_dbba07a4c18d8a2066aabb41e86a9a9a125164299297e414154007c160fe504d = $this->env->getExtension("native_profiler");
        $__internal_dbba07a4c18d8a2066aabb41e86a9a9a125164299297e414154007c160fe504d->enter($__internal_dbba07a4c18d8a2066aabb41e86a9a9a125164299297e414154007c160fe504d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbba07a4c18d8a2066aabb41e86a9a9a125164299297e414154007c160fe504d->leave($__internal_dbba07a4c18d8a2066aabb41e86a9a9a125164299297e414154007c160fe504d_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_5c79e4945474015aab92b1c46c33541f7b1d7003973e70691d80c943aaa2678d = $this->env->getExtension("native_profiler");
        $__internal_5c79e4945474015aab92b1c46c33541f7b1d7003973e70691d80c943aaa2678d->enter($__internal_5c79e4945474015aab92b1c46c33541f7b1d7003973e70691d80c943aaa2678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Photographer
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_photographer_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_5c79e4945474015aab92b1c46c33541f7b1d7003973e70691d80c943aaa2678d->leave($__internal_5c79e4945474015aab92b1c46c33541f7b1d7003973e70691d80c943aaa2678d_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Photographer:edit.html.twig";
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
/*             Edit Photographer*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_photographer_edit',  {'id': entity.id})}}" class="" method="POST">        */
/*                 <div class="form-group">*/
/*                     {{ form_widget(form)}}                    */
/*                 </div>*/
/*                 <input type="submit" class="btn btn-default" value="Save"/>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
