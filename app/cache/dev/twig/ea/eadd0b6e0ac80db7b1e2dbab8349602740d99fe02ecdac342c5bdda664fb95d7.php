<?php

/* YallaWebsiteBackendBundle:Article:index.html.twig */
class __TwigTemplate_096a9a8342d0ca31121a86e8e5ceb27c3d449d780d1a97983362180ced2da8b3 extends Twig_Template
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
        $__internal_0be5414252e15a568a003f402f808e938de72cd491bd47c7d27a2cff6de22d89 = $this->env->getExtension("native_profiler");
        $__internal_0be5414252e15a568a003f402f808e938de72cd491bd47c7d27a2cff6de22d89->enter($__internal_0be5414252e15a568a003f402f808e938de72cd491bd47c7d27a2cff6de22d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be5414252e15a568a003f402f808e938de72cd491bd47c7d27a2cff6de22d89->leave($__internal_0be5414252e15a568a003f402f808e938de72cd491bd47c7d27a2cff6de22d89_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_73796f61ea577047a6c6eba75c9ce5cbd7590c58c0783700411d75c1a3bbb728 = $this->env->getExtension("native_profiler");
        $__internal_73796f61ea577047a6c6eba75c9ce5cbd7590c58c0783700411d75c1a3bbb728->enter($__internal_73796f61ea577047a6c6eba75c9ce5cbd7590c58c0783700411d75c1a3bbb728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    ";
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
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
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
        
        $__internal_73796f61ea577047a6c6eba75c9ce5cbd7590c58c0783700411d75c1a3bbb728->leave($__internal_73796f61ea577047a6c6eba75c9ce5cbd7590c58c0783700411d75c1a3bbb728_prof);

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
        return array (  126 => 52,  117 => 49,  113 => 48,  109 => 47,  103 => 46,  98 => 44,  94 => 43,  90 => 41,  86 => 40,  57 => 14,  49 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
