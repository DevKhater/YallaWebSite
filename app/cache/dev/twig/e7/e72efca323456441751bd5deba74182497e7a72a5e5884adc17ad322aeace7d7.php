<?php

/* StarRatingBundle:Display:ratingDisplay.html.twig */
class __TwigTemplate_0173e8ad1b458ca4c4ab5516de0ddaac5f7291ffa1b017e108146547dd0d7917 extends Twig_Template
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
        $__internal_bd66f066a023d93f1bd8065797c3d664f4f05d0530d574ac6854c459057d7a06 = $this->env->getExtension("native_profiler");
        $__internal_bd66f066a023d93f1bd8065797c3d664f4f05d0530d574ac6854c459057d7a06->enter($__internal_bd66f066a023d93f1bd8065797c3d664f4f05d0530d574ac6854c459057d7a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

        // line 1
        echo "<div class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"";
            if (($context["i"] <= (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["starSize"]) ? $context["starSize"] : $this->getContext($context, "starSize")), "html", null, true);
            echo "\"></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_bd66f066a023d93f1bd8065797c3d664f4f05d0530d574ac6854c459057d7a06->leave($__internal_bd66f066a023d93f1bd8065797c3d664f4f05d0530d574ac6854c459057d7a06_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle:Display:ratingDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="rating">*/
/*   {% for i in 1..max %}*/
/*     <div class="{% if i <= stars %}star-full{% else %}star-empty{% endif %} {{ starSize }}"></div>*/
/*   {% endfor %}*/
/* </div>*/
