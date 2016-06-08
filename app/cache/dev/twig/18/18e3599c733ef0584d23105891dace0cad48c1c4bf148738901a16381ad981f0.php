<?php

/* YallaWebsiteBackendBundle:Photographer:show.html.twig */
class __TwigTemplate_1746fd2febdc6b425a3f96ee27360ba55166ddeed73d49c22d1e3ba5dfb4eceb extends Twig_Template
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
        $__internal_b291f9d04e2cf4be3437d3379ef966b02925accef755feefacdb732c05e5cdee = $this->env->getExtension("native_profiler");
        $__internal_b291f9d04e2cf4be3437d3379ef966b02925accef755feefacdb732c05e5cdee->enter($__internal_b291f9d04e2cf4be3437d3379ef966b02925accef755feefacdb732c05e5cdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b291f9d04e2cf4be3437d3379ef966b02925accef755feefacdb732c05e5cdee->leave($__internal_b291f9d04e2cf4be3437d3379ef966b02925accef755feefacdb732c05e5cdee_prof);

    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_2949aa7476fc9f1641e39b5268ccc9dd881c8a23b1686ff57086ff5f893dee3a = $this->env->getExtension("native_profiler");
        $__internal_2949aa7476fc9f1641e39b5268ccc9dd881c8a23b1686ff57086ff5f893dee3a->enter($__internal_2949aa7476fc9f1641e39b5268ccc9dd881c8a23b1686ff57086ff5f893dee3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        // line 3
        echo "    <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href='";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
        
        $__internal_2949aa7476fc9f1641e39b5268ccc9dd881c8a23b1686ff57086ff5f893dee3a->leave($__internal_2949aa7476fc9f1641e39b5268ccc9dd881c8a23b1686ff57086ff5f893dee3a_prof);

    }

    // line 7
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_d7d742f3a86642e11ee2ac448b6bb8c022b9c9c044d5937352a66920a31fb2b3 = $this->env->getExtension("native_profiler");
        $__internal_d7d742f3a86642e11ee2ac448b6bb8c022b9c9c044d5937352a66920a31fb2b3->enter($__internal_d7d742f3a86642e11ee2ac448b6bb8c022b9c9c044d5937352a66920a31fb2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_d7d742f3a86642e11ee2ac448b6bb8c022b9c9c044d5937352a66920a31fb2b3->leave($__internal_d7d742f3a86642e11ee2ac448b6bb8c022b9c9c044d5937352a66920a31fb2b3_prof);

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
