<?php

/* YallaWebsiteBackendBundle:Article:index.html.twig */
class __TwigTemplate_4081ace6bb7b961dc00564d29060514a2cf8f7c5dc28b40370f72575e91f3beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Article:base_article.html.twig", "YallaWebsiteBackendBundle:Article:index.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Article:base_article.html.twig";
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
            <strong>No Articles!</strong> Found in database.
        </div>
    ";
        } else {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Galleries Information
                </div>
                <div class=\"panel-body\">
                    <p><strong>Number of Articles :</strong> <span class=\"badge badge-inverse\">";
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
                        Event Listing
                    </div>
<div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover zebra\">
                                <thead>
                                    <tr>
                    
                                        <th></th>

                                        <th>Article Name</th>
                                        <th> Author </th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 41
                echo "                                        <tr>
                                             <td style=\"text-align: center;\">
                                                 <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i> Delete</button></a>
                                                 <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i> View </button></a>
                                             </td>
                                            <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a></td>
                                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "author", array()), "displayName", array()), "html", null, true);
                echo "</th>
                                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "F jS \\a\\t g:ia"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "updatedAt", array()), "F jS \\a\\t g:ia"), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
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
        return "YallaWebsiteBackendBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 52,  108 => 49,  104 => 48,  100 => 47,  94 => 46,  89 => 44,  85 => 43,  81 => 41,  77 => 40,  48 => 14,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Article:base_article.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     {% if entities is empty %}*/
/*         <div class="alert alert-info" role="alert">*/
/*             <strong>No Articles!</strong> Found in database.*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     Galleries Information*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <p><strong>Number of Articles :</strong> <span class="badge badge-inverse">{{ entities|length }}</span></p>*/
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
/* <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered table-hover zebra">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                     */
/*                                         <th></th>*/
/* */
/*                                         <th>Article Name</th>*/
/*                                         <th> Author </th>*/
/*                                         <th>Created At</th>*/
/*                                         <th>Updated At</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for article in entities %}*/
/*                                         <tr>*/
/*                                              <td style="text-align: center;">*/
/*                                                  <a href="{{path ('backend_article_delete',  {'id': article.id}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Delete</button></a>*/
/*                                                  <a href="{{path ('backend_article_show',  {'id': article.id}) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button></a>*/
/*                                              </td>*/
/*                                             <td><a href="{{ path ('backend_article_edit',  {'id': article.id})}}">{{article.title}}</a></td>*/
/*                                             <td>{{ article.author.displayName }}</th>*/
/*                                             <td>{{article.createdAt|date("F jS \\a\\t g:ia")}}</td>*/
/*                                             <td>{{article.updatedAt|date("F jS \\a\\t g:ia")}}</td>*/
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
/* {% endif %}*/
/* {% endblock %}*/
/* */
