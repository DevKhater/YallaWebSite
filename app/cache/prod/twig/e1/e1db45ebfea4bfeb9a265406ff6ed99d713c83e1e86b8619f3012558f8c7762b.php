<?php

/* YallaWebsiteBackendBundle:Homepage/html:homepage_backend_selected_gallery.html.twig */
class __TwigTemplate_23d4a684d41b0afc28304e2ed502138b265c78ef85a14ff28e3bc0ff6f0d025f extends Twig_Template
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
        echo "<h5><strong>Homepage Featured Gallery</strong></h5>
<div class='col-md-12 clearfix'>
   <div style=\"float:left\">
        <select id=\"dd_feature_gallery\" class=\"form-control\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) ? $context["galleries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </select>
        <a id='featured_gallery' href='#' class='btn-sm btn-default'>Add To HomePage</a>
    </div>
</div>
<br/><br/><br/>";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/html:homepage_backend_selected_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <h5><strong>Homepage Featured Gallery</strong></h5>*/
/* <div class='col-md-12 clearfix'>*/
/*    <div style="float:left">*/
/*         <select id="dd_feature_gallery" class="form-control">*/
/*             {% for entity in galleries %}*/
/*                 <option value="{{entity.id}}">{{entity.name}} - {{entity.date|date("Y-m-d")}}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         <a id='featured_gallery' href='#' class='btn-sm btn-default'>Add To HomePage</a>*/
/*     </div>*/
/* </div>*/
/* <br/><br/><br/>*/
