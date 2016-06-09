<?php

/* YallaWebsiteBackendBundle:Homepage/html:slider_preview.html.twig */
class __TwigTemplate_40dd5ffc7160c7ed96013ebf77da7290e91066ec1bd3642fb7f919d12fcac42e extends Twig_Template
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
        echo "<div>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "sliderEntities", array()));
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
        return array (  54 => 12,  45 => 9,  40 => 8,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
