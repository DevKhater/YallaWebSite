<?php

/* YallaWebsiteFrontendBundle:Events:show.html.twig */
class __TwigTemplate_22f859b0acbe15f746062f3c022884e023c63bcf24e5e5cf0fc36b4e983c2d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Events:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@YallaWebsiteFrontendBundle/views/front_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c049bd75ba7ff2f293c1a9f96b82347b4332dd67c6437e5a28539c9644af4a72 = $this->env->getExtension("native_profiler");
        $__internal_c049bd75ba7ff2f293c1a9f96b82347b4332dd67c6437e5a28539c9644af4a72->enter($__internal_c049bd75ba7ff2f293c1a9f96b82347b4332dd67c6437e5a28539c9644af4a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Events:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c049bd75ba7ff2f293c1a9f96b82347b4332dd67c6437e5a28539c9644af4a72->leave($__internal_c049bd75ba7ff2f293c1a9f96b82347b4332dd67c6437e5a28539c9644af4a72_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9f0d9b9e63996f9d7b6359c8ce1f8611ea2153ecfab1d3ec9eb1205ad21cfda = $this->env->getExtension("native_profiler");
        $__internal_e9f0d9b9e63996f9d7b6359c8ce1f8611ea2153ecfab1d3ec9eb1205ad21cfda->enter($__internal_e9f0d9b9e63996f9d7b6359c8ce1f8611ea2153ecfab1d3ec9eb1205ad21cfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"wrapper\">
        ";
        // line 4
        if ((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) {
            // line 5
            echo "            <div class=\"theEntityDiv\">
                <div class=\"innerTitle\">
                    <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
            echo "</h1>
                </div>

                <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\" style=\"padding-right: 0;\">
                    <div id=\"innerEntityImage\" class=\"event_innerEntityImage\">
                        ";
            // line 12
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media", array()), "large", array("class" => "img-responsive"));
            // line 13
            echo "                    </div>
                </div>
                <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\" >
                    <div id=\"innerEventInformation\">
                        ";
            // line 17
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "F jS") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "F jS"))) {
                echo " 
                            <strong>Date : </strong>";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "F jS Y"), "html", null, true);
                echo "<br/>
                            &emsp;&emsp;Start : ";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "g:ia"), "html", null, true);
                echo "<br/>
                            &emsp;&emsp;End : ";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "g:ia"), "html", null, true);
                echo "<br/>
                        ";
            } else {
                // line 22
                echo "                            <strong>Start Date : </strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "F jS Y \\a\\t g:ia"), "html", null, true);
                echo " <br/>
                            <strong>End Date : </strong>";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "F jS Y \\a\\t g:ia"), "html", null, true);
                echo " <br/>
                        ";
            }
            // line 25
            echo "                        ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isVenue", array()) == true)) {
                // line 26
                echo "                            <strong>Venue : </strong> <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "venue", array()), "website", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "venue", array()), "title", array()), "html", null, true);
                echo "</a><br />
                            <strong><i>Address : </i></strong>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "venue", array()), "location", array()), "address", array()), "html", null, true);
                echo " <br/>
                            <strong><i>Telephone : </i></strong>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "venue", array()), "location", array()), "telephone", array()), "html", null, true);
                echo " <br/>
                        ";
            } else {
                // line 30
                echo "                            <strong><i>Address : </i></strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "address", array()), "html", null, true);
                echo " <br/>
                            <strong><i>Telephone : </i></strong>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "telephone", array()), "html", null, true);
                echo " <br/>
                        ";
            }
            // line 33
            echo "                    </div>
                </div>
                <div class=\"wrapper\">
                    <div id=\"innerEntityContent\" class=\"resp_font\">
                        <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array()), "html", null, true);
            echo "</p> 
                    </div>
                </div>
            </div>
        ";
        }
        // line 42
        echo "    </div>
";
        
        $__internal_e9f0d9b9e63996f9d7b6359c8ce1f8611ea2153ecfab1d3ec9eb1205ad21cfda->leave($__internal_e9f0d9b9e63996f9d7b6359c8ce1f8611ea2153ecfab1d3ec9eb1205ad21cfda_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Events:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  127 => 37,  121 => 33,  116 => 31,  111 => 30,  106 => 28,  102 => 27,  95 => 26,  92 => 25,  87 => 23,  82 => 22,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  59 => 13,  57 => 12,  49 => 7,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*     <div class="wrapper">*/
/*         {%  if (entity) %}*/
/*             <div class="theEntityDiv">*/
/*                 <div class="innerTitle">*/
/*                     <h1>{{entity.title}}</h1>*/
/*                 </div>*/
/* */
/*                 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" style="padding-right: 0;">*/
/*                     <div id="innerEntityImage" class="event_innerEntityImage">*/
/*                         {% thumbnail entity.media, 'large' with {'class': 'img-responsive'} %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >*/
/*                     <div id="innerEventInformation">*/
/*                         {% if entity.startDate|date("F jS") ==  entity.endDate|date("F jS") %} */
/*                             <strong>Date : </strong>{{entity.startDate|date("F jS Y")}}<br/>*/
/*                             &emsp;&emsp;Start : {{entity.startDate|date("g:ia")}}<br/>*/
/*                             &emsp;&emsp;End : {{entity.endDate|date("g:ia")}}<br/>*/
/*                         {% else %}*/
/*                             <strong>Start Date : </strong>{{entity.startDate|date("F jS Y \\a\\t g:ia")}} <br/>*/
/*                             <strong>End Date : </strong>{{entity.endDate|date("F jS Y \\a\\t g:ia")}} <br/>*/
/*                         {% endif %}*/
/*                         {% if entity.isVenue == true %}*/
/*                             <strong>Venue : </strong> <a href="{{entity.venue.website}}">{{ entity.venue.title }}</a><br />*/
/*                             <strong><i>Address : </i></strong>{{ entity.venue.location.address }} <br/>*/
/*                             <strong><i>Telephone : </i></strong>{{ entity.venue.location.telephone }} <br/>*/
/*                         {% else %}*/
/*                             <strong><i>Address : </i></strong>{{ entity.location.address }} <br/>*/
/*                             <strong><i>Telephone : </i></strong>{{ entity.location.telephone }} <br/>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="wrapper">*/
/*                     <div id="innerEntityContent" class="resp_font">*/
/*                         <p>{{ entity.content }}</p> */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
