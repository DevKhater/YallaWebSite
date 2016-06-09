<?php

/* YallaWebsiteBackendBundle:Gallery:index.html.twig */
class __TwigTemplate_2d95d4c904c6979e0edd84afc2b2a26a48ee7c8ddad49256041c2fe4699ba634 extends Twig_Template
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
        $__internal_bf850686e4943da79ef79bc464307e6a8e8c320148f1bbcb86dcfa57c7da2b9c = $this->env->getExtension("native_profiler");
        $__internal_bf850686e4943da79ef79bc464307e6a8e8c320148f1bbcb86dcfa57c7da2b9c->enter($__internal_bf850686e4943da79ef79bc464307e6a8e8c320148f1bbcb86dcfa57c7da2b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf850686e4943da79ef79bc464307e6a8e8c320148f1bbcb86dcfa57c7da2b9c->leave($__internal_bf850686e4943da79ef79bc464307e6a8e8c320148f1bbcb86dcfa57c7da2b9c_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_657c96876e8d7fd013a75d4cdf37818dacc12be8c4ba4908e3497b7b294b88e5 = $this->env->getExtension("native_profiler");
        $__internal_657c96876e8d7fd013a75d4cdf37818dacc12be8c4ba4908e3497b7b294b88e5->enter($__internal_657c96876e8d7fd013a75d4cdf37818dacc12be8c4ba4908e3497b7b294b88e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_657c96876e8d7fd013a75d4cdf37818dacc12be8c4ba4908e3497b7b294b88e5->leave($__internal_657c96876e8d7fd013a75d4cdf37818dacc12be8c4ba4908e3497b7b294b88e5_prof);

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
