<?php

/* YallaWebsiteBackendBundle:Member:index.html.twig */
class __TwigTemplate_fdc144ccfac5f1acb807fad1aaf722abc0fdb2c1219bfeaf10fa4c5489367154 extends Twig_Template
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
        $__internal_8205c6635a9654ddac966704c31406bbf0e96303cd13d680a2f8cc7fe1dd8da7 = $this->env->getExtension("native_profiler");
        $__internal_8205c6635a9654ddac966704c31406bbf0e96303cd13d680a2f8cc7fe1dd8da7->enter($__internal_8205c6635a9654ddac966704c31406bbf0e96303cd13d680a2f8cc7fe1dd8da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Member:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8205c6635a9654ddac966704c31406bbf0e96303cd13d680a2f8cc7fe1dd8da7->leave($__internal_8205c6635a9654ddac966704c31406bbf0e96303cd13d680a2f8cc7fe1dd8da7_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_b6753be578a154ba0bdbb58fa73f0b75cd98d0d93eac612c1b2aae06423682ab = $this->env->getExtension("native_profiler");
        $__internal_b6753be578a154ba0bdbb58fa73f0b75cd98d0d93eac612c1b2aae06423682ab->enter($__internal_b6753be578a154ba0bdbb58fa73f0b75cd98d0d93eac612c1b2aae06423682ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    ";
        if (twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                        </div>
                    </div>
                </div>
            </div>        

        </div>
    ";
        }
        
        $__internal_b6753be578a154ba0bdbb58fa73f0b75cd98d0d93eac612c1b2aae06423682ab->leave($__internal_b6753be578a154ba0bdbb58fa73f0b75cd98d0d93eac612c1b2aae06423682ab_prof);

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
        return array (  128 => 55,  119 => 48,  110 => 45,  106 => 44,  100 => 43,  95 => 41,  91 => 40,  88 => 39,  84 => 38,  58 => 15,  49 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
