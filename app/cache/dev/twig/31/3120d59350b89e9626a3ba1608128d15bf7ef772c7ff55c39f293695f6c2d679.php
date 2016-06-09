<?php

/* YallaWebsiteFrontendBundle:Ads:display.html.twig */
class __TwigTemplate_d45f9b41cc25be6c5d2d6993b6047c010b9108f27d1a78a8017b2fd4829505b0 extends Twig_Template
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
        $__internal_e60aa2fef93ff738adf1556fa192c9f78b5e6bff1eede16d2856f0d5faf2e1e4 = $this->env->getExtension("native_profiler");
        $__internal_e60aa2fef93ff738adf1556fa192c9f78b5e6bff1eede16d2856f0d5faf2e1e4->enter($__internal_e60aa2fef93ff738adf1556fa192c9f78b5e6bff1eede16d2856f0d5faf2e1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Ads:display.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "data", array())) > 1)) {
            // line 2
            echo "    ";
            // line 3
            echo "    <div class=\"carousel  slide\" data-ride=\"carousel\" data-interval=\"3000\">
        ";
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) - 1)));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "data", array()));
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
(isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "data", array())), "type", array()), "item" => twig_first($this->env, $this->getAttribute(            // line 37
(isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "data", array())))));
            // line 39
            echo "
";
        }
        
        $__internal_e60aa2fef93ff738adf1556fa192c9f78b5e6bff1eede16d2856f0d5faf2e1e4->leave($__internal_e60aa2fef93ff738adf1556fa192c9f78b5e6bff1eede16d2856f0d5faf2e1e4_prof);

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
        return array (  157 => 39,  155 => 37,  154 => 36,  153 => 35,  150 => 34,  145 => 30,  131 => 29,  127 => 27,  125 => 26,  122 => 25,  120 => 23,  119 => 22,  118 => 21,  111 => 20,  107 => 18,  104 => 17,  86 => 16,  83 => 14,  69 => 13,  65 => 11,  63 => 10,  54 => 9,  50 => 7,  47 => 6,  29 => 5,  26 => 3,  24 => 2,  22 => 1,);
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
