<?php

/* YallaWebsiteBackendBundle:Photographer:show.html.twig */
class __TwigTemplate_5b3b7571b103ccb4b1b74cc54b8d4e3bfe3bf07ca26234493f630f4ee298a4ed extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        // line 3
        echo "    <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href='";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
    }

    // line 7
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
        <div class='col-md-12'>
            <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo " </h3>
            <h6>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "website", array()), "html", null, true);
        echo " </h6>
        </div>
    </div>


";
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
        return array (  54 => 11,  50 => 10,  46 => 8,  43 => 7,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
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
