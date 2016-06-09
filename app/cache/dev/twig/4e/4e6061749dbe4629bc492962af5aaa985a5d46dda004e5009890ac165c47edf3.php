<?php

/* YallaWebsiteFrontendBundle:Template:socialmedia.html.twig */
class __TwigTemplate_7dd559fb422f412be899ec46bc3a58717c8657619b7dae1ffbcd5b11c566c4b5 extends Twig_Template
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
        $__internal_c23057ec0363185f285d943416d6febe775254f3792059369356ae3d70fadf59 = $this->env->getExtension("native_profiler");
        $__internal_c23057ec0363185f285d943416d6febe775254f3792059369356ae3d70fadf59->enter($__internal_c23057ec0363185f285d943416d6febe775254f3792059369356ae3d70fadf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteFrontendBundle:Template:socialmedia.html.twig"));

        // line 1
        echo "<div id='socialLinksTitle'>
    <h5>Follow Us</h5>
</div>
<div id='socialLinksIcons'>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")));
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
        
        $__internal_c23057ec0363185f285d943416d6febe775254f3792059369356ae3d70fadf59->leave($__internal_c23057ec0363185f285d943416d6febe775254f3792059369356ae3d70fadf59_prof);

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
        return array (  48 => 10,  37 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
