<?php

/* YallaWebsiteBackendBundle:Gallery:index.html.twig */
class __TwigTemplate_46f61389d495245130615433a90f88dd016e5b540720624d7a1c86d4189c50f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig", "YallaWebsiteBackendBundle:Gallery:index.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc2d8dc493bb259ad1dc3f8505ca0aa76626e57ed7d127604c298c756d03d3b2 = $this->env->getExtension("native_profiler");
        $__internal_bc2d8dc493bb259ad1dc3f8505ca0aa76626e57ed7d127604c298c756d03d3b2->enter($__internal_bc2d8dc493bb259ad1dc3f8505ca0aa76626e57ed7d127604c298c756d03d3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2d8dc493bb259ad1dc3f8505ca0aa76626e57ed7d127604c298c756d03d3b2->leave($__internal_bc2d8dc493bb259ad1dc3f8505ca0aa76626e57ed7d127604c298c756d03d3b2_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_d4e0754515d009a3751258ebc80de71d293ab19f8d5ddf41f1ec2c2463e36a4a = $this->env->getExtension("native_profiler");
        $__internal_d4e0754515d009a3751258ebc80de71d293ab19f8d5ddf41f1ec2c2463e36a4a->enter($__internal_d4e0754515d009a3751258ebc80de71d293ab19f8d5ddf41f1ec2c2463e36a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    ";
        if (twig_test_empty((isset($context["galleries"]) ? $context["galleries"] : $this->getContext($context, "galleries")))) {
            // line 4
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <strong>No Galleries!</strong> Found in database.
        </div>
    ";
        } else {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Galleries Information
                    </div>
                    <div class=\"panel-body\">
                        <p><strong>Number of Galleries :</strong> <span class=\"badge badge-inverse\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["galleries"]) ? $context["galleries"] : $this->getContext($context, "galleries"))), "html", null, true);
            echo "</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Galleries Listing
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover zebra\">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Gallery Name</th>
                                        <th>Cover Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) ? $context["galleries"] : $this->getContext($context, "galleries")));
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 39
                echo "                                        <tr>
                                            <td style=\"text-align: center;\"><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_delete", array("id" => $this->getAttribute($context["gallery"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i> Delete</button></a>
                                                <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_show", array("id" => $this->getAttribute($context["gallery"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i> View </button></a>
                                            </td>
                                            <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_show", array("id" => $this->getAttribute($context["gallery"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
                echo "</a></td>
                                            <td>";
                // line 44
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["gallery"], "media", array()), "small", array());
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
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
    </div>
";
        }
        
        $__internal_d4e0754515d009a3751258ebc80de71d293ab19f8d5ddf41f1ec2c2463e36a4a->leave($__internal_d4e0754515d009a3751258ebc80de71d293ab19f8d5ddf41f1ec2c2463e36a4a_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Gallery:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  106 => 44,  100 => 43,  95 => 41,  91 => 40,  88 => 39,  84 => 38,  58 => 15,  49 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     {% if galleries is empty %}*/
/*         <div class="alert alert-info" role="alert">*/
/*             <strong>No Galleries!</strong> Found in database.*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Galleries Information*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <p><strong>Number of Galleries :</strong> <span class="badge badge-inverse">{{ galleries|length }}</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-12 col-sm-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Galleries Listing*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered table-hover zebra">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th></th>*/
/*                                         <th>Gallery Name</th>*/
/*                                         <th>Cover Image</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for gallery in galleries %}*/
/*                                         <tr>*/
/*                                             <td style="text-align: center;"><a href="{{path ('backend_gallery_delete',  {'id': gallery.id}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Delete</button></a>*/
/*                                                 <a href="{{path ('backend_gallery_show',  {'id': gallery.id}) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button></a>*/
/*                                             </td>*/
/*                                             <td><a href="{{ path ('backend_gallery_show',  {'id': gallery.id})}}">{{gallery.name}}</a></td>*/
/*                                             <td>{% thumbnail  gallery.media, 'small' %}</td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         ....*/
/*                     </div>*/
/*                 </div>*/
/*             </div>        */
/* */
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
