<?php

/* YallaWebsiteBackendBundle:Homepage/html:slider_preview.html.twig */
class __TwigTemplate_8571725c3f3c9ede71ae302668a7fa7021b01f918c10683126a2095f2817362d extends Twig_Template
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
        $__internal_53c2835c483a4c4dffa179b342c6152b3c5d0c7fc3f78fd18b833fad65ce6a67 = $this->env->getExtension("native_profiler");
        $__internal_53c2835c483a4c4dffa179b342c6152b3c5d0c7fc3f78fd18b833fad65ce6a67->enter($__internal_53c2835c483a4c4dffa179b342c6152b3c5d0c7fc3f78fd18b833fad65ce6a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/html:slider_preview.html.twig"));

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
        
        $__internal_53c2835c483a4c4dffa179b342c6152b3c5d0c7fc3f78fd18b833fad65ce6a67->leave($__internal_53c2835c483a4c4dffa179b342c6152b3c5d0c7fc3f78fd18b833fad65ce6a67_prof);

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
