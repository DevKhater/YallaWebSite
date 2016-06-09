<?php

/* YallaWebsiteBackendBundle:Event:index.html.twig */
class __TwigTemplate_462fea1f2434d873ad288c0cc7f51407b1d998d5ebc8ff5d34f6b74ab7de55ee extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
    <style>
        table thead tr th {
            text-align: center;
        }
    </style>
";
    }

    // line 9
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
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
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
            echo "
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
        return "YallaWebsiteBackendBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 89,  189 => 82,  180 => 78,  175 => 76,  170 => 75,  165 => 73,  161 => 72,  157 => 71,  153 => 70,  148 => 68,  144 => 66,  138 => 63,  134 => 62,  131 => 61,  125 => 58,  121 => 57,  116 => 56,  114 => 55,  108 => 54,  102 => 51,  98 => 50,  94 => 48,  90 => 47,  62 => 22,  53 => 15,  47 => 11,  44 => 10,  41 => 9,  29 => 2,  11 => 1,);
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
