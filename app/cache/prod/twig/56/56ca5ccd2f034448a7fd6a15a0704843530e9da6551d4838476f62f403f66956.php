<?php

/* YallaWebsiteBackendBundle:Homepage/html:homepage_backend_slider.html.twig */
class __TwigTemplate_d04409f4821a24ecbb3e7e6be91a0570bc326cd4c1081027e38e25ca8e2fd5e5 extends Twig_Template
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
        echo "<h5><strong>Slider Options</strong></h5>
<div id='ajaxDiv' class=\"col-md-12 clearfix\"></div>
<p id=\"get_slider_view\" style=\"font-weight: normal; font-size: 12px;\"><span style=\"background-color: #000; color: #fff; cursor: pointer\"><i><u>get Slider View</u></i></span></p>
<div class='col-md-12'>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ENT"]) {
            // line 6
            echo "        ";
            $this->loadTemplate("@YallaWebsiteBackendBundle/views/Homepage/html/homepage_slider_selector.html.twig", "YallaWebsiteBackendBundle:Homepage/html:homepage_backend_slider.html.twig", 6)->display(array_merge($context, array("arr" => $context["ENT"])));
            // line 7
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ENT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>
<br/><br/><br/>";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/html:homepage_backend_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  45 => 7,  42 => 6,  25 => 5,  19 => 1,);
    }
}
/* <h5><strong>Slider Options</strong></h5>*/
/* <div id='ajaxDiv' class="col-md-12 clearfix"></div>*/
/* <p id="get_slider_view" style="font-weight: normal; font-size: 12px;"><span style="background-color: #000; color: #fff; cursor: pointer"><i><u>get Slider View</u></i></span></p>*/
/* <div class='col-md-12'>*/
/*     {% for ENT in  arr %}*/
/*         {% include '@YallaWebsiteBackendBundle/views/Homepage/html/homepage_slider_selector.html.twig'  with {arr: ENT} %}*/
/*     {% endfor %}*/
/* </div>*/
/* <br/><br/><br/>*/
