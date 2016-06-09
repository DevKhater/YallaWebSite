<?php

/* YallaWebsiteBackendBundle:Event:base_event.html.twig */
class __TwigTemplate_eefab0cdd1103ec481b57576aed53b1299707182416ef438a8d837a609c8aa09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Event:base_event.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
            'datepicker' => array($this, 'block_datepicker'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Events Section";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d14533_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14533_0") : $this->env->getExtension('asset')->getAssetUrl("css/6d14533_jquery.simple-dtpicker_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "6d14533"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14533") : $this->env->getExtension('asset')->getAssetUrl("css/6d14533.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Events</h4>
        </div>
    </div>
    <div>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("backend_event_new");
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i> Create New</button></a>
    ";
        // line 19
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 20
        echo "</div>
";
        // line 21
        $this->displayBlock('controlleraction', $context, $blocks);
    }

    // line 19
    public function block_extraOptions($context, array $blocks = array())
    {
    }

    // line 21
    public function block_controlleraction($context, array $blocks = array())
    {
    }

    // line 23
    public function block_datepicker($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6986d33_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6986d33_0") : $this->env->getExtension('asset')->getAssetUrl("js/6986d33_simple-dtpicker_1.js");
            // line 25
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "6986d33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6986d33") : $this->env->getExtension('asset')->getAssetUrl("js/6986d33.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Event:base_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  100 => 24,  97 => 23,  92 => 21,  87 => 19,  83 => 21,  80 => 20,  78 => 19,  74 => 18,  66 => 12,  63 => 11,  47 => 7,  42 => 5,  39 => 4,  33 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Events Section{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {% stylesheets  */
/* '@YallaWebsiteBackendBundle/Resources/public/css/jquery.simple-dtpicker.css' %}*/
/*     <link rel="stylesheet" type="text/css" media="screen" href="{{ asset_url }}"/>*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Events</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a href="{{ path ('backend_event_new')}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i> Create New</button></a>*/
/*     {% block extraOptions %}{% endblock %}*/
/* </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
/* {% block datepicker %}*/
/*     {% javascripts '@YallaWebsiteBackendBundle/Resources/public/js/simple-dtpicker.js' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
