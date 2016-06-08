<?php

/* YallaWebsiteBackendBundle:Homepage/html:homepage_slider_selector.html.twig */
class __TwigTemplate_4381d8e1eefc83566f1cabcba8930481812f10b511a1580b9c0e5f8ee5398951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b471fcdcf064248895244ca3f7615f742b54fe2bd4753e1e043d41d1b1ee79d = $this->env->getExtension("native_profiler");
        $__internal_5b471fcdcf064248895244ca3f7615f742b54fe2bd4753e1e043d41d1b1ee79d->enter($__internal_5b471fcdcf064248895244ca3f7615f742b54fe2bd4753e1e043d41d1b1ee79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/html:homepage_slider_selector.html.twig"));

        // line 1
        if (($this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")) == "Gallery")) {
            // line 2
            echo "    <div style=\"float:left\">
        <h5>Add ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")), "html", null, true);
            echo " To Slider</h5>
        <select id=\"dd_";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")), "html", null, true);
            echo "\" class=\"form-control\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 6
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </select> 
        <p>Position</p>
        <select id='dd_p_";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")), "html", null, true);
            echo "' class='form-control'>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 12
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </select> 
        <a id='";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")), "html", null, true);
            echo "' href='#' class='btn-sm btn-default'>Add To Slider</a>
    </div>
";
        } else {
            // line 18
            echo "    <div style=\"float:left\">
        <h5>Add ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")), "html", null, true);
            echo " To Slider</h5>
        <select id=\"dd_";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")), "html", null, true);
            echo "\" class=\"form-control\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 22
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </select> 
        <p>Position</p>
        <select id='dd_p_";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")), "html", null, true);
            echo "' class='form-control'>
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 28
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </select> 
        <a id='";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : $this->getContext($context, "ENT")), 0, array(), "array")), "html", null, true);
            echo "' href='#' class='btn-sm btn-default'>Add To Slider</a>
    </div>
";
        }
        
        $__internal_5b471fcdcf064248895244ca3f7615f742b54fe2bd4753e1e043d41d1b1ee79d->leave($__internal_5b471fcdcf064248895244ca3f7615f742b54fe2bd4753e1e043d41d1b1ee79d_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/html:homepage_slider_selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 31,  131 => 30,  120 => 28,  116 => 27,  112 => 26,  108 => 24,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  82 => 18,  76 => 15,  73 => 14,  62 => 12,  58 => 11,  54 => 10,  50 => 8,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if class(ENT[0]) == 'Gallery' %}*/
/*     <div style="float:left">*/
/*         <h5>Add {{class(ENT[0])}} To Slider</h5>*/
/*         <select id="dd_{{class(ENT[0])}}" class="form-control">*/
/*             {% for entity in arr %}*/
/*                 <option value="{{entity.id}}">{{entity.name}}</option>*/
/*             {% endfor %}*/
/*         </select> */
/*         <p>Position</p>*/
/*         <select id='dd_p_{{class(ENT[0])}}' class='form-control'>*/
/*             {% for i in 0..4 %}*/
/*                 <option value="{{i}}">{{i+1}}</option>*/
/*             {% endfor %}*/
/*         </select> */
/*         <a id='{{class(ENT[0])}}' href='#' class='btn-sm btn-default'>Add To Slider</a>*/
/*     </div>*/
/* {% else %}*/
/*     <div style="float:left">*/
/*         <h5>Add {{class(ENT[0])}} To Slider</h5>*/
/*         <select id="dd_{{class(ENT[0])}}" class="form-control">*/
/*             {% for entity in arr %}*/
/*                 <option value="{{entity.id}}">{{entity.title}}</option>*/
/*             {% endfor %}*/
/*         </select> */
/*         <p>Position</p>*/
/*         <select id='dd_p_{{class(ENT[0])}}' class='form-control'>*/
/*             {% for i in 0..4 %}*/
/*                 <option value="{{i}}">{{i+1}}</option>*/
/*             {% endfor %}*/
/*         </select> */
/*         <a id='{{class(ENT[0])}}' href='#' class='btn-sm btn-default'>Add To Slider</a>*/
/*     </div>*/
/* {% endif %}*/
