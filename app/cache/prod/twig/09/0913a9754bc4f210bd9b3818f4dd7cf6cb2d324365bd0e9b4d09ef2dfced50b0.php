<?php

/* YallaWebsiteBackendBundle:Artist:show.html.twig */
class __TwigTemplate_337a888209530d9582a8f7f8fe3ce4a85de93fc4d90458d5ec4afb9aae146961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Artist:base_artist.html.twig", "YallaWebsiteBackendBundle:Artist:show.html.twig", 1);
        $this->blocks = array(
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Artist:base_artist.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
    }

    // line 6
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 7
        echo "    <div class='col-md-8'>
        <strong>Name : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo " <br/>
            <strong>Biography: </strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "biography", array()), "html", null, true);
        echo " <br/>
            <strong>Social Media: </strong><br/>
            <p>
                ";
        // line 12
        $this->loadTemplate("@YallaWebsiteFrontendBundle/views/Template/artistSocialMedia.html.twig", "YallaWebsiteBackendBundle:Artist:show.html.twig", 12)->display($context);
        // line 13
        echo "            </p>
    </div>
    <div class=\"col-md-4\">
        ";
        // line 16
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()), "medium", array());
        // line 17
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Artist:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  66 => 16,  61 => 13,  59 => 12,  53 => 9,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Artist:base_artist.html.twig" %}*/
/* {% block extraOptions %}*/
/*     <a href="{{ path ('backend_artist_edit', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Edit</button></a>*/
/*     <a href="{{ path ('backend_artist_delete', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Delete</button></a>*/
/* {% endblock %}*/
/* {% block controlleraction  %}*/
/*     <div class='col-md-8'>*/
/*         <strong>Name : {{entity.title}} <br/>*/
/*             <strong>Biography: </strong>{{entity.biography}} <br/>*/
/*             <strong>Social Media: </strong><br/>*/
/*             <p>*/
/*                 {% include '@YallaWebsiteFrontendBundle/views/Template/artistSocialMedia.html.twig'%}*/
/*             </p>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         {% thumbnail  entity.media, 'medium' %}*/
/*     </div>*/
/* {% endblock %}*/
