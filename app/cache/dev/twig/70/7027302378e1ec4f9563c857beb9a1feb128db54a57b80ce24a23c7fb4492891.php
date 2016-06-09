<?php

/* YallaWebsiteBackendBundle:AdsManager:display.html.twig */
class __TwigTemplate_0f10b708006b71f3221c72d16a65099c06ff22ef7acccf5b8551bb33086d04c0 extends Twig_Template
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
        $__internal_bc637e0c5c15c08a6cb6c3b7bc26d699c404713e9f4d26b47f691a2af26b9deb = $this->env->getExtension("native_profiler");
        $__internal_bc637e0c5c15c08a6cb6c3b7bc26d699c404713e9f4d26b47f691a2af26b9deb->enter($__internal_bc637e0c5c15c08a6cb6c3b7bc26d699c404713e9f4d26b47f691a2af26b9deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:AdsManager:display.html.twig"));

        // line 1
        echo "If there are several items to display 
";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 1)) {
            // line 3
            echo "    ";
            // line 4
            echo "    <div class=\"carousel  slide\" data-ride=\"carousel\" data-interval=\"3000\">
        ";
            // line 6
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
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")));
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
(isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "data", array())), "type", array()), "item" => twig_first($this->env, $this->getAttribute(            // line 40
(isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "data", array())))));
            // line 42
            echo "
";
        }
        
        $__internal_bc637e0c5c15c08a6cb6c3b7bc26d699c404713e9f4d26b47f691a2af26b9deb->leave($__internal_bc637e0c5c15c08a6cb6c3b7bc26d699c404713e9f4d26b47f691a2af26b9deb_prof);

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
        return array (  192 => 42,  190 => 40,  189 => 39,  188 => 38,  185 => 37,  180 => 33,  166 => 32,  152 => 31,  148 => 29,  146 => 28,  143 => 27,  141 => 25,  140 => 24,  139 => 23,  132 => 22,  128 => 20,  125 => 19,  107 => 18,  89 => 17,  86 => 15,  72 => 14,  68 => 12,  66 => 11,  57 => 10,  53 => 8,  50 => 7,  32 => 6,  29 => 4,  27 => 3,  25 => 2,  22 => 1,);
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
