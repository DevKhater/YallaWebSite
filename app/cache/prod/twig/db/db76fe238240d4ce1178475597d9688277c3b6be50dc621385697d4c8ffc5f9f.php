<?php

/* YallaWebsiteFrontendBundle:Ads:display.html.twig */
class __TwigTemplate_f29c46737dc828b7db9734997ba02d5ff25cc152af033bb183645b5f08ff489a extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "data", array())) > 1)) {
            // line 2
            echo "    ";
            // line 3
            echo "    <div class=\"carousel  slide\" data-ride=\"carousel\" data-interval=\"3000\">
        ";
            // line 5
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
                // line 6
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 7
                    echo "                <ol class=\"carousel-indicators\">
                ";
                }
                // line 9
                echo "                <li data-target=\".carousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "class=\"active\"";
                }
                echo "></li>
                    ";
                // line 10
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 11
                    echo "                </ol>
            ";
                }
                // line 13
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
            // line 14
            echo "
        ";
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "data", array()));
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
                // line 17
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 18
                    echo "                <div class=\"carousel-inner\">
                ";
                }
                // line 20
                echo "                <div class=\"item";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "  active";
                }
                echo "\">
                    ";
                // line 21
                $this->loadTemplate("@YallaWebsiteFrontendBundle/views/Ads/_type.html.twig", "YallaWebsiteFrontendBundle:Ads:display.html.twig", 21)->display(array_merge($context, array("type" => $this->getAttribute(                // line 22
$context["item"], "type", array()), "item" =>                 // line 23
$context["item"])));
                // line 25
                echo "                </div>
                ";
                // line 26
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 27
                    echo "                </div>
            ";
                }
                // line 29
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
            // line 30
            echo "    </div>

    ";
        } else {
            // line 34
            echo "
    ";
            // line 35
            $this->loadTemplate("@YallaWebsiteFrontendBundle/views/Ads/_type.html.twig", "YallaWebsiteFrontendBundle:Ads:display.html.twig", 35)->display(array_merge($context, array("type" => $this->getAttribute(twig_first($this->env, $this->getAttribute(            // line 36
(isset($context["content"]) ? $context["content"] : null), "data", array())), "type", array()), "item" => twig_first($this->env, $this->getAttribute(            // line 37
(isset($context["content"]) ? $context["content"] : null), "data", array())))));
            // line 39
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Ads:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 39,  152 => 37,  151 => 36,  150 => 35,  147 => 34,  142 => 30,  128 => 29,  124 => 27,  122 => 26,  119 => 25,  117 => 23,  116 => 22,  115 => 21,  108 => 20,  104 => 18,  101 => 17,  83 => 16,  80 => 14,  66 => 13,  62 => 11,  60 => 10,  51 => 9,  47 => 7,  44 => 6,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if content.data|length > 1 %}*/
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
/*         {% for item in content.data %}*/
/*             {% if loop.first %}*/
/*                 <div class="carousel-inner">*/
/*                 {% endif %}*/
/*                 <div class="item{% if loop.first %}  active{% endif %}">*/
/*                     {% include '@YallaWebsiteFrontendBundle/views/Ads/_type.html.twig'  with {*/
/*           type: item.type, */
/*           item: item*/
/*         } %}*/
/*                 </div>*/
/*                 {% if loop.last %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     {# If there is a single item, include it #}*/
/* {% else %}*/
/* */
/*     {% include '@YallaWebsiteFrontendBundle/views/Ads/_type.html.twig' with {*/
/*     type: (content.data|first).type, */
/*     item: (content.data|first)*/
/*   } %}*/
/* */
/* {% endif %}*/
