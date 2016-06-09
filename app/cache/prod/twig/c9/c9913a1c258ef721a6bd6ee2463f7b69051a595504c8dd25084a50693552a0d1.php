<?php

/* YallaWebsiteBackendBundle:Venue:show.html.twig */
class __TwigTemplate_feb9f1a2c429047dffd56587ad383f5e891cedac9cd6af6ed21355e88fd53f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Venue:base_venue.html.twig", "YallaWebsiteBackendBundle:Venue:show.html.twig", 1);
        $this->blocks = array(
            'extraOptions' => array($this, 'block_extraOptions'),
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
    public function block_extraOptions($context, array $blocks = array())
    {
        // line 3
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
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
        echo " </br>

            <strong>Address : </strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array()), "address", array()), "html", null, true);
        echo " </br>
            

                <strong>Website : </strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "website", array()), "html", null, true);
        echo " </br>

                <strong>    Telephone : </strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array()), "telephone", array()), "html", null, true);
        echo " </br>

            <strong>    Description : </strong>";
        // line 17
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", array());
        echo " </br>
            <strong>Tags</strong>
            ";
        // line 19
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTags", array(), "method")) {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 21
                echo "                    <span class=\"label label-primary\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo " </span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
        }
        // line 24
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 26
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()), "medium", array());
        // line 27
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Venue:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  98 => 26,  94 => 24,  91 => 23,  82 => 21,  77 => 20,  75 => 19,  70 => 17,  65 => 15,  60 => 13,  54 => 10,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Venue:base_venue.html.twig" %}*/
/* {% block extraOptions %}*/
/*         <a href="{{ path ('backend_venue_edit', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Edit</button></a>*/
/*         <a href="{{ path ('backend_venue_delete', {'id':entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Delete</button></a>*/
/*         {% endblock %}*/
/* {% block controlleraction  %}*/
/*     <div class='col-md-8'>*/
/*         <strong>Name : {{entity.title}} </br>*/
/* */
/*             <strong>Address : </strong>{{entity.location.address }} </br>*/
/*             */
/* */
/*                 <strong>Website : </strong>{{entity.website}} </br>*/
/* */
/*                 <strong>    Telephone : </strong>{{entity.location.telephone}} </br>*/
/* */
/*             <strong>    Description : </strong>{{entity.content|raw}} </br>*/
/*             <strong>Tags</strong>*/
/*             {% if entity.getTags() %}*/
/*                 {% for tag in entity.getTags %}*/
/*                     <span class="label label-primary"> {{ tag.name }} </span>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% thumbnail  entity.media, 'medium' %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
