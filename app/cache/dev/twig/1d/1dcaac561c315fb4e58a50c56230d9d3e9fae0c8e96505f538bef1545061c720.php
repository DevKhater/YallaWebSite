<?php

/* YallaWebsiteBackendBundle:Artist:show.html.twig */
class __TwigTemplate_dbd4135441bfcc9c88f84523194f8a68f2e5d060e55445ed69d7599246d1984d extends Twig_Template
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
        $__internal_eadf130a3bb1a1ca78fdd0ea698c51bc402027e95f380896413e68df7dcc058f = $this->env->getExtension("native_profiler");
        $__internal_eadf130a3bb1a1ca78fdd0ea698c51bc402027e95f380896413e68df7dcc058f->enter($__internal_eadf130a3bb1a1ca78fdd0ea698c51bc402027e95f380896413e68df7dcc058f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Artist:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eadf130a3bb1a1ca78fdd0ea698c51bc402027e95f380896413e68df7dcc058f->leave($__internal_eadf130a3bb1a1ca78fdd0ea698c51bc402027e95f380896413e68df7dcc058f_prof);

    }

    // line 2
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_5916a3abbd9ed7e4ba0ee290408ce5b5abfcea0b24722ab65d44a193d6f7b64b = $this->env->getExtension("native_profiler");
        $__internal_5916a3abbd9ed7e4ba0ee290408ce5b5abfcea0b24722ab65d44a193d6f7b64b->enter($__internal_5916a3abbd9ed7e4ba0ee290408ce5b5abfcea0b24722ab65d44a193d6f7b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
        
        $__internal_5916a3abbd9ed7e4ba0ee290408ce5b5abfcea0b24722ab65d44a193d6f7b64b->leave($__internal_5916a3abbd9ed7e4ba0ee290408ce5b5abfcea0b24722ab65d44a193d6f7b64b_prof);

    }

    // line 6
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_29eace6bbd824ac6ee31df3f42717f0a60536d815198cae2aa769e9523c1e945 = $this->env->getExtension("native_profiler");
        $__internal_29eace6bbd824ac6ee31df3f42717f0a60536d815198cae2aa769e9523c1e945->enter($__internal_29eace6bbd824ac6ee31df3f42717f0a60536d815198cae2aa769e9523c1e945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 7
        echo "    <div class='col-md-8'>
        <strong>Name : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo " <br/>
            <strong>Biography: </strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "biography", array()), "html", null, true);
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
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "medium", array());
        // line 17
        echo "    </div>
";
        
        $__internal_29eace6bbd824ac6ee31df3f42717f0a60536d815198cae2aa769e9523c1e945->leave($__internal_29eace6bbd824ac6ee31df3f42717f0a60536d815198cae2aa769e9523c1e945_prof);

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
        return array (  83 => 17,  81 => 16,  76 => 13,  74 => 12,  68 => 9,  64 => 8,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
