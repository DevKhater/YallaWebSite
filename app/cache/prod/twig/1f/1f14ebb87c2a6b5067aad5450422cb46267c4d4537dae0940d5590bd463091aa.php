<?php

/* YallaWebsiteBackendBundle:Homepage/html:homepage_backend_selected_article.html.twig */
class __TwigTemplate_0abfd357dcb4e0bc76033ea521a28b5abaee46b59a41aa9e38e93749a3c9ab31 extends Twig_Template
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
        echo "<h5><strong>Homepage Featured Article</strong></h5>
<div class='col-md-12'>
    <div style=\"float:left\">
        <select id=\"dd_one_article\" class=\"form-control\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
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
        return array (  71 => 21,  58 => 19,  54 => 18,  42 => 8,  29 => 6,  25 => 5,  19 => 1,);
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
