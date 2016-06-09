<?php

/* YallaWebsiteBackendBundle:AdsManager:display.html.twig */
class __TwigTemplate_fe48fcdc2f4e5fafdeacd239559b5e36274b84930399b15a44ec1052879551b9 extends Twig_Template
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
        echo "If there are several items to display 
";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) > 1)) {
            // line 3
            echo "    ";
            // line 4
            echo "    <div class=\"carousel  slide\" data-ride=\"carousel\" data-interval=\"3000\">
        ";
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) - 1)));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 7
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 8
                    echo "                <ol class=\"carousel-indicators\">
                ";
                }
                // line 10
                echo "                <li data-target=\".carousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "class=\"active\"";
                }
                echo "></li>
                    ";
                // line 11
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 12
                    echo "                </ol>
            ";
                }
                // line 14
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
        ";
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "data", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["thedata"]) {
                    // line 19
                    echo "                ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 20
                        echo "                    <div class=\"carousel-inner\">
                    ";
                    }
                    // line 22
                    echo "                    <div class=\"thedata";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        echo "  active";
                    }
                    echo "\">
                        ";
                    // line 23
                    $this->loadTemplate("@YallaWebsiteBackendBundle/views/AdsManager/_type.html.twig", "YallaWebsiteBackendBundle:AdsManager:display.html.twig", 23)->display(array_merge($context, array("type" => $this->getAttribute(                    // line 24
$context["thedata"], "type", array()), "item" =>                     // line 25
$context["thedata"])));
                    // line 27
                    echo "                    </div>
                    ";
                    // line 28
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 29
                        echo "                    </div>
                ";
                    }
                    // line 31
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thedata'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </div>

    ";
        } else {
            // line 37
            echo "
    ";
            // line 38
            $this->loadTemplate("@YallaWebsiteBackendBundle/views/AdsManager/_type.html.twig", "YallaWebsiteBackendBundle:AdsManager:display.html.twig", 38)->display(array_merge($context, array("type" => $this->getAttribute(twig_first($this->env, $this->getAttribute(            // line 39
(isset($context["content"]) ? $context["content"] : null), "data", array())), "type", array()), "item" => twig_first($this->env, $this->getAttribute(            // line 40
(isset($context["content"]) ? $context["content"] : null), "data", array())))));
            // line 42
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:AdsManager:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 42,  187 => 40,  186 => 39,  185 => 38,  182 => 37,  177 => 33,  163 => 32,  149 => 31,  145 => 29,  143 => 28,  140 => 27,  138 => 25,  137 => 24,  136 => 23,  129 => 22,  125 => 20,  122 => 19,  104 => 18,  86 => 17,  83 => 15,  69 => 14,  65 => 12,  63 => 11,  54 => 10,  50 => 8,  47 => 7,  29 => 6,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* If there are several items to display */
/* {% if content|length > 1 %}*/
/*     {# Output a carousel #}*/
/*     <div class="carousel  slide" data-ride="carousel" data-interval="3000">*/
/*         {# Carousel indicators #}*/
/*         {% for i in 0..(content|length)-1 %}*/
/*             {% if loop.first %}*/
/*                 <ol class="carousel-indicators">*/
/*                 {% endif %}*/
/*                 <li data-target=".carousel" data-slide-to="{{ i }}" {% if loop.first %}class="active"{% endif %}></li>*/
/*                     {% if loop.last %}*/
/*                 </ol>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {# Carousel items #}*/
/*         {% for item in content %}*/
/*             {% for thedata in item.data %}*/
/*                 {% if loop.first %}*/
/*                     <div class="carousel-inner">*/
/*                     {% endif %}*/
/*                     <div class="thedata{% if loop.first %}  active{% endif %}">*/
/*                         {% include '@YallaWebsiteBackendBundle/views/AdsManager/_type.html.twig' with {*/
/*           type: thedata.type, */
/*           item: thedata*/
/*         } %}*/
/*                     </div>*/
/*                     {% if loop.last %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     {# If there is a single item, include it #}*/
/* {% else %}*/
/* */
/*     {% include '@YallaWebsiteBackendBundle/views/AdsManager/_type.html.twig' with {*/
/*     type: (content.data|first).type, */
/*     item: (content.data|first)*/
/*   } %}*/
/* */
/* {% endif %}*/
