<?php

/* SonataSeoBundle:Block:block_facebook_like_button.html.twig */
class __TwigTemplate_11eb0ff5a24f2d771b1e77bd8380c54729d9c84d2e03db7008222e2633619adb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_like_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2da3b6d82871b0c0a947787ea99a3f9cb70a656ded67c9a2ef287ab2af4215f5 = $this->env->getExtension("native_profiler");
        $__internal_2da3b6d82871b0c0a947787ea99a3f9cb70a656ded67c9a2ef287ab2af4215f5->enter($__internal_2da3b6d82871b0c0a947787ea99a3f9cb70a656ded67c9a2ef287ab2af4215f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_like_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2da3b6d82871b0c0a947787ea99a3f9cb70a656ded67c9a2ef287ab2af4215f5->leave($__internal_2da3b6d82871b0c0a947787ea99a3f9cb70a656ded67c9a2ef287ab2af4215f5_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_385295be7739e0125b2a2776f2ae771be5323ed267956bf901e61d73fc85c6e9 = $this->env->getExtension("native_profiler");
        $__internal_385295be7739e0125b2a2776f2ae771be5323ed267956bf901e61d73fc85c6e9->enter($__internal_385295be7739e0125b2a2776f2ae771be5323ed267956bf901e61d73fc85c6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-like\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        data-layout=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "layout", array()), "html", null, true);
        echo "\"
        data-action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "action", array()), "html", null, true);
        echo "\"
        data-show-faces=\"";
        // line 20
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "show_faces", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
        data-share=\"";
        // line 21
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "share", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
        ";
        // line 22
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "        data-colorscheme=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "colorscheme", array()), "html", null, true);
        echo "\">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_385295be7739e0125b2a2776f2ae771be5323ed267956bf901e61d73fc85c6e9->leave($__internal_385295be7739e0125b2a2776f2ae771be5323ed267956bf901e61d73fc85c6e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_facebook_like_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  76 => 22,  68 => 21,  60 => 20,  56 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/* {% spaceless %}*/
/* */
/*     <div class="fb-like"*/
/*         {% if settings.url %}data-href="{{ settings.url }}"{% endif %}*/
/*         data-layout="{{ settings.layout }}"*/
/*         data-action="{{ settings.action }}"*/
/*         data-show-faces="{% if settings.show_faces %}true{% else %}false{% endif %}"*/
/*         data-share="{% if settings.share %}true{% else %}false{% endif %}"*/
/*         {% if settings.width %}data-width="{{ settings.width }}"{% endif %}*/
/*         data-colorscheme="{{ settings.colorscheme }}">*/
/*     </div>*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
