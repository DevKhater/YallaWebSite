<?php

/* YallaWebsiteBackendBundle:Profile:show.html.twig */
class __TwigTemplate_47180649c94bef3ba24cd674f2b2e52e35747239d20d68dcf2675d161e45ab86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Venue:base_venue.html.twig", "YallaWebsiteBackendBundle:Profile:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class='col-md-12'>
            <a href='";
        // line 5
        echo $this->env->getExtension('routing')->getPath("backend_profile_edit");
        echo "'><span class=\"label label-primary\">Edit</span></a>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-8'>
            Name : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "displayName", array()), "html", null, true);
        echo " 
        </div>
        <div class=\"col-md-4\">
            ";
        // line 13
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()), "small", array());
        // line 14
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  49 => 13,  43 => 10,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Venue:base_venue.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*         <div class='col-md-12'>*/
/*             <a href='{{ path ('backend_profile_edit')}}'><span class="label label-primary">Edit</span></a>*/
/*         </div>*/
/*     </div>*/
/*     <div class='row'>*/
/*         <div class='col-md-8'>*/
/*             Name : {{entity.displayName}} */
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% thumbnail  entity.media, 'small' %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
