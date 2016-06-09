<?php

/* YallaWebsiteBackendBundle:Member:index.html.twig */
class __TwigTemplate_6c2d57e577518a719b4b9c75d041c3b39a50432f7a1513aea0a433199ea6f394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Member:base_member.html.twig", "YallaWebsiteBackendBundle:Member:index.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Member:base_member.html.twig";
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
            <strong>No Members!</strong> Found in database.
        </div>
    ";
        } else {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Members Information
                    </div>
                    <div class=\"panel-body\">
                        <p><strong>Number of Members :</strong> <span class=\"badge badge-inverse\">";
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
                        Member Listing
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover zebra\">
                                <thead>
                                    <tr>
                                        <th></th>                                        
                                        <th>Member Name</th>
                                        <th>Member Website</th>
                                        <th>Member Cover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 39
                echo "                                        <tr>
                                            <td style=\"text-align: center;\"><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_delete", array("id" => $this->getAttribute($context["member"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i> Delete</button></a>
                                                <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_show", array("id" => $this->getAttribute($context["member"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i> View </button></a>
                                            </td>
                                            <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_edit", array("id" => $this->getAttribute($context["member"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "name", array()), "html", null, true);
                echo "</a></td>
                                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "website", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 45
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["member"], "media", array()), "small", array());
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class=\"panel-footer\">              
                        <div class=\"navigation\">
                            ";
            // line 55
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
        return "YallaWebsiteBackendBundle:Member:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 55,  110 => 48,  101 => 45,  97 => 44,  91 => 43,  86 => 41,  82 => 40,  79 => 39,  75 => 38,  49 => 15,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Member:base_member.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     {% if pagination is empty %}*/
/*         <div class="alert alert-info" role="alert">*/
/*             <strong>No Members!</strong> Found in database.*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Members Information*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <p><strong>Number of Members :</strong> <span class="badge badge-inverse">{{ entities }}</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12 col-sm-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Member Listing*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered table-hover zebra">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th></th>                                        */
/*                                         <th>Member Name</th>*/
/*                                         <th>Member Website</th>*/
/*                                         <th>Member Cover</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for member in pagination %}*/
/*                                         <tr>*/
/*                                             <td style="text-align: center;"><a href="{{path ('backend_member_delete',  {'id': member.id}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Delete</button></a>*/
/*                                                 <a href="{{path ('backend_member_show',  {'id': member.id}) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button></a>*/
/*                                             </td>*/
/*                                             <td><a href="{{ path ('backend_member_edit',  {'id': member.id})}}">{{member.name}}</a></td>*/
/*                                             <td>{{member.website}}</td>*/
/*                                             <td>{% thumbnail  member.media, 'small' %}</td>*/
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
/*     {% endif %}*/
/* {% endblock %}*/
