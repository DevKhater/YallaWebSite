<?php

/* YallaWebsiteBackendBundle:Event:base_event.html.twig */
class __TwigTemplate_56effa2afbc462dd6438a4f6aca6baf5c0e32f91a1c76c41e3f072d3ae7d200d extends Twig_Template
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
        $__internal_5ef9a217e12f4f01208ae04a8d6d0eb798b8147b7754e90701f7e1e2e22fc098 = $this->env->getExtension("native_profiler");
        $__internal_5ef9a217e12f4f01208ae04a8d6d0eb798b8147b7754e90701f7e1e2e22fc098->enter($__internal_5ef9a217e12f4f01208ae04a8d6d0eb798b8147b7754e90701f7e1e2e22fc098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Event:base_event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef9a217e12f4f01208ae04a8d6d0eb798b8147b7754e90701f7e1e2e22fc098->leave($__internal_5ef9a217e12f4f01208ae04a8d6d0eb798b8147b7754e90701f7e1e2e22fc098_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ead87c455ab75309395fb2609dde8ef1db1d14b447f288aa09f356fe864c3ad7 = $this->env->getExtension("native_profiler");
        $__internal_ead87c455ab75309395fb2609dde8ef1db1d14b447f288aa09f356fe864c3ad7->enter($__internal_ead87c455ab75309395fb2609dde8ef1db1d14b447f288aa09f356fe864c3ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events Section";
        
        $__internal_ead87c455ab75309395fb2609dde8ef1db1d14b447f288aa09f356fe864c3ad7->leave($__internal_ead87c455ab75309395fb2609dde8ef1db1d14b447f288aa09f356fe864c3ad7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_119dd99c2ce804d7287f7f12a7826e90585830e8bb9f7963c7cbed75083d7844 = $this->env->getExtension("native_profiler");
        $__internal_119dd99c2ce804d7287f7f12a7826e90585830e8bb9f7963c7cbed75083d7844->enter($__internal_119dd99c2ce804d7287f7f12a7826e90585830e8bb9f7963c7cbed75083d7844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d14533_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14533_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14533_jquery.simple-dtpicker_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "6d14533"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14533") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14533.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_119dd99c2ce804d7287f7f12a7826e90585830e8bb9f7963c7cbed75083d7844->leave($__internal_119dd99c2ce804d7287f7f12a7826e90585830e8bb9f7963c7cbed75083d7844_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_604f1408bd13adb029e463656230645a090743e3ad5f7f175f860cf53251dfaa = $this->env->getExtension("native_profiler");
        $__internal_604f1408bd13adb029e463656230645a090743e3ad5f7f175f860cf53251dfaa->enter($__internal_604f1408bd13adb029e463656230645a090743e3ad5f7f175f860cf53251dfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_604f1408bd13adb029e463656230645a090743e3ad5f7f175f860cf53251dfaa->leave($__internal_604f1408bd13adb029e463656230645a090743e3ad5f7f175f860cf53251dfaa_prof);

    }

    // line 19
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_e540941e10dd1ba21a3570e788d7a81b061094d86c2d1853b503a1a2d854c3ed = $this->env->getExtension("native_profiler");
        $__internal_e540941e10dd1ba21a3570e788d7a81b061094d86c2d1853b503a1a2d854c3ed->enter($__internal_e540941e10dd1ba21a3570e788d7a81b061094d86c2d1853b503a1a2d854c3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_e540941e10dd1ba21a3570e788d7a81b061094d86c2d1853b503a1a2d854c3ed->leave($__internal_e540941e10dd1ba21a3570e788d7a81b061094d86c2d1853b503a1a2d854c3ed_prof);

    }

    // line 21
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_ffcf56e961e42d3deac9c734916181d4070db5370f0e2ee6427337650d7382c5 = $this->env->getExtension("native_profiler");
        $__internal_ffcf56e961e42d3deac9c734916181d4070db5370f0e2ee6427337650d7382c5->enter($__internal_ffcf56e961e42d3deac9c734916181d4070db5370f0e2ee6427337650d7382c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_ffcf56e961e42d3deac9c734916181d4070db5370f0e2ee6427337650d7382c5->leave($__internal_ffcf56e961e42d3deac9c734916181d4070db5370f0e2ee6427337650d7382c5_prof);

    }

    // line 23
    public function block_datepicker($context, array $blocks = array())
    {
        $__internal_08de08f0fe345c494fe5c1f7cc570a6291f84fc5d873fba17b235bafffeba47f = $this->env->getExtension("native_profiler");
        $__internal_08de08f0fe345c494fe5c1f7cc570a6291f84fc5d873fba17b235bafffeba47f->enter($__internal_08de08f0fe345c494fe5c1f7cc570a6291f84fc5d873fba17b235bafffeba47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datepicker"));

        // line 24
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6986d33_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6986d33_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/6986d33_simple-dtpicker_1.js");
            // line 25
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "6986d33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6986d33") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/6986d33.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_08de08f0fe345c494fe5c1f7cc570a6291f84fc5d873fba17b235bafffeba47f->leave($__internal_08de08f0fe345c494fe5c1f7cc570a6291f84fc5d873fba17b235bafffeba47f_prof);

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
        return array (  144 => 25,  139 => 24,  133 => 23,  122 => 21,  111 => 19,  104 => 21,  101 => 20,  99 => 19,  95 => 18,  87 => 12,  81 => 11,  62 => 7,  57 => 5,  51 => 4,  39 => 2,  11 => 1,);
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
