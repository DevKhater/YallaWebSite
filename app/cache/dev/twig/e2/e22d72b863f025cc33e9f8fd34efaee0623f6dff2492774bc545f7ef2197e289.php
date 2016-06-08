<?php

/* knp_menu_ordered.html.twig */
class __TwigTemplate_16f3bf0d2fb3e8bbd2a4a4992d476d4ef05db6a0b2f573addb974c04ad706cce extends Twig_Template
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
        $__internal_a35f54e30d57faea736c4924ca6fffc8f7baa31a5aaea6bec59479038be070cc = $this->env->getExtension("native_profiler");
        $__internal_a35f54e30d57faea736c4924ca6fffc8f7baa31a5aaea6bec59479038be070cc->enter($__internal_a35f54e30d57faea736c4924ca6fffc8f7baa31a5aaea6bec59479038be070cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a35f54e30d57faea736c4924ca6fffc8f7baa31a5aaea6bec59479038be070cc->leave($__internal_a35f54e30d57faea736c4924ca6fffc8f7baa31a5aaea6bec59479038be070cc_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_6a369748919e5126860acc3df99625ab88d7216c717b25a207361b37f968e103 = $this->env->getExtension("native_profiler");
        $__internal_6a369748919e5126860acc3df99625ab88d7216c717b25a207361b37f968e103->enter($__internal_6a369748919e5126860acc3df99625ab88d7216c717b25a207361b37f968e103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_6a369748919e5126860acc3df99625ab88d7216c717b25a207361b37f968e103->leave($__internal_6a369748919e5126860acc3df99625ab88d7216c717b25a207361b37f968e103_prof);

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
