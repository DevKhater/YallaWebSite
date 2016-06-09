<?php

/* YallaWebsiteBackendBundle:Homepage/html:slider_preview.html.twig */
class __TwigTemplate_ba32c4f16340b27bd6035938cf802f48aec51dcc2ea73d27df3e6d7e74520544 extends Twig_Template
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
        $__internal_06ecee595d3a3d5369c23ea67acae895a90bcd49693ac4da1a05caf4d79faf2b = $this->env->getExtension("native_profiler");
        $__internal_06ecee595d3a3d5369c23ea67acae895a90bcd49693ac4da1a05caf4d79faf2b->enter($__internal_06ecee595d3a3d5369c23ea67acae895a90bcd49693ac4da1a05caf4d79faf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/html:slider_preview.html.twig"));

        // line 1
        echo "<div>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : $this->getContext($context, "homepage")), "sliderEntities", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ss"]) {
            // line 3
            echo "    ";
            if (($this->env->getExtension('class_twig_extension')->getClass($context["ss"]) == "Gallery")) {
                // line 4
                echo "        <div style=\"float:left\">";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["ss"], "media", array()), "small", array());
                echo "<br/>
            <p>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["ss"], "name", array()), "html", null, true);
                echo "</p>
        </div>
    ";
            } else {
                // line 8
                echo "        <div style=\"float:left\">";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($context["ss"], "media", array()), "small", array());
                echo "<br/>
            <p>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["ss"], "title", array()), "html", null, true);
                echo "</p></div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ss'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>";
        
        $__internal_06ecee595d3a3d5369c23ea67acae895a90bcd49693ac4da1a05caf4d79faf2b->leave($__internal_06ecee595d3a3d5369c23ea67acae895a90bcd49693ac4da1a05caf4d79faf2b_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/html:slider_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  48 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div>*/
/* {% for ss in homepage.sliderEntities %}*/
/*     {% if class(ss) == 'Gallery' %}*/
/*         <div style="float:left">{% thumbnail ss.media, 'small' %}<br/>*/
/*             <p>{{ ss.name }}</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div style="float:left">{% thumbnail ss.media, 'small' %}<br/>*/
/*             <p>{{ ss.title }}</p></div>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* </div>*/
