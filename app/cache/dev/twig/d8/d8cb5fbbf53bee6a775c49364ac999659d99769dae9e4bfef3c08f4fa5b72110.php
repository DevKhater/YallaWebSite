<?php

/* SonataMediaBundle:Block:block_feature_media.html.twig */
class __TwigTemplate_d828a53fb2c2c659eac182c58a037bfadf3d66553f9d6226ce3f638b6382f1f5 extends Twig_Template
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
        $__internal_be3372ab05ac42a0400296708e0deb396edf4b63f3f00b0c8cde82b59fe20547 = $this->env->getExtension("native_profiler");
        $__internal_be3372ab05ac42a0400296708e0deb396edf4b63f3f00b0c8cde82b59fe20547->enter($__internal_be3372ab05ac42a0400296708e0deb396edf4b63f3f00b0c8cde82b59fe20547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_feature_media.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3372ab05ac42a0400296708e0deb396edf4b63f3f00b0c8cde82b59fe20547->leave($__internal_be3372ab05ac42a0400296708e0deb396edf4b63f3f00b0c8cde82b59fe20547_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_427e26395dacc998e4cfcd3ffc7977f9d48c4cf4e1a9502064790d7ef5b95a8a = $this->env->getExtension("native_profiler");
        $__internal_427e26395dacc998e4cfcd3ffc7977f9d48c4cf4e1a9502064790d7ef5b95a8a->enter($__internal_427e26395dacc998e4cfcd3ffc7977f9d48c4cf4e1a9502064790d7ef5b95a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_427e26395dacc998e4cfcd3ffc7977f9d48c4cf4e1a9502064790d7ef5b95a8a->leave($__internal_427e26395dacc998e4cfcd3ffc7977f9d48c4cf4e1a9502064790d7ef5b95a8a_prof);

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
