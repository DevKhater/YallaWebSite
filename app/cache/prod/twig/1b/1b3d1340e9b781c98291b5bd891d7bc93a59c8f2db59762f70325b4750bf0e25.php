<?php

/* YallaWebsiteBackendBundle:Artist:index.html.twig */
class __TwigTemplate_3ae4b8efd4eb263f1f7fe7bd7d76f65a97c2c1f210715492cc40925f0cd1f652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Artist:base_artist.html.twig", "YallaWebsiteBackendBundle:Artist:index.html.twig", 1);
        $this->blocks = array(
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
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : null))) {
            // line 4
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <strong>No Artists!</strong> Found in database.
        </div>
    ";
        } else {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Artists Information
                    </div>
                    <div class=\"panel-body\">
                        <p><strong>Number of Artists :</strong> <span class=\"badge badge-inverse\">";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["entities"]) ? $context["entities"] : null), "html", null, true);
            echo "</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Artist Listing
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover zebra\">
                                <thead>
                                    <tr>
                                        <th></th>                                        
                                        <th>Artist Name</th>
                                        <th>Artist Biogtaphy</th>
                                        <th>Artist Social Media Links</th>
                                        <th>Artist Cover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 39
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
                // line 40
                echo "                                        <tr>
                                            <td style=\"text-align: center;\"><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_delete", array("id" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i> Delete</button></a>
                                                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_show", array("id" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i> View </button></a>
                                            </td>
                                            <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_edit", array("id" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "title", array()), "html", null, true);
                echo "</a></td>
                                            
                                            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["artist"], "biography", array()), 0, 80), "html", null, true);
                echo "</td>
                                            <td>
                                                ";
                // line 48
                $context["entity"] = $context["artist"];
                // line 49
                echo "                                                ";
                $this->loadTemplate("@YallaWebsiteFrontendBundle/views/Template/artistSocialMedia.html.twig", "YallaWebsiteBackendBundle:Artist:index.html.twig", 49)->display($context);
                // line 50
                echo "                                            </td>
                                            <td>";
                // line 51
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["artist"], "media", array()), "small", array());
                echo "</td>
                                        </tr>
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
            // line 54
            echo "                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class=\"panel-footer\">              
                        <div class=\"navigation\">
                            ";
            // line 61
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
            echo "
                        </div>
                    </div>
                </div>
            </div>        

        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Artist:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 61,  142 => 54,  125 => 51,  122 => 50,  119 => 49,  117 => 48,  112 => 46,  105 => 44,  100 => 42,  96 => 41,  93 => 40,  76 => 39,  49 => 15,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Artist:base_artist.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     {% if pagination is empty %}*/
/*         <div class="alert alert-info" role="alert">*/
/*             <strong>No Artists!</strong> Found in database.*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Artists Information*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <p><strong>Number of Artists :</strong> <span class="badge badge-inverse">{{ entities }}</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12 col-sm-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Artist Listing*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered table-hover zebra">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th></th>                                        */
/*                                         <th>Artist Name</th>*/
/*                                         <th>Artist Biogtaphy</th>*/
/*                                         <th>Artist Social Media Links</th>*/
/*                                         <th>Artist Cover</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for artist in pagination %}*/
/*                                         <tr>*/
/*                                             <td style="text-align: center;"><a href="{{path ('backend_artist_delete',  {'id': artist.id}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Delete</button></a>*/
/*                                                 <a href="{{path ('backend_artist_show',  {'id': artist.id}) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button></a>*/
/*                                             </td>*/
/*                                             <td><a href="{{ path ('backend_artist_edit',  {'id': artist.id})}}">{{artist.title}}</a></td>*/
/*                                             */
/*                                             <td>{{artist.biography[0:80]}}</td>*/
/*                                             <td>*/
/*                                                 {% set entity = artist %}*/
/*                                                 {% include '@YallaWebsiteFrontendBundle/views/Template/artistSocialMedia.html.twig'%}*/
/*                                             </td>*/
/*                                             <td>{% thumbnail  artist.media, 'small' %}</td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-footer">              */
/*                         <div class="navigation">*/
/*                             {{ knp_pagination_render(pagination) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>        */
/* */
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* {% endblock %}*/
