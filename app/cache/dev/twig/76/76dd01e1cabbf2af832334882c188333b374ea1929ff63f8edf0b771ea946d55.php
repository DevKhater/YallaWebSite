<?php

/* YallaWebsiteBackendBundle:AdsManager:index.html.twig */
class __TwigTemplate_9dc587b8a1b1c845921d6231ed92664f548ff771f15e06bf55017758334099eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig", "YallaWebsiteBackendBundle:AdsManager:index.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2903d485a9b16804dd0578ed8c0fa0c3d0c1b83e79fad2fd1ae63436829d7bee = $this->env->getExtension("native_profiler");
        $__internal_2903d485a9b16804dd0578ed8c0fa0c3d0c1b83e79fad2fd1ae63436829d7bee->enter($__internal_2903d485a9b16804dd0578ed8c0fa0c3d0c1b83e79fad2fd1ae63436829d7bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:AdsManager:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2903d485a9b16804dd0578ed8c0fa0c3d0c1b83e79fad2fd1ae63436829d7bee->leave($__internal_2903d485a9b16804dd0578ed8c0fa0c3d0c1b83e79fad2fd1ae63436829d7bee_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_04251b84e07d3934b07cde209f2849d663a7a851de73d22854d9c1f442e15f40 = $this->env->getExtension("native_profiler");
        $__internal_04251b84e07d3934b07cde209f2849d663a7a851de73d22854d9c1f442e15f40->enter($__internal_04251b84e07d3934b07cde209f2849d663a7a851de73d22854d9c1f442e15f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Advertisment Information
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    Advertisment Listing
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <style>
                            table tbody tr {
                                height: 70px;
                            }
                        </style>
                        <table class=\"table table-striped table-bordered table-hover zebra\" style=\"text-align: center; overflow: hidden\">
                            <thead>
                                <tr style=\"height: 70px\">
                                    <th></th>
                                    <th style=\"vertical-align: middle;\">The Adv <span>Hover over the Link to see the adv image.</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 34
            echo "                                    <tr>
                                        <td style=\"vertical-align: middle;text-align: center;\">  <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ads_manager_change", array("id" => $context["key"])), "html", null, true);
            echo "\"><button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-pencil\"></i> Edit</button></a></td>
                                        <td style=\"vertical-align: middle;text-align: center;\">
                                            ";
            // line 37
            $this->loadTemplate("@YallaWebsiteBackendBundle/views/AdsManager/_type.html.twig", "YallaWebsiteBackendBundle:AdsManager:index.html.twig", 37)->display(array_merge($context, array("type" => $this->getAttribute(twig_first($this->env, $this->getAttribute(            // line 38
$context["value"], "data", array())), "type", array()), "item" => twig_first($this->env, $this->getAttribute(            // line 39
$context["value"], "data", array())))));
            // line 40
            echo "                                        </td>
                                    </tr>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>        
    </div>
";
        
        $__internal_04251b84e07d3934b07cde209f2849d663a7a851de73d22854d9c1f442e15f40->leave($__internal_04251b84e07d3934b07cde209f2849d663a7a851de73d22854d9c1f442e15f40_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:AdsManager:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  101 => 40,  99 => 39,  98 => 38,  97 => 37,  92 => 35,  89 => 34,  72 => 33,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:AdsManager:base_adv.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     Advertisment Information*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12 col-sm-12">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     Advertisment Listing*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="table-responsive">*/
/*                         <style>*/
/*                             table tbody tr {*/
/*                                 height: 70px;*/
/*                             }*/
/*                         </style>*/
/*                         <table class="table table-striped table-bordered table-hover zebra" style="text-align: center; overflow: hidden">*/
/*                             <thead>*/
/*                                 <tr style="height: 70px">*/
/*                                     <th></th>*/
/*                                     <th style="vertical-align: middle;">The Adv <span>Hover over the Link to see the adv image.</span></th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for key,value in content %}*/
/*                                     <tr>*/
/*                                         <td style="vertical-align: middle;text-align: center;">  <a href="{{path ('backend_ads_manager_change',  {'id': key}) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil"></i> Edit</button></a></td>*/
/*                                         <td style="vertical-align: middle;text-align: center;">*/
/*                                             {% include '@YallaWebsiteBackendBundle/views/AdsManager/_type.html.twig' with {*/
/*                                         type: (value.data|first).type, */
/*                                             item: (value.data|first) } %}*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>        */
/*     </div>*/
/* {% endblock %}*/
