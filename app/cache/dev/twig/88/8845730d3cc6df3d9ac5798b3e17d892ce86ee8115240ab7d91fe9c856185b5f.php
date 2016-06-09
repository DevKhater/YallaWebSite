<?php

/* YallaWebsiteBackendBundle:Member:show.html.twig */
class __TwigTemplate_21d635d3eb8101ad99e127ae12fb173fec9d059ce229b51265f1d1054a304cd0 extends Twig_Template
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
        $__internal_037204696c2129e289a806b8a877a33884bbe590c16df67b4f6b8c77171922b7 = $this->env->getExtension("native_profiler");
        $__internal_037204696c2129e289a806b8a877a33884bbe590c16df67b4f6b8c77171922b7->enter($__internal_037204696c2129e289a806b8a877a33884bbe590c16df67b4f6b8c77171922b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Member:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037204696c2129e289a806b8a877a33884bbe590c16df67b4f6b8c77171922b7->leave($__internal_037204696c2129e289a806b8a877a33884bbe590c16df67b4f6b8c77171922b7_prof);

    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_2d179f403d6b79528637fd5ecb7001d296119e674cffc8473a58998682c9a659 = $this->env->getExtension("native_profiler");
        $__internal_2d179f403d6b79528637fd5ecb7001d296119e674cffc8473a58998682c9a659->enter($__internal_2d179f403d6b79528637fd5ecb7001d296119e674cffc8473a58998682c9a659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
        
        $__internal_2d179f403d6b79528637fd5ecb7001d296119e674cffc8473a58998682c9a659->leave($__internal_2d179f403d6b79528637fd5ecb7001d296119e674cffc8473a58998682c9a659_prof);

    }

    // line 6
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_daaa4f95b8b3d9feffe745689d450650b181b798c1e3e428921a32603f61a731 = $this->env->getExtension("native_profiler");
        $__internal_daaa4f95b8b3d9feffe745689d450650b181b798c1e3e428921a32603f61a731->enter($__internal_daaa4f95b8b3d9feffe745689d450650b181b798c1e3e428921a32603f61a731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 7
        echo "    <div class=\"row\">
        <div class='col-md-8'>
            <strong>Name : </strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo " <br/>
            <strong>Website : </strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website", array()), "html", null, true);
        echo " <br/>
        </div>
        <div class=\"col-md-4\">
            ";
        // line 13
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "displayIndex", array());
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_daaa4f95b8b3d9feffe745689d450650b181b798c1e3e428921a32603f61a731->leave($__internal_daaa4f95b8b3d9feffe745689d450650b181b798c1e3e428921a32603f61a731_prof);

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
        return array (  77 => 14,  75 => 13,  69 => 10,  65 => 9,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
