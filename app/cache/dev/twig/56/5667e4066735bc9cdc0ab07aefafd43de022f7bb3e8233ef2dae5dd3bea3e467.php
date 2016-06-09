<?php

/* YallaWebsiteBackendBundle:Photographer:show.html.twig */
class __TwigTemplate_fe1945c07c08d2975b2c9d0d131aa068e3cc25b0e9931197e5b658526128c000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Photographer:base_article.html.twig", "YallaWebsiteBackendBundle:Photographer:show.html.twig", 1);
        $this->blocks = array(
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Photographer:base_article.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e39279853c3370ba3b084a5468c08983046f8ccde73cc0569a873cd4877a0da = $this->env->getExtension("native_profiler");
        $__internal_3e39279853c3370ba3b084a5468c08983046f8ccde73cc0569a873cd4877a0da->enter($__internal_3e39279853c3370ba3b084a5468c08983046f8ccde73cc0569a873cd4877a0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e39279853c3370ba3b084a5468c08983046f8ccde73cc0569a873cd4877a0da->leave($__internal_3e39279853c3370ba3b084a5468c08983046f8ccde73cc0569a873cd4877a0da_prof);

    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_b1b369185947e3297279779416004cb76284d277cbfd9ed975a02498d937bfdc = $this->env->getExtension("native_profiler");
        $__internal_b1b369185947e3297279779416004cb76284d277cbfd9ed975a02498d937bfdc->enter($__internal_b1b369185947e3297279779416004cb76284d277cbfd9ed975a02498d937bfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        // line 3
        echo "    <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href='";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
        
        $__internal_b1b369185947e3297279779416004cb76284d277cbfd9ed975a02498d937bfdc->leave($__internal_b1b369185947e3297279779416004cb76284d277cbfd9ed975a02498d937bfdc_prof);

    }

    // line 7
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_1664ee31ef64c6f9cadc7a61d8ccab7f4b38dd657d2781024d4abd65fef591fb = $this->env->getExtension("native_profiler");
        $__internal_1664ee31ef64c6f9cadc7a61d8ccab7f4b38dd657d2781024d4abd65fef591fb->enter($__internal_1664ee31ef64c6f9cadc7a61d8ccab7f4b38dd657d2781024d4abd65fef591fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 8
        echo "    <div class=\"row\">
        <div class='col-md-12'>
            <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo " </h3>
            <h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website", array()), "html", null, true);
        echo " </h6>
        </div>
    </div>


";
        
        $__internal_1664ee31ef64c6f9cadc7a61d8ccab7f4b38dd657d2781024d4abd65fef591fb->leave($__internal_1664ee31ef64c6f9cadc7a61d8ccab7f4b38dd657d2781024d4abd65fef591fb_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Photographer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  65 => 10,  61 => 8,  55 => 7,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Photographer:base_article.html.twig" %}*/
/* {% block extraOptions %}*/
/*     <a href='{{ path ('backend_article_edit', {'id': entity.id})}}'><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Edit</button></a>*/
/*     <a href='{{ path ('backend_article_delete', {'id': entity.id})}}'><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Delete</button></a>*/
/* {% endblock %}*/
/* */
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*         <div class='col-md-12'>*/
/*             <h3>{{entity.name}} </h3>*/
/*             <h6>{{entity.website}} </h6>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
