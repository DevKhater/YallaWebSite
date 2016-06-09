<?php

/* YallaWebsiteBackendBundle:Venue:index.html.twig */
class __TwigTemplate_b16c8b8364ebb04102236176150dc5dff67ebe887687adc0a5f69de330765ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Venue:base_venue.html.twig", "YallaWebsiteBackendBundle:Venue:index.html.twig", 1);
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
        $__internal_4efab6ee25f991de5bb963c67447eb045d304816b3fa028119095165bd16a876 = $this->env->getExtension("native_profiler");
        $__internal_4efab6ee25f991de5bb963c67447eb045d304816b3fa028119095165bd16a876->enter($__internal_4efab6ee25f991de5bb963c67447eb045d304816b3fa028119095165bd16a876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Venue:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4efab6ee25f991de5bb963c67447eb045d304816b3fa028119095165bd16a876->leave($__internal_4efab6ee25f991de5bb963c67447eb045d304816b3fa028119095165bd16a876_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_3b5ea57d781598c867bca693eea1cf447a24c4a90e4d7f60962d9b812f56cfc0 = $this->env->getExtension("native_profiler");
        $__internal_3b5ea57d781598c867bca693eea1cf447a24c4a90e4d7f60962d9b812f56cfc0->enter($__internal_3b5ea57d781598c867bca693eea1cf447a24c4a90e4d7f60962d9b812f56cfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    ";
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 4
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <strong>No Venues!</strong> Found in database.
        </div>
    ";
        } else {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Venues Information
                    </div>
                    <div class=\"panel-body\">
                        <p><strong>Number of Venues :</strong> <span class=\"badge badge-inverse\">";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "html", null, true);
            echo "</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Event Listing
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover zebra\">
                                <thead>
                                    <tr>
                                        <th></th>                                        
                                        <th>Venue Name</th>
                                        <th>Venue Address</th>
                                        <th>Venue Number</th>
                                        <th>Venue Website</th>
                                        <th>Venue Cover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
                // line 41
                echo "                                        <tr>
                                            <td style=\"text-align: center;\"><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_delete", array("id" => $this->getAttribute($context["venue"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i> Delete</button></a>
                                                <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_show", array("id" => $this->getAttribute($context["venue"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i> View </button></a>
                                            </td>
                                            <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_edit", array("id" => $this->getAttribute($context["venue"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "title", array()), "html", null, true);
                echo "</a></td>
                                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["venue"], "location", array()), "address", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["venue"], "location", array()), "telephone", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "website", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 49
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["venue"], "media", array()), "small", array());
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class=\"panel-footer\">              
                        <div class=\"navigation\">
                            ";
            // line 59
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                        </div>
                    </div>
                </div>
            </div>        

        </div>
    </div>
";
        }
        
        $__internal_3b5ea57d781598c867bca693eea1cf447a24c4a90e4d7f60962d9b812f56cfc0->leave($__internal_3b5ea57d781598c867bca693eea1cf447a24c4a90e4d7f60962d9b812f56cfc0_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Venue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 59,  129 => 52,  120 => 49,  116 => 48,  112 => 47,  108 => 46,  102 => 45,  97 => 43,  93 => 42,  90 => 41,  86 => 40,  58 => 15,  49 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Venue:base_venue.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     {% if pagination is empty %}*/
/*         <div class="alert alert-info" role="alert">*/
/*             <strong>No Venues!</strong> Found in database.*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Venues Information*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <p><strong>Number of Venues :</strong> <span class="badge badge-inverse">{{ entities }}</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12 col-sm-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Event Listing*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered table-hover zebra">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th></th>                                        */
/*                                         <th>Venue Name</th>*/
/*                                         <th>Venue Address</th>*/
/*                                         <th>Venue Number</th>*/
/*                                         <th>Venue Website</th>*/
/*                                         <th>Venue Cover</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for venue in pagination %}*/
/*                                         <tr>*/
/*                                             <td style="text-align: center;"><a href="{{path ('backend_venue_delete',  {'id': venue.id}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Delete</button></a>*/
/*                                                 <a href="{{path ('backend_venue_show',  {'id': venue.id}) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button></a>*/
/*                                             </td>*/
/*                                             <td><a href="{{ path ('backend_venue_edit',  {'id': venue.id})}}">{{venue.title}}</a></td>*/
/*                                             <td>{{venue.location.address}}</td>*/
/*                                             <td>{{venue.location.telephone}}</td>*/
/*                                             <td>{{venue.website}}</td>*/
/*                                             <td>{% thumbnail  venue.media, 'small' %}</td>*/
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
