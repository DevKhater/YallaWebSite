<?php

/* YallaWebsiteBackendBundle:Homepage/html:homepage_slider_selector.html.twig */
class __TwigTemplate_2795e80edb2068fd41e34db8be3eb54dab0b7ea9633fba29d95c14912e00b41f extends Twig_Template
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
        // line 1
        if (($this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")) == "Gallery")) {
            // line 2
            echo "    <div style=\"float:left\">
        <h5>Add ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")), "html", null, true);
            echo " To Slider</h5>
        <select id=\"dd_";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")), "html", null, true);
            echo "\" class=\"form-control\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")), "html", null, true);
            echo "' href='#' class='btn-sm btn-default'>Add To Slider</a>
    </div>
";
        } else {
            // line 18
            echo "    <div style=\"float:left\">
        <h5>Add ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")), "html", null, true);
            echo " To Slider</h5>
        <select id=\"dd_";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")), "html", null, true);
            echo "\" class=\"form-control\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('class_twig_extension')->getClass($this->getAttribute((isset($context["ENT"]) ? $context["ENT"] : null), 0, array(), "array")), "html", null, true);
            echo "' href='#' class='btn-sm btn-default'>Add To Slider</a>
    </div>
";
        }
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
        return array (  131 => 31,  128 => 30,  117 => 28,  113 => 27,  109 => 26,  105 => 24,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  79 => 18,  73 => 15,  70 => 14,  59 => 12,  55 => 11,  51 => 10,  47 => 8,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
