<?php

/* YallaWebsiteBackendBundle:Member:show.html.twig */
class __TwigTemplate_1dfbe44d87b992b36c63dbc96c0a28b4efd72e0ff431adb144a77d940396999f extends Twig_Template
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
        $__internal_ca38ee13bf44ab335b9c3904ee196faf6b23987210cee01cf64b6fbfc08f4e98 = $this->env->getExtension("native_profiler");
        $__internal_ca38ee13bf44ab335b9c3904ee196faf6b23987210cee01cf64b6fbfc08f4e98->enter($__internal_ca38ee13bf44ab335b9c3904ee196faf6b23987210cee01cf64b6fbfc08f4e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Member:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca38ee13bf44ab335b9c3904ee196faf6b23987210cee01cf64b6fbfc08f4e98->leave($__internal_ca38ee13bf44ab335b9c3904ee196faf6b23987210cee01cf64b6fbfc08f4e98_prof);

    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_630949a6a93589e25075956d1be40dc4c1493636d7aa78f9a1535303396cc7d5 = $this->env->getExtension("native_profiler");
        $__internal_630949a6a93589e25075956d1be40dc4c1493636d7aa78f9a1535303396cc7d5->enter($__internal_630949a6a93589e25075956d1be40dc4c1493636d7aa78f9a1535303396cc7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
        
        $__internal_630949a6a93589e25075956d1be40dc4c1493636d7aa78f9a1535303396cc7d5->leave($__internal_630949a6a93589e25075956d1be40dc4c1493636d7aa78f9a1535303396cc7d5_prof);

    }

    // line 6
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_231f34a3652d04cbe3dde2e1a9eb734a9db0bcde5367e774e728f55778a803f0 = $this->env->getExtension("native_profiler");
        $__internal_231f34a3652d04cbe3dde2e1a9eb734a9db0bcde5367e774e728f55778a803f0->enter($__internal_231f34a3652d04cbe3dde2e1a9eb734a9db0bcde5367e774e728f55778a803f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_231f34a3652d04cbe3dde2e1a9eb734a9db0bcde5367e774e728f55778a803f0->leave($__internal_231f34a3652d04cbe3dde2e1a9eb734a9db0bcde5367e774e728f55778a803f0_prof);

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
