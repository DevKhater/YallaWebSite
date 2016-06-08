<?php

/* YallaWebsiteFrontendBundle:Artist:index.html.twig */
class __TwigTemplate_a94b23e07ef810a2c62d0bd74f6553cda4a7c1c0aa95d307c4e631d6cbd5d549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@YallaWebsiteFrontendBundle/views/front_base.html.twig", "YallaWebsiteFrontendBundle:Artist:index.html.twig", 2);
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
        $__internal_7919a0dbe3575e5653c578168fb42583c6c08456cb540ce78e3364d013cbe42a = $this->env->getExtension("native_profiler");
        $__internal_7919a0dbe3575e5653c578168fb42583c6c08456cb540ce78e3364d013cbe42a->enter($__internal_7919a0dbe3575e5653c578168fb42583c6c08456cb540ce78e3364d013cbe42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Artist:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7919a0dbe3575e5653c578168fb42583c6c08456cb540ce78e3364d013cbe42a->leave($__internal_7919a0dbe3575e5653c578168fb42583c6c08456cb540ce78e3364d013cbe42a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1d874cc8919cb191dd307ecd393eec8a659cdd90450de57a11ee3e441d9fe5d = $this->env->getExtension("native_profiler");
        $__internal_a1d874cc8919cb191dd307ecd393eec8a659cdd90450de57a11ee3e441d9fe5d->enter($__internal_a1d874cc8919cb191dd307ecd393eec8a659cdd90450de57a11ee3e441d9fe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"wrapper\">
        <div class=\"IndexTitle\">
            <h1>Artists</h1>
        </div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 9
            echo "            <div class=\"artistDiv col-xs-15 col-sm-15 col-md-15 col-lg-15\">
                <div class=\"artistContent\" data-toggle=\"modal\" data-target=\"#";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "id", array()), "html", null, true);
            echo "\" style=\"background-image: url('";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($context["artist"], "media", array()), "displayIndex");
            echo "')\">
                </div>
                <div class=\"artistDivTitle\" data-toggle=\"modal\" data-target=\"#";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "id", array()), "html", null, true);
            echo "\" >
                    <span type=\"button\" class=\"btn btn-secondary btn-xs customArtistButton\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "title", array()), "html", null, true);
            echo "
                    </span>
                </div>
                <div id=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                                <div class=\"modal_image\">
                                    ";
            // line 21
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["artist"], "media", array()), "large", array());
            // line 22
            echo "                                </div>
                                <div class=\"modal_description\">
                                    <h2>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "title", array()), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "biography", array()), "html", null, true);
            echo "</p>
                                    <div class=\"artist_upcoming_events\">
                                        <p>Upcoming Events</p>
                                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["upcoming"]) ? $context["upcoming"] : $this->getContext($context, "upcoming")));
            foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                // line 29
                echo "                                            ";
                if (($this->getAttribute($context["artist"], "id", array()) == $context["key"])) {
                    echo " 
                                                <span><a href='";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yalla_website_frontened_event", array("id" => $this->getAttribute($this->getAttribute($context["data"], 0, array(), "array"), "slug", array()))), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], 0, array(), "array"), "title", array()), "html", null, true);
                    echo "</a></span>
                                                ";
                }
                // line 32
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                                    </div>
                                </div>
                                <div class=\"modal_footer\">
                                    <p>
                                        ";
            // line 37
            $context["entity"] = $context["artist"];
            // line 38
            echo "                                        ";
            $this->loadTemplate("@YallaWebsiteFrontendBundle/views/Template/artistSocialMedia.html.twig", "YallaWebsiteFrontendBundle:Artist:index.html.twig", 38)->display($context);
            // line 39
            echo "                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        <div class=\"page_pagination\">

            ";
        // line 49
        if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
            // line 50
            echo "                ";
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "YallaWebsiteFrontendBundle:Template:pagination.html.twig");
            echo "
            ";
        }
        // line 52
        echo "        </div>
    </div>
";
        
        $__internal_a1d874cc8919cb191dd307ecd393eec8a659cdd90450de57a11ee3e441d9fe5d->leave($__internal_a1d874cc8919cb191dd307ecd393eec8a659cdd90450de57a11ee3e441d9fe5d_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Artist:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 52,  167 => 50,  165 => 49,  160 => 46,  140 => 39,  137 => 38,  135 => 37,  129 => 33,  123 => 32,  116 => 30,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 22,  91 => 21,  84 => 17,  78 => 14,  73 => 12,  66 => 10,  63 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "@YallaWebsiteFrontendBundle/views/front_base.html.twig" %}*/
/* {% block body %}*/
/*     <div class="wrapper">*/
/*         <div class="IndexTitle">*/
/*             <h1>Artists</h1>*/
/*         </div>*/
/*         {% for artist in pagination  %}*/
/*             <div class="artistDiv col-xs-15 col-sm-15 col-md-15 col-lg-15">*/
/*                 <div class="artistContent" data-toggle="modal" data-target="#{{artist.id}}" style="background-image: url('{% path  artist.media, 'displayIndex' %}')">*/
/*                 </div>*/
/*                 <div class="artistDivTitle" data-toggle="modal" data-target="#{{artist.id}}" >*/
/*                     <span type="button" class="btn btn-secondary btn-xs customArtistButton">*/
/*                         {{ artist.title }}*/
/*                     </span>*/
/*                 </div>*/
/*                 <div id="{{artist.id}}" class="modal fade" role="dialog">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/*                                 <div class="modal_image">*/
/*                                     {% thumbnail artist.media, 'large' %}*/
/*                                 </div>*/
/*                                 <div class="modal_description">*/
/*                                     <h2>{{artist.title}}</h2>*/
/*                                     <p>{{artist.biography}}</p>*/
/*                                     <div class="artist_upcoming_events">*/
/*                                         <p>Upcoming Events</p>*/
/*                                         {% for key, data in upcoming %}*/
/*                                             {% if artist.id == key %} */
/*                                                 <span><a href='{{path('yalla_website_frontened_event', {id: data[0].slug})}}'>{{ data[0].title }}</a></span>*/
/*                                                 {%endif%}*/
/*                                             {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="modal_footer">*/
/*                                     <p>*/
/*                                         {% set entity = artist %}*/
/*                                         {% include '@YallaWebsiteFrontendBundle/views/Template/artistSocialMedia.html.twig'%}*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="page_pagination">*/
/* */
/*             {% if (pagination) %}*/
/*                 {{ knp_pagination_render(pagination, 'YallaWebsiteFrontendBundle:Template:pagination.html.twig') }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
