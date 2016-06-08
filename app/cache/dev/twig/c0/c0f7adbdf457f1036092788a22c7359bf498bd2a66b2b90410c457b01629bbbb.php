<?php

/* YallaWebsiteBackendBundle:Photographer:edit.html.twig */
class __TwigTemplate_2f204f2ff0902b36ca8bffad4990064ef85331678beaf289f7b180e674607c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig", "YallaWebsiteBackendBundle:Photographer:edit.html.twig", 1);
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
        $__internal_7d65f3fe01846a2fbd1d3db1169de88c1a5cb65c0bc5e69b74eb294bb48c3459 = $this->env->getExtension("native_profiler");
        $__internal_7d65f3fe01846a2fbd1d3db1169de88c1a5cb65c0bc5e69b74eb294bb48c3459->enter($__internal_7d65f3fe01846a2fbd1d3db1169de88c1a5cb65c0bc5e69b74eb294bb48c3459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d65f3fe01846a2fbd1d3db1169de88c1a5cb65c0bc5e69b74eb294bb48c3459->leave($__internal_7d65f3fe01846a2fbd1d3db1169de88c1a5cb65c0bc5e69b74eb294bb48c3459_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_8779746071d08215dce6e1786a65e7fe3ca452e68dd93f375093acc83db44605 = $this->env->getExtension("native_profiler");
        $__internal_8779746071d08215dce6e1786a65e7fe3ca452e68dd93f375093acc83db44605->enter($__internal_8779746071d08215dce6e1786a65e7fe3ca452e68dd93f375093acc83db44605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Photographer
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_photographer_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"\" method=\"POST\">        
                <div class=\"form-group\">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "                    
                </div>
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
            </form>
        </div>
    </div>
";
        
        $__internal_8779746071d08215dce6e1786a65e7fe3ca452e68dd93f375093acc83db44605->leave($__internal_8779746071d08215dce6e1786a65e7fe3ca452e68dd93f375093acc83db44605_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Photographer:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Edit Photographer*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_photographer_edit',  {'id': entity.id})}}" class="" method="POST">        */
/*                 <div class="form-group">*/
/*                     {{ form_widget(form)}}                    */
/*                 </div>*/
/*                 <input type="submit" class="btn btn-default" value="Save"/>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
