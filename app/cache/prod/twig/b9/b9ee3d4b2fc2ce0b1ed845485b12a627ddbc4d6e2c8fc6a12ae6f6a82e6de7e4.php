<?php

/* YallaWebsiteBackendBundle:Member:show.html.twig */
class __TwigTemplate_e17dff617bfdc6460401f5faf6a76a957a0c3a8dda61562b238f9a19f5dc2f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Member:base_member.html.twig", "YallaWebsiteBackendBundle:Member:show.html.twig", 1);
        $this->blocks = array(
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Member:base_member.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
    }

    // line 6
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row\">
        <div class='col-md-8'>
            <strong>Name : </strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "html", null, true);
        echo " <br/>
            <strong>Website : </strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "website", array()), "html", null, true);
        echo " <br/>
        </div>
        <div class=\"col-md-4\">
            ";
        // line 13
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()), "displayIndex", array());
        // line 14
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Member:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  60 => 13,  54 => 10,  50 => 9,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Member:base_member.html.twig" %}*/
/* {% block extraOptions %}*/
/*     <a href="{{ path ('backend_member_edit', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Edit</button></a>*/
/*     <a href="{{ path ('backend_member_delete', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Delete</button></a>*/
/* {% endblock %}*/
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*         <div class='col-md-8'>*/
/*             <strong>Name : </strong>{{entity.name}} <br/>*/
/*             <strong>Website : </strong>{{entity.website}} <br/>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% thumbnail  entity.media, 'displayIndex' %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
