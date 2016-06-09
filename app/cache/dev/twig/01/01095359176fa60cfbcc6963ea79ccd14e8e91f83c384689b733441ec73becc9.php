<?php

/* YallaWebsiteBackendBundle:Event:base_event.html.twig */
class __TwigTemplate_0dd1b6b07b418cd9f463d5b6f8c07f506a4a5cb9470bf88e82c594f9b3413952 extends Twig_Template
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
        $__internal_cb3a4c1948d79b6bddfc7edc3b7e72fdbbcb38189a7c93b5f36def613b8acc35 = $this->env->getExtension("native_profiler");
        $__internal_cb3a4c1948d79b6bddfc7edc3b7e72fdbbcb38189a7c93b5f36def613b8acc35->enter($__internal_cb3a4c1948d79b6bddfc7edc3b7e72fdbbcb38189a7c93b5f36def613b8acc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Event:base_event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3a4c1948d79b6bddfc7edc3b7e72fdbbcb38189a7c93b5f36def613b8acc35->leave($__internal_cb3a4c1948d79b6bddfc7edc3b7e72fdbbcb38189a7c93b5f36def613b8acc35_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb4f795e9023ca0516c5b98aa971d492968e11c0dac5808925547e21f82ea5b9 = $this->env->getExtension("native_profiler");
        $__internal_eb4f795e9023ca0516c5b98aa971d492968e11c0dac5808925547e21f82ea5b9->enter($__internal_eb4f795e9023ca0516c5b98aa971d492968e11c0dac5808925547e21f82ea5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events Section";
        
        $__internal_eb4f795e9023ca0516c5b98aa971d492968e11c0dac5808925547e21f82ea5b9->leave($__internal_eb4f795e9023ca0516c5b98aa971d492968e11c0dac5808925547e21f82ea5b9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d97bb5de89106436c817e539b18df745d733684364ea8d64f7a76685206f473f = $this->env->getExtension("native_profiler");
        $__internal_d97bb5de89106436c817e539b18df745d733684364ea8d64f7a76685206f473f->enter($__internal_d97bb5de89106436c817e539b18df745d733684364ea8d64f7a76685206f473f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d97bb5de89106436c817e539b18df745d733684364ea8d64f7a76685206f473f->leave($__internal_d97bb5de89106436c817e539b18df745d733684364ea8d64f7a76685206f473f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bc341d25c441ca29363906f6efedbd6368d5fe2744dd312e44bfa0a4b9da393 = $this->env->getExtension("native_profiler");
        $__internal_4bc341d25c441ca29363906f6efedbd6368d5fe2744dd312e44bfa0a4b9da393->enter($__internal_4bc341d25c441ca29363906f6efedbd6368d5fe2744dd312e44bfa0a4b9da393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4bc341d25c441ca29363906f6efedbd6368d5fe2744dd312e44bfa0a4b9da393->leave($__internal_4bc341d25c441ca29363906f6efedbd6368d5fe2744dd312e44bfa0a4b9da393_prof);

    }

    // line 19
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_e830824bf1e554f283a094a55bb49ebfbc7fd06b66c3612b910f19ca659420a1 = $this->env->getExtension("native_profiler");
        $__internal_e830824bf1e554f283a094a55bb49ebfbc7fd06b66c3612b910f19ca659420a1->enter($__internal_e830824bf1e554f283a094a55bb49ebfbc7fd06b66c3612b910f19ca659420a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_e830824bf1e554f283a094a55bb49ebfbc7fd06b66c3612b910f19ca659420a1->leave($__internal_e830824bf1e554f283a094a55bb49ebfbc7fd06b66c3612b910f19ca659420a1_prof);

    }

    // line 21
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_7cedfa1ef68342af42eee236d9da2cce50217b21aeb01c0144d248907d4e1edb = $this->env->getExtension("native_profiler");
        $__internal_7cedfa1ef68342af42eee236d9da2cce50217b21aeb01c0144d248907d4e1edb->enter($__internal_7cedfa1ef68342af42eee236d9da2cce50217b21aeb01c0144d248907d4e1edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_7cedfa1ef68342af42eee236d9da2cce50217b21aeb01c0144d248907d4e1edb->leave($__internal_7cedfa1ef68342af42eee236d9da2cce50217b21aeb01c0144d248907d4e1edb_prof);

    }

    // line 23
    public function block_datepicker($context, array $blocks = array())
    {
        $__internal_2689782a78dd162a47db2ae0cfdb83646730c015e289c901a079a690cbf8db73 = $this->env->getExtension("native_profiler");
        $__internal_2689782a78dd162a47db2ae0cfdb83646730c015e289c901a079a690cbf8db73->enter($__internal_2689782a78dd162a47db2ae0cfdb83646730c015e289c901a079a690cbf8db73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datepicker"));

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
        
        $__internal_2689782a78dd162a47db2ae0cfdb83646730c015e289c901a079a690cbf8db73->leave($__internal_2689782a78dd162a47db2ae0cfdb83646730c015e289c901a079a690cbf8db73_prof);

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
