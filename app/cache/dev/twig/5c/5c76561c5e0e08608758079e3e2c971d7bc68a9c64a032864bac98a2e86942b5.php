<?php

/* YallaWebsiteBackendBundle:Event:index.html.twig */
class __TwigTemplate_e896630449e7aa99a13779396bae9e8452a53d33c30f37cb8131c2201a605c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Event:base_event.html.twig", "YallaWebsiteBackendBundle:Event:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Event:base_event.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07c27196db85f01c7509e05daebd195bc45630927d4e6bb0b72bdd27953b73f7 = $this->env->getExtension("native_profiler");
        $__internal_07c27196db85f01c7509e05daebd195bc45630927d4e6bb0b72bdd27953b73f7->enter($__internal_07c27196db85f01c7509e05daebd195bc45630927d4e6bb0b72bdd27953b73f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07c27196db85f01c7509e05daebd195bc45630927d4e6bb0b72bdd27953b73f7->leave($__internal_07c27196db85f01c7509e05daebd195bc45630927d4e6bb0b72bdd27953b73f7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce20c407b4c0217f15d27e595c1e1410608e67df8d3b31f4de52576263b2e241 = $this->env->getExtension("native_profiler");
        $__internal_ce20c407b4c0217f15d27e595c1e1410608e67df8d3b31f4de52576263b2e241->enter($__internal_ce20c407b4c0217f15d27e595c1e1410608e67df8d3b31f4de52576263b2e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
    <style>
        table thead tr th {
            text-align: center;
        }
    </style>
";
        
        $__internal_ce20c407b4c0217f15d27e595c1e1410608e67df8d3b31f4de52576263b2e241->leave($__internal_ce20c407b4c0217f15d27e595c1e1410608e67df8d3b31f4de52576263b2e241_prof);

    }

    // line 9
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_ea181ea98b3946960a54d470a1774d59457237b78731e541a73cd1d82fbc7056 = $this->env->getExtension("native_profiler");
        $__internal_ea181ea98b3946960a54d470a1774d59457237b78731e541a73cd1d82fbc7056->enter($__internal_ea181ea98b3946960a54d470a1774d59457237b78731e541a73cd1d82fbc7056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 10
        echo "    ";
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 11
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <strong>No Events!</strong> Found in database.
        </div>
    ";
        } else {
            // line 15
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Events Information
                    </div>
                    <div class=\"panel-body\">
                        <p><strong>Number of Evenets : </strong><span class=\"badge badge-inverse\">";
            // line 22
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
                            <table class=\"table table-striped table-bordered table-hover zebra\" style=\"text-align: center\">
                                <thead >
                                    <tr>
                                        <th></th>
                                        <th>Event Name</th>
                                        <th colspan=\"2\">Location Information</th>
                                        <th>Event Flyer</th>
                                        <th>Event Date and Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 48
                echo "                                        <tr>
                                            <th style=\"text-align: center;\">
                                                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_event_delete", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i> Delete</button></a>
                                                <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i> View </button></a>
                                            </th>

                                            <td><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_event_edit", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                echo "</a></td>
                                                ";
                // line 55
                if (($this->getAttribute($context["event"], "isVenue", array()) == true)) {
                    // line 56
                    echo "                                                <td colspan=\"2\"><strong>Venue : </strong> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "venue", array()), "title", array()), "html", null, true);
                    echo "<br />
                                                    <strong><i>Address : </i></strong>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "venue", array()), "location", array()), "address", array()), "html", null, true);
                    echo " <br/>
                                                    <strong><i>Telephone : </i></strong>";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "venue", array()), "location", array()), "telephone", array()), "html", null, true);
                    echo " <br/></td>

                                            ";
                } else {
                    // line 61
                    echo "
                                                <td>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "location", array()), "address", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "location", array()), "telephone", array()), "html", null, true);
                    echo "</td>

                                            ";
                }
                // line 66
                echo "

                                            <td style=\"text-align: center;\">";
                // line 68
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["event"], "media", array()), "small", array());
                echo "</td>
                                            <td>
                                                ";
                // line 70
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "F jS") == twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDate", array()), "F jS"))) {
                    echo " 
                                                    <strong>Date : </strong>";
                    // line 71
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "F jS"), "html", null, true);
                    echo " <br/>
                                                    &emsp;&emsp;Start : ";
                    // line 72
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "g:ia"), "html", null, true);
                    echo "
                                                    &emsp;&emsp;End : ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDate", array()), "g:ia"), "html", null, true);
                    echo "<br/>
                                                ";
                } else {
                    // line 75
                    echo "                                                    <strong>Start Date : </strong>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "F jS \\a\\t g:ia"), "html", null, true);
                    echo " <br/>
                                                    <strong>End Date : </strong>";
                    // line 76
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDate", array()), "F jS \\a\\t g:ia"), "html", null, true);
                    echo " <br/>
                                                ";
                }
                // line 78
                echo "
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"navigation\">
                            ";
            // line 89
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                        </div>
                    </div>
                </div>
            </div>        

        </div>

    ";
        }
        
        $__internal_ea181ea98b3946960a54d470a1774d59457237b78731e541a73cd1d82fbc7056->leave($__internal_ea181ea98b3946960a54d470a1774d59457237b78731e541a73cd1d82fbc7056_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 89,  204 => 82,  195 => 78,  190 => 76,  185 => 75,  180 => 73,  176 => 72,  172 => 71,  168 => 70,  163 => 68,  159 => 66,  153 => 63,  149 => 62,  146 => 61,  140 => 58,  136 => 57,  131 => 56,  129 => 55,  123 => 54,  117 => 51,  113 => 50,  109 => 48,  105 => 47,  77 => 22,  68 => 15,  62 => 11,  59 => 10,  53 => 9,  35 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Event:base_event.html.twig" %}*/
/* {% block stylesheets %} */
/*     <style>*/
/*         table thead tr th {*/
/*             text-align: center;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block controlleraction  %}*/
/*     {% if pagination is empty %}*/
/*         <div class="alert alert-info" role="alert">*/
/*             <strong>No Events!</strong> Found in database.*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Events Information*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <p><strong>Number of Evenets : </strong><span class="badge badge-inverse">{{ entities }}</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-12 col-sm-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Event Listing*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered table-hover zebra" style="text-align: center">*/
/*                                 <thead >*/
/*                                     <tr>*/
/*                                         <th></th>*/
/*                                         <th>Event Name</th>*/
/*                                         <th colspan="2">Location Information</th>*/
/*                                         <th>Event Flyer</th>*/
/*                                         <th>Event Date and Time</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for event in pagination %}*/
/*                                         <tr>*/
/*                                             <th style="text-align: center;">*/
/*                                                 <a href="{{path ('backend_event_delete',  {'id': event.id}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Delete</button></a>*/
/*                                                 <a href="{{path ('backend_event_show',  {'id': event.id}) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button></a>*/
/*                                             </th>*/
/* */
/*                                             <td><a href="{{ path ('backend_event_edit',  {'id': event.id})}}">{{event.title}}</a></td>*/
/*                                                 {% if event.isVenue == true %}*/
/*                                                 <td colspan="2"><strong>Venue : </strong> {{ event.venue.title }}<br />*/
/*                                                     <strong><i>Address : </i></strong>{{ event.venue.location.address }} <br/>*/
/*                                                     <strong><i>Telephone : </i></strong>{{ event.venue.location.telephone }} <br/></td>*/
/* */
/*                                             {% else %}*/
/* */
/*                                                 <td>{{event.location.address}}</td>*/
/*                                                 <td>{{event.location.telephone}}</td>*/
/* */
/*                                             {% endif %}*/
/* */
/* */
/*                                             <td style="text-align: center;">{% thumbnail  event.media, 'small' %}</td>*/
/*                                             <td>*/
/*                                                 {% if event.startDate|date("F jS") ==  event.endDate|date("F jS") %} */
/*                                                     <strong>Date : </strong>{{event.startDate|date("F jS")}} <br/>*/
/*                                                     &emsp;&emsp;Start : {{event.startDate|date("g:ia")}}*/
/*                                                     &emsp;&emsp;End : {{event.endDate|date("g:ia")}}<br/>*/
/*                                                 {% else %}*/
/*                                                     <strong>Start Date : </strong>{{event.startDate|date("F jS \\a\\t g:ia")}} <br/>*/
/*                                                     <strong>End Date : </strong>{{event.endDate|date("F jS \\a\\t g:ia")}} <br/>*/
/*                                                 {% endif %}*/
/* */
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         <div class="navigation">*/
/*                             {{ knp_pagination_render(pagination) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>        */
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
