<?php

/* SonataSeoBundle:Block:block_pinterest_pin_button.html.twig */
class __TwigTemplate_eb0b855070ad05317e001b9b968dfbedde0c74b542b999c95bb01b89f1ea7ddc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_pinterest_pin_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaffb71789b13782b4b6d10746a15b974290b8e8887ffefa59f1dce19d5dcb9b = $this->env->getExtension("native_profiler");
        $__internal_eaffb71789b13782b4b6d10746a15b974290b8e8887ffefa59f1dce19d5dcb9b->enter($__internal_eaffb71789b13782b4b6d10746a15b974290b8e8887ffefa59f1dce19d5dcb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_pinterest_pin_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaffb71789b13782b4b6d10746a15b974290b8e8887ffefa59f1dce19d5dcb9b->leave($__internal_eaffb71789b13782b4b6d10746a15b974290b8e8887ffefa59f1dce19d5dcb9b_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_3eb602a2015627c8f001bf59b8d43cb3ec3c6e3de44f7ad64fa881933aeef243 = $this->env->getExtension("native_profiler");
        $__internal_3eb602a2015627c8f001bf59b8d43cb3ec3c6e3de44f7ad64fa881933aeef243->enter($__internal_3eb602a2015627c8f001bf59b8d43cb3ec3c6e3de44f7ad64fa881933aeef243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
        <a href=\"//www.pinterest.com/pin/create/button/?url=";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
        echo "&media=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "image", array()), "html", null, true);
        echo "&description=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "description", array()), "html", null, true);
        echo "\"
           data-pin-do=\"buttonPin\"
           ";
        // line 18
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "size", array())) {
            echo "data-pin-height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "size", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "           ";
        if (("round" == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "shape", array()))) {
            echo "data-pin-shape=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "shape", array()), "html", null, true);
            echo "\"";
        }
        echo ">
            <img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png\" />
        </a>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3eb602a2015627c8f001bf59b8d43cb3ec3c6e3de44f7ad64fa881933aeef243->leave($__internal_3eb602a2015627c8f001bf59b8d43cb3ec3c6e3de44f7ad64fa881933aeef243_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_pinterest_pin_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 18,  45 => 16,  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/*     {% spaceless %}*/
/* */
/*         <a href="//www.pinterest.com/pin/create/button/?url={{ settings.url }}&media={{ settings.image }}&description={{ settings.description }}"*/
/*            data-pin-do="buttonPin"*/
/*            {% if settings.size %}data-pin-height="{{ settings.size }}"{% endif %}*/
/*            {% if 'round' == settings.shape %}data-pin-shape="{{ settings.shape }}"{% endif %}>*/
/*             <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />*/
/*         </a>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
