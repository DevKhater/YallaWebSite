<?php

/* YallaWebsiteBackendBundle:Photographer:index.html.twig */
class __TwigTemplate_f8af0d0c87caed3de2555f308937ba4707d342f87710e4bf6a51f175cef2c6fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig", "YallaWebsiteBackendBundle:Photographer:index.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig";
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
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : null))) {
            // line 4
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <strong>No Photographers!</strong> Found in database.
        </div>
    ";
        } else {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Photographers Information
                </div>
                <div class=\"panel-body\">
                    <p><strong>Number of Photographers :</strong> <span class=\"badge badge-inverse\">";
            // line 14
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : null)), "html", null, true);
            echo "</span></p>
                </div>
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Photographers Listing
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover zebra\">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Photographer Name</th>
                                        <th> Website </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["photographer"]) {
                // line 37
                echo "                                        <tr>
                                            <td style=\"text-align: center;\">
                                                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_photographer_delete", array("id" => $this->getAttribute($context["photographer"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i> Delete</button></a>
                                                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_photographer_show", array("id" => $this->getAttribute($context["photographer"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i> View </button></a>
                                            </td>
                                            <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_photographer_edit", array("id" => $this->getAttribute($context["photographer"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["photographer"], "name", array()), "html", null, true);
                echo "</a></td>
                                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["photographer"], "website", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photographer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"panel-footer\">
                        ....
                    </div>
                </div>
            </div>        

        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Photographer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 46,  96 => 43,  90 => 42,  85 => 40,  81 => 39,  77 => 37,  73 => 36,  48 => 14,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     {% if entities is empty %}*/
/*         <div class="alert alert-info" role="alert">*/
/*             <strong>No Photographers!</strong> Found in database.*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     Photographers Information*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <p><strong>Number of Photographers :</strong> <span class="badge badge-inverse">{{ entities|length }}</span></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-12 col-sm-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Photographers Listing*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered table-hover zebra">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th></th>*/
/*                                         <th>Photographer Name</th>*/
/*                                         <th> Website </th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for photographer in entities %}*/
/*                                         <tr>*/
/*                                             <td style="text-align: center;">*/
/*                                                 <a href="{{path ('backend_photographer_delete',  {'id': photographer.id}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Delete</button></a>*/
/*                                                 <a href="{{path ('backend_photographer_show',  {'id': photographer.id}) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button></a>*/
/*                                             </td>*/
/*                                             <td><a href="{{ path ('backend_photographer_edit',  {'id': photographer.id})}}">{{photographer.name}}</a></td>*/
/*                                             <td>{{photographer.website}}</td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         ....*/
/*                     </div>*/
/*                 </div>*/
/*             </div>        */
/* */
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
