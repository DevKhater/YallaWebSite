<?php

/* YallaWebsiteFrontendBundle:Artist:index.html.twig */
class __TwigTemplate_98a4a512cbd07369a31bfaba611ea02689322bc8a1739ab90cf7e9e56e2d3f32 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"wrapper\">
        <div class=\"IndexTitle\">
            <h1>Artists</h1>
        </div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
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
                    <button type=\"button\" class=\"btn btn-secondary btn-xs customArtistButton\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "title", array()), "html", null, true);
            echo "
                    </button>
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
            $context['_seq'] = twig_ensure_traversable((isset($context["upcoming"]) ? $context["upcoming"] : null));
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
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 50
            echo "                ";
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "YallaWebsiteFrontendBundle:Template:pagination.html.twig");
            echo "
            ";
        }
        // line 52
        echo "        </div>
    </div>
";
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
        return array (  164 => 52,  158 => 50,  156 => 49,  151 => 46,  131 => 39,  128 => 38,  126 => 37,  120 => 33,  114 => 32,  107 => 30,  102 => 29,  98 => 28,  92 => 25,  88 => 24,  84 => 22,  82 => 21,  75 => 17,  69 => 14,  64 => 12,  57 => 10,  54 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 2,);
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
/*                     <button type="button" class="btn btn-secondary btn-xs customArtistButton">*/
/*                         {{ artist.title }}*/
/*                     </button>*/
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
