<?php

/* YallaWebsiteFrontendBundle:Template:pagination.html.twig */
class __TwigTemplate_355796b80d43a42edfd3b9d3dafd4b0be4ab3559f9b81a461ef4bbfa911bf18c extends Twig_Template
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
        // line 16
        echo "
";
        // line 17
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 18
            echo "    <ul class=\"pagination\">
        ";
            // line 19
            if (array_key_exists("previous", $context)) {
                // line 20
                echo "            <a class='pagination_image' style=\"float: left;margin-top: 1px;\" rel=\"prev\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\">";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "eda3b9d_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eda3b9d_0") : $this->env->getExtension('asset')->getAssetUrl("images/eda3b9d_pagination_arrow_left_1.png");
                    // line 21
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" height=\"30\" alt=\"left\" />
                ";
                } else {
                    // asset "eda3b9d"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eda3b9d") : $this->env->getExtension('asset')->getAssetUrl("images/eda3b9d.png");
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" height=\"30\" alt=\"left\" />
                ";
                }
                unset($context["asset_url"]);
                // line 22
                echo "</a>
            ";
            }
            // line 24
            echo "        <li class='pagination_round_border'><span style='border-bottom-left-radius: 16px;border-top-left-radius: 16px;'></span></li>
            ";
            // line 25
            if (((isset($context["startPage"]) ? $context["startPage"] : null) > 1)) {
                // line 26
                echo "            <li>
                <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 1))), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 29
                if (((isset($context["startPage"]) ? $context["startPage"] : null) == 3)) {
                    // line 30
                    echo "                <li>
                    <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 2))), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 33
(isset($context["startPage"]) ? $context["startPage"] : null) != 2)) {
                    // line 34
                    echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                }
                // line 38
                echo "        ";
            }
            // line 39
            echo "
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 41
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 42
                    echo "                <li>
                    <a href=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 46
                    echo "                <li class=\"active\">
                    <span>";
                    // line 47
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                </li>
            ";
                }
                // line 50
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
        ";
            // line 53
            if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > (isset($context["endPage"]) ? $context["endPage"] : null))) {
                // line 54
                echo "            ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 1))) {
                    // line 55
                    echo "                ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 2))) {
                        // line 56
                        echo "                    <li class=\"disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                    } else {
                        // line 60
                        echo "                    <li>
                        <a href=\"";
                        // line 61
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 64
                    echo "            ";
                }
                // line 65
                echo "            <li>
                <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["pageCount"]) ? $context["pageCount"] : null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : null), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 69
            echo "        <li class='pagination_round_border'><span style='border-bottom-right-radius: 16px;border-top-right-radius: 16px;'></span></li>
            ";
            // line 70
            if (array_key_exists("next", $context)) {
                // line 71
                echo "
            <a class='pagination_image' rel=\"next\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\">";
                if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                    // asset "ebfce61_0"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebfce61_0") : $this->env->getExtension('asset')->getAssetUrl("images/ebfce61_pagination_arrow_right_1.png");
                    // line 73
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" height=\"30\"  alt=\"right\" />
                ";
                } else {
                    // asset "ebfce61"
                    $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebfce61") : $this->env->getExtension('asset')->getAssetUrl("images/ebfce61.png");
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
                    echo "\" height=\"30\"  alt=\"right\" />
                ";
                }
                unset($context["asset_url"]);
                // line 74
                echo "</a>
            ";
            }
            // line 76
            echo "    </ul>

";
        }
    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Template:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 76,  195 => 74,  181 => 73,  175 => 72,  172 => 71,  170 => 70,  167 => 69,  159 => 66,  156 => 65,  153 => 64,  145 => 61,  142 => 60,  136 => 56,  133 => 55,  130 => 54,  128 => 53,  125 => 52,  118 => 50,  112 => 47,  109 => 46,  101 => 43,  98 => 42,  95 => 41,  91 => 40,  88 => 39,  85 => 38,  79 => 34,  77 => 33,  72 => 31,  69 => 30,  67 => 29,  62 => 27,  59 => 26,  57 => 25,  54 => 24,  50 => 22,  36 => 21,  29 => 20,  27 => 19,  24 => 18,  22 => 17,  19 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Twitter Bootstrap v3 Sliding pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module*/
/*  * from the Twitter Bootstrap CSS Toolkit*/
/*  * http://getbootstrap.com/components/#pagination*/
/*  **/
/*  * @author Pablo Díez <pablodip@gmail.com>*/
/*  * @author Jan Sorgalla <jsorgalla@gmail.com>*/
/*  * @author Artem Ponomarenko <imenem@inbox.ru>*/
/*  * @author Artem Zabelin <artjomzabelin@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* {% if pageCount > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if previous is defined %}*/
/*             <a class='pagination_image' style="float: left;margin-top: 1px;" rel="prev" href="{{ path(route, query|merge({(pageParameterName): previous})) }}">{% image '@YallaWebsiteFrontendBundle/Resources/public/images/base/pagination_arrow_left.png' %}*/
/*                 <img src="{{ asset_url }}" height="30" alt="left" />*/
/*                 {% endimage %}</a>*/
/*             {% endif %}*/
/*         <li class='pagination_round_border'><span style='border-bottom-left-radius: 16px;border-top-left-radius: 16px;'></span></li>*/
/*             {% if startPage > 1 %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): 1})) }}">1</a>*/
/*             </li>*/
/*             {% if startPage == 3 %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): 2})) }}">2</a>*/
/*                 </li>*/
/*             {% elseif startPage != 2 %}*/
/*                 <li class="disabled">*/
/*                     <span>&hellip;</span>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% for page in pagesInRange %}*/
/*             {% if page != current %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li class="active">*/
/*                     <span>{{ page }}</span>*/
/*                 </li>*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*         {% if pageCount > endPage %}*/
/*             {% if pageCount > (endPage + 1) %}*/
/*                 {% if pageCount > (endPage + 2) %}*/
/*                     <li class="disabled">*/
/*                         <span>&hellip;</span>*/
/*                     </li>*/
/*                 {% else %}*/
/*                     <li>*/
/*                         <a href="{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}">{{ pageCount -1 }}</a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): pageCount})) }}">{{ pageCount }}</a>*/
/*             </li>*/
/*         {% endif %}*/
/*         <li class='pagination_round_border'><span style='border-bottom-right-radius: 16px;border-top-right-radius: 16px;'></span></li>*/
/*             {% if next is defined %}*/
/* */
/*             <a class='pagination_image' rel="next" href="{{ path(route, query|merge({(pageParameterName): next})) }}">{% image '@YallaWebsiteFrontendBundle/Resources/public/images/base/pagination_arrow_right.png' %}*/
/*                 <img src="{{ asset_url }}" height="30"  alt="right" />*/
/*                 {% endimage %}</a>*/
/*             {% endif %}*/
/*     </ul>*/
/* */
/* {% endif %}*/
/* */
