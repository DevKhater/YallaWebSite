<?php

/* YallaWebsiteBackendBundle:Event:show.html.twig */
class __TwigTemplate_2f6521919220404521cccd7c75fdd61a62929d9efac3fb6924b25bbe66ba81cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Event:base_event.html.twig", "YallaWebsiteBackendBundle:Event:show.html.twig", 1);
        $this->blocks = array(
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Event:base_event.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Edit</button></a>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_event_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Delete</button></a>
";
    }

    // line 7
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 8
        echo "    <div class='col-md-8'>
        <div class='col-md-8'>
            <strong>Name : </strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo " <br/>
            ";
        // line 11
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "isVenue", array()) == false)) {
            // line 12
            echo "                <strong>Address : </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array()), "address", array()), "html", null, true);
            echo " <br/>
                <strong>Telephone : </strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location", array()), "telephone", array()), "html", null, true);
            echo " <br/>
            ";
        } else {
            // line 15
            echo "                <strong>Venue : </strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "venue", array()), "title", array()), "html", null, true);
            echo "<br />
                <strong><i>Address : </i></strong>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "venue", array()), "location", array()), "address", array()), "html", null, true);
            echo " <br/>
                <strong><i>Telephone : </i></strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "venue", array()), "location", array()), "telephone", array()), "html", null, true);
            echo " <br/>
            ";
        }
        // line 19
        echo "            ";
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "startDate", array()), "F jS") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "endDate", array()), "F jS"))) {
            echo " 
                <strong>Date : </strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "startDate", array()), "F jS"), "html", null, true);
            echo " <br/>
                &emsp;&emsp;Start : ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "startDate", array()), "g:ia"), "html", null, true);
            echo "
                &emsp;&emsp;End : ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "endDate", array()), "g:ia"), "html", null, true);
            echo "<br/>
            ";
        } else {
            // line 24
            echo "                <strong>Start Date : </strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "startDate", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo " <br/>
                <strong>End Date : </strong>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "endDate", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo " <br/>
            ";
        }
        // line 27
        echo "            <strong>Description : </strong>";
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", array());
        echo " <br/>
            <strong>Tags</strong>
            ";
        // line 29
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTags", array(), "method")) {
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getTags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 31
                echo "                    <span class=\"label label-primary\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo " </span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            ";
        }
        echo "<br/>
            <strong>Similar Artists</strong>
            ";
        // line 35
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getSimilarArtist", array())) {
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getSimilarArtist", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
                // line 37
                echo "                    <p> <a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_show", array("id" => $this->getAttribute($context["art"], "id", array()))), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "title", array()), "html", null, true);
                echo "</a> <p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            ";
        }
        // line 40
        echo "            
            
        </div>
        <div class=\"col-md-4\">
            ";
        // line 44
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "media", array()), "medium", array());
        // line 45
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 45,  163 => 44,  157 => 40,  154 => 39,  143 => 37,  138 => 36,  136 => 35,  130 => 33,  121 => 31,  116 => 30,  114 => 29,  108 => 27,  103 => 25,  98 => 24,  93 => 22,  89 => 21,  85 => 20,  80 => 19,  75 => 17,  71 => 16,  66 => 15,  61 => 13,  56 => 12,  54 => 11,  50 => 10,  46 => 8,  43 => 7,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Event:base_event.html.twig" %}*/
/* {% block extraOptions %}*/
/*     <a href="{{ path ('backend_event_edit', {'id': entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Edit</button></a>*/
/*     <a href="{{ path ('backend_event_delete', {'id': entity.id})}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Delete</button></a>*/
/* {% endblock %}*/
/* */
/* {% block controlleraction  %}*/
/*     <div class='col-md-8'>*/
/*         <div class='col-md-8'>*/
/*             <strong>Name : </strong>{{entity.title}} <br/>*/
/*             {% if entity.isVenue == false %}*/
/*                 <strong>Address : </strong>{{entity.location.address }} <br/>*/
/*                 <strong>Telephone : </strong>{{entity.location.telephone }} <br/>*/
/*             {% else %}*/
/*                 <strong>Venue : </strong> {{entity.venue.title }}<br />*/
/*                 <strong><i>Address : </i></strong>{{entity.venue.location.address }} <br/>*/
/*                 <strong><i>Telephone : </i></strong>{{entity.venue.location.telephone }} <br/>*/
/*             {% endif %}*/
/*             {% if entity.startDate|date("F jS") ==  entity.endDate|date("F jS") %} */
/*                 <strong>Date : </strong>{{entity.startDate|date("F jS")}} <br/>*/
/*                 &emsp;&emsp;Start : {{entity.startDate|date("g:ia")}}*/
/*                 &emsp;&emsp;End : {{entity.endDate|date("g:ia")}}<br/>*/
/*             {% else %}*/
/*                 <strong>Start Date : </strong>{{entity.startDate|date("F jS \\a\\t g:ia")}} <br/>*/
/*                 <strong>End Date : </strong>{{entity.endDate|date("F jS \\a\\t g:ia")}} <br/>*/
/*             {% endif %}*/
/*             <strong>Description : </strong>{{entity.content|raw}} <br/>*/
/*             <strong>Tags</strong>*/
/*             {% if entity.getTags() %}*/
/*                 {% for tag in entity.getTags %}*/
/*                     <span class="label label-primary"> {{ tag.name }} </span>*/
/*                 {% endfor %}*/
/*             {% endif %}<br/>*/
/*             <strong>Similar Artists</strong>*/
/*             {% if entity.getSimilarArtist %}*/
/*                 {% for art in entity.getSimilarArtist %}*/
/*                     <p> <a href='{{ path('backend_artist_show', {id: art.id}) }}'>{{ art.title }}</a> <p>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             */
/*             */
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {% thumbnail  entity.media, 'medium' %}*/
/*         </div>*/
/*     {% endblock %}*/
/* */
