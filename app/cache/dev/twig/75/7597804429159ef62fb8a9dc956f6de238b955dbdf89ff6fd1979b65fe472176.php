<?php

/* knp_menu_ordered.html.twig */
class __TwigTemplate_0796f9c8eec72061f7730973f9752e09a1dbe20b83851458166afe942f8d40fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2f78f773ce5c177558953a542ca36fe2dff0e540b9a13d49e722af777afc4d7 = $this->env->getExtension("native_profiler");
        $__internal_e2f78f773ce5c177558953a542ca36fe2dff0e540b9a13d49e722af777afc4d7->enter($__internal_e2f78f773ce5c177558953a542ca36fe2dff0e540b9a13d49e722af777afc4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f78f773ce5c177558953a542ca36fe2dff0e540b9a13d49e722af777afc4d7->leave($__internal_e2f78f773ce5c177558953a542ca36fe2dff0e540b9a13d49e722af777afc4d7_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_be4a833f517952b6d7e673fc5c85cf6e17c723ade1e588b5dcb593cced5a1e2d = $this->env->getExtension("native_profiler");
        $__internal_be4a833f517952b6d7e673fc5c85cf6e17c723ade1e588b5dcb593cced5a1e2d->enter($__internal_be4a833f517952b6d7e673fc5c85cf6e17c723ade1e588b5dcb593cced5a1e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
        
        $__internal_be4a833f517952b6d7e673fc5c85cf6e17c723ade1e588b5dcb593cced5a1e2d->leave($__internal_be4a833f517952b6d7e673fc5c85cf6e17c723ade1e588b5dcb593cced5a1e2d_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block list %}*/
/* {% import 'knp_menu.html.twig' as macros %}*/
/* */
/* {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}*/
/*     <ol{{ macros.attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*     </ol>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
