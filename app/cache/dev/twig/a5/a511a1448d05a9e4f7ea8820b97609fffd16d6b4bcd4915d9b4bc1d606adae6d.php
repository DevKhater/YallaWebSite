<?php

/* StarRatingBundle::rating.html.twig */
class __TwigTemplate_0c8591e92a0e26aa284e96ed410f81101b8c432375be85e8d3db56db2b36de36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rating_widget' => array($this, 'block_rating_widget'),
            'rating_widget_container_attributes' => array($this, 'block_rating_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65046b4aad0e8cd8aecc0672d13f4569e798cbd006f1806f86abbbe74dc15179 = $this->env->getExtension("native_profiler");
        $__internal_65046b4aad0e8cd8aecc0672d13f4569e798cbd006f1806f86abbbe74dc15179->enter($__internal_65046b4aad0e8cd8aecc0672d13f4569e798cbd006f1806f86abbbe74dc15179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_65046b4aad0e8cd8aecc0672d13f4569e798cbd006f1806f86abbbe74dc15179->leave($__internal_65046b4aad0e8cd8aecc0672d13f4569e798cbd006f1806f86abbbe74dc15179_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_00573e57b600756152a3de8f49b86ccd11ece917176b0ff235f02c5198f56fc2 = $this->env->getExtension("native_profiler");
        $__internal_00573e57b600756152a3de8f49b86ccd11ece917176b0ff235f02c5198f56fc2->enter($__internal_00573e57b600756152a3de8f49b86ccd11ece917176b0ff235f02c5198f56fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        // line 3
        echo "  ";
        ob_start();
        // line 4
        echo "    <div ";
        $this->displayBlock("rating_widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 6
        echo "      ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 7
        echo "      <div class=\"rating-well\">";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars"))));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 10
            echo "          <div id=\"rating_star_";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\" class=\"star\" data-value=\"";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_00573e57b600756152a3de8f49b86ccd11ece917176b0ff235f02c5198f56fc2->leave($__internal_00573e57b600756152a3de8f49b86ccd11ece917176b0ff235f02c5198f56fc2_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_932eacdf24e396075c1128302e0f8af3eeae7431e8d1cadbdbe031007b4f35f9 = $this->env->getExtension("native_profiler");
        $__internal_932eacdf24e396075c1128302e0f8af3eeae7431e8d1cadbdbe031007b4f35f9->enter($__internal_932eacdf24e396075c1128302e0f8af3eeae7431e8d1cadbdbe031007b4f35f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        // line 18
        ob_start();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 20
            echo " ";
            // line 21
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 23
$context["attrvalue"] === true)) {
                // line 24
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 25
$context["attrvalue"] === false)) {
                // line 26
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_932eacdf24e396075c1128302e0f8af3eeae7431e8d1cadbdbe031007b4f35f9->leave($__internal_932eacdf24e396075c1128302e0f8af3eeae7431e8d1cadbdbe031007b4f35f9_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle::rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  110 => 25,  105 => 24,  103 => 23,  98 => 22,  96 => 21,  94 => 20,  90 => 19,  88 => 18,  82 => 17,  72 => 12,  61 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  45 => 4,  42 => 3,  36 => 2,  29 => 17,  26 => 16,  24 => 2,);
    }
}
/* {# blackknight467/StarRatingBundle/Resources/views/rating.html.twig #}*/
/* {% block rating_widget %}*/
/*   {% spaceless %}*/
/*     <div {{ block('rating_widget_container_attributes') }}>*/
/*       {# type="number" doesn't work with floats #}*/
/*       {% set type = type|default('text') %}*/
/*       <div class="rating-well">*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% for star in 1..stars %}*/
/*           <div id="rating_star_{{ stars - star + 1 }}" class="star" data-value="{{ stars - star + 1 }}"></div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   {% endspaceless %}*/
/* {% endblock rating_widget %}*/
/* */
/* {% block rating_widget_container_attributes %}*/
/* {% spaceless %}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {% endspaceless %}*/
/* {% endblock rating_widget_container_attributes %}*/
