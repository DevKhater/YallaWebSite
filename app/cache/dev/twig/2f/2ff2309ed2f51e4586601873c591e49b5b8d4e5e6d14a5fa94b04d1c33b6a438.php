<?php

/* SonataMediaBundle:Block:block_feature_media.html.twig */
class __TwigTemplate_9ffd5623cf97b874180851c3020e0fff045ae1526afd3fa2eb4639e9442d6845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_feature_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6662d1a19341a0e1e47c9773915004da8719aa05156f6c80835ae3ce290ff7e = $this->env->getExtension("native_profiler");
        $__internal_f6662d1a19341a0e1e47c9773915004da8719aa05156f6c80835ae3ce290ff7e->enter($__internal_f6662d1a19341a0e1e47c9773915004da8719aa05156f6c80835ae3ce290ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_feature_media.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6662d1a19341a0e1e47c9773915004da8719aa05156f6c80835ae3ce290ff7e->leave($__internal_f6662d1a19341a0e1e47c9773915004da8719aa05156f6c80835ae3ce290ff7e_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_f460758717bcd6a3c4e466dd3053e768d6fa642a881876a8d3791afe2ddcba1d = $this->env->getExtension("native_profiler");
        $__internal_f460758717bcd6a3c4e466dd3053e768d6fa642a881876a8d3791afe2ddcba1d->enter($__internal_f460758717bcd6a3c4e466dd3053e768d6fa642a881876a8d3791afe2ddcba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "
    <div class=\"sonata-media-block-feature-media-container\">

        <div class=\"sonata-media-block-feature-media-container-";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "orientation", array()), "html", null, true);
        echo "\">
            ";
        // line 18
        if (((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()))) {
            // line 19
            echo "                ";
            echo $this->env->getExtension('sonata_media')->media((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()), array());
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                ";
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>

        ";
        // line 25
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 26
            echo "            <h3 class=\"sonata-media-block-feature-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-media-block-feature-media-content\">
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array()), "html", null, true);
        echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
        
        $__internal_f460758717bcd6a3c4e466dd3053e768d6fa642a881876a8d3791afe2ddcba1d->leave($__internal_f460758717bcd6a3c4e466dd3053e768d6fa642a881876a8d3791afe2ddcba1d_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_feature_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  73 => 28,  67 => 26,  65 => 25,  61 => 23,  58 => 22,  56 => 21,  53 => 20,  50 => 19,  48 => 18,  44 => 17,  39 => 14,  33 => 13,  18 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/* */
/*     <div class="sonata-media-block-feature-media-container">*/
/* */
/*         <div class="sonata-media-block-feature-media-container-{{ settings.orientation }}">*/
/*             {% if media and settings.format%}*/
/*                 {% media media, settings.format %}*/
/*             {% else %}*/
/*                 {# no media selected or format defined... #}*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if settings.title %}*/
/*             <h3 class="sonata-media-block-feature-media-title">{{ settings.title }}</h3>*/
/*         {% endif %}*/
/* */
/*         <div class="sonata-media-block-feature-media-content">*/
/*             {{ settings.content }}*/
/*         </div>*/
/* */
/*         <div style="clear: both"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
