<?php

/* YallaWebsiteBackendBundle:Photographer:index.html.twig */
class __TwigTemplate_01d837d18c32cc05e1522bb4280a70976cb67509fb9a7a325a6ec5d39c5d0645 extends Twig_Template
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
        $__internal_ba9386a1a97578c726fc6c152c61ef63129d77a2d2355da27c0ad27b5f631b8f = $this->env->getExtension("native_profiler");
        $__internal_ba9386a1a97578c726fc6c152c61ef63129d77a2d2355da27c0ad27b5f631b8f->enter($__internal_ba9386a1a97578c726fc6c152c61ef63129d77a2d2355da27c0ad27b5f631b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba9386a1a97578c726fc6c152c61ef63129d77a2d2355da27c0ad27b5f631b8f->leave($__internal_ba9386a1a97578c726fc6c152c61ef63129d77a2d2355da27c0ad27b5f631b8f_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_5ede823489f2c15b9a3a487749815f7566ade4f67165750d98d23162538b5565 = $this->env->getExtension("native_profiler");
        $__internal_5ede823489f2c15b9a3a487749815f7566ade4f67165750d98d23162538b5565->enter($__internal_5ede823489f2c15b9a3a487749815f7566ade4f67165750d98d23162538b5565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    ";
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
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
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
        
        $__internal_5ede823489f2c15b9a3a487749815f7566ade4f67165750d98d23162538b5565->leave($__internal_5ede823489f2c15b9a3a487749815f7566ade4f67165750d98d23162538b5565_prof);

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
        return array (  114 => 46,  105 => 43,  99 => 42,  94 => 40,  90 => 39,  86 => 37,  82 => 36,  57 => 14,  49 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
