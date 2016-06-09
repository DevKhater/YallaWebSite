<?php

/* YallaWebsiteFrontendBundle:Template:socialmedia.html.twig */
class __TwigTemplate_7cf1b68e7f163825fefc64919db911e1d930ade59fdd8c84942eb5ad345a9028 extends Twig_Template
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
        echo "<div id='socialLinksTitle'>
    <h5>Follow Us</h5>
</div>
<div id='socialLinksIcons'>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 6
            echo "        <a href='";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "'>
            <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/yallawebsitefrontend/images/base/" . $context["key"]) . "_sm_icon.svg")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
            echo " Icon\" />
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteFrontendBundle:Template:socialmedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  34 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div id='socialLinksTitle'>*/
/*     <h5>Follow Us</h5>*/
/* </div>*/
/* <div id='socialLinksIcons'>*/
/*     {% for key,value in content %}*/
/*         <a href='{{value}}'>*/
/*             <img src="{{ asset('bundles/yallawebsitefrontend/images/base/' ~ key ~ '_sm_icon.svg') }}" alt="{{key|capitalize}} Icon" />*/
/*         </a>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* */
