<?php

/* YallaWebsiteBackendBundle:Homepage/html:homepage_backend_selected_article.html.twig */
class __TwigTemplate_9940b905c4c28dfe4ca8ed8e607d404ced974286b9f63e040e8502647e648068 extends Twig_Template
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
        $__internal_243a6d574b12e6377282e4c799810dfe1344d891ee3c2027a074d86d063537bd = $this->env->getExtension("native_profiler");
        $__internal_243a6d574b12e6377282e4c799810dfe1344d891ee3c2027a074d86d063537bd->enter($__internal_243a6d574b12e6377282e4c799810dfe1344d891ee3c2027a074d86d063537bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/html:homepage_backend_selected_article.html.twig"));

        // line 1
        echo "<h5><strong>Homepage Featured Article</strong></h5>
<div class='col-md-12'>
    <div style=\"float:left\">
        <select id=\"dd_one_article\" class=\"form-control\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </select>
        <a id='one_article' href='#' class='btn-sm btn-default'>Add Article To HomePage</a>
    </div>
</div>
<br/><br/><br/>
        <h5><strong>Homepage Other Articles</strong></h5>
<div class='col-md-6 clearfix'>
    <div style=\"float:left\">
        <h6>Select 4 Articles.</h6>
        <div id='multiple_select_articles'>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                <input class=\"single-checkbox\" type=\"checkbox\" name=\"article\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            <a id='four_articles' href='#' class='btn-sm btn-default'>Add Articles To HomePage</a>
        </div>
    </div>
</div><br/>";
        
        $__internal_243a6d574b12e6377282e4c799810dfe1344d891ee3c2027a074d86d063537bd->leave($__internal_243a6d574b12e6377282e4c799810dfe1344d891ee3c2027a074d86d063537bd_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/html:homepage_backend_selected_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  61 => 19,  57 => 18,  45 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <h5><strong>Homepage Featured Article</strong></h5>*/
/* <div class='col-md-12'>*/
/*     <div style="float:left">*/
/*         <select id="dd_one_article" class="form-control">*/
/*             {% for entity in articles %}*/
/*                 <option value="{{entity.id}}">{{entity.title}} - {{entity.createdAt|date("Y-m-d")}}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         <a id='one_article' href='#' class='btn-sm btn-default'>Add Article To HomePage</a>*/
/*     </div>*/
/* </div>*/
/* <br/><br/><br/>*/
/*         <h5><strong>Homepage Other Articles</strong></h5>*/
/* <div class='col-md-6 clearfix'>*/
/*     <div style="float:left">*/
/*         <h6>Select 4 Articles.</h6>*/
/*         <div id='multiple_select_articles'>*/
/*             {% for entity in articles %}*/
/*                 <input class="single-checkbox" type="checkbox" name="article" value="{{entity.id}}">  {{entity.title}} - {{entity.createdAt|date("Y-m-d")}}<br>*/
/*             {% endfor %}*/
/*             <a id='four_articles' href='#' class='btn-sm btn-default'>Add Articles To HomePage</a>*/
/*         </div>*/
/*     </div>*/
/* </div><br/>*/
