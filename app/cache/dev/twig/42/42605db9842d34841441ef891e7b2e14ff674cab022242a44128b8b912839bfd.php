<?php

/* YallaWebsiteFrontendBundle:Venue:index.html.twig */
class __TwigTemplate_2d617e17cc48996d749289c4d550d52b36f662350ea40407560e09e0031f01f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Venue:index.html.twig", 2);
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
        $__internal_90104497da9230e9009db4175dd0e4843e40925da6a384ddd259ca7b81ef4d87 = $this->env->getExtension("native_profiler");
        $__internal_90104497da9230e9009db4175dd0e4843e40925da6a384ddd259ca7b81ef4d87->enter($__internal_90104497da9230e9009db4175dd0e4843e40925da6a384ddd259ca7b81ef4d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Venue:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90104497da9230e9009db4175dd0e4843e40925da6a384ddd259ca7b81ef4d87->leave($__internal_90104497da9230e9009db4175dd0e4843e40925da6a384ddd259ca7b81ef4d87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1dc0be0d61aa6b699227b85735b3bd85098f8a2f62ac284e08e91b6e151b6fc = $this->env->getExtension("native_profiler");
        $__internal_c1dc0be0d61aa6b699227b85735b3bd85098f8a2f62ac284e08e91b6e151b6fc->enter($__internal_c1dc0be0d61aa6b699227b85735b3bd85098f8a2f62ac284e08e91b6e151b6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"wrapper\">
        <div class=\"IndexTitle\">
            <h1>Places To Go</h1>
        </div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
            // line 9
            echo "            <div class=\"venueDiv\">
                <div class=\"venueContent\" data-toggle=\"modal\" data-target=\"#";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "slug", array()), "html", null, true);
            echo "\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["venue"], "media", array()), "displayIndex");
            echo "')\">
                    <div class=\"venueDivTitle\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "title", array()), "html", null, true);
            echo "
                    </div>
                </div>
                <div id=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "slug", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal_image\">
                                ";
            // line 19
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["venue"], "media", array()), "large", array("class" => "img-responsive"));
            // line 20
            echo "                            </div>
                            <div class=\"modal_title\">
                                <h2>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "title", array()), "html", null, true);
            echo "</h2>
                            </div>
                            <div class=\"modal_description\">
                                <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "content", array()), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"modal_footer\">
                                <p>Address: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["venue"], "location", array()), "address", array()), "html", null, true);
            echo "<br/>
                                    Telephone: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["venue"], "location", array()), "telephone", array()), "html", null, true);
            echo "<br/>
                                    Working Hours: From <span id='yellow_color'>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["venue"], "workingFrom", array()), "date", array()), "g:iA"), "html", null, true);
            echo "</span> to <span id='yellow_color'>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["venue"], "workingTo", array()), "date", array()), "g:iA"), "html", null, true);
            echo "</span><br/>
                                    Website: <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "website", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "title", array()), "html", null, true);
            echo "</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        <div class=\"page_pagination\">
            ";
        // line 41
        if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
            // line 42
            echo "                ";
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "YallaWebsiteFrontendBundle:Template:pagination.html.twig");
            echo "
            ";
        }
        // line 44
        echo "        </div>
    </div>
";
        
        $__internal_c1dc0be0d61aa6b699227b85735b3bd85098f8a2f62ac284e08e91b6e151b6fc->leave($__internal_c1dc0be0d61aa6b699227b85735b3bd85098f8a2f62ac284e08e91b6e151b6fc_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Venue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  127 => 42,  125 => 41,  121 => 39,  105 => 31,  99 => 30,  95 => 29,  91 => 28,  85 => 25,  79 => 22,  75 => 20,  73 => 19,  66 => 15,  60 => 12,  53 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*     <div class="wrapper">*/
/*         <div class="IndexTitle">*/
/*             <h1>Places To Go</h1>*/
/*         </div>*/
/*         {% for venue in pagination  %}*/
/*             <div class="venueDiv">*/
/*                 <div class="venueContent" data-toggle="modal" data-target="#{{venue.slug}}" style="background-image: url('{% path  venue.media, 'displayIndex' %}')">*/
/*                     <div class="venueDivTitle">*/
/*                         {{ venue.title }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="{{venue.slug}}" class="modal fade" role="dialog">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/*                             <div class="modal_image">*/
/*                                 {% thumbnail venue.media, 'large' with {'class': 'img-responsive'} %}*/
/*                             </div>*/
/*                             <div class="modal_title">*/
/*                                 <h2>{{venue.title}}</h2>*/
/*                             </div>*/
/*                             <div class="modal_description">*/
/*                                 <p>{{venue.content}}</p>*/
/*                             </div>*/
/*                             <div class="modal_footer">*/
/*                                 <p>Address: {{venue.location.address}}<br/>*/
/*                                     Telephone: {{venue.location.telephone}}<br/>*/
/*                                     Working Hours: From <span id='yellow_color'>{{venue.workingFrom.date|date("g:iA")}}</span> to <span id='yellow_color'>{{venue.workingTo.date|date("g:iA")}}</span><br/>*/
/*                                     Website: <a href="{{venue.website}}">{{venue.title}}</a></p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="page_pagination">*/
/*             {% if (pagination) %}*/
/*                 {{ knp_pagination_render(pagination, 'YallaWebsiteFrontendBundle:Template:pagination.html.twig') }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
