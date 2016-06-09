<?php

/* SonataSeoBundle:Block:block_facebook_share_button.html.twig */
class __TwigTemplate_80278167242c290bd3f40fd4e50ccf61ac8d6c519dffbdbdec39986f9ae84e47 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_share_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29ff7b7d03f6d7c60d3e14484ee6c98f867f58d74c91331a79d0b404da87365d = $this->env->getExtension("native_profiler");
        $__internal_29ff7b7d03f6d7c60d3e14484ee6c98f867f58d74c91331a79d0b404da87365d->enter($__internal_29ff7b7d03f6d7c60d3e14484ee6c98f867f58d74c91331a79d0b404da87365d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ff7b7d03f6d7c60d3e14484ee6c98f867f58d74c91331a79d0b404da87365d->leave($__internal_29ff7b7d03f6d7c60d3e14484ee6c98f867f58d74c91331a79d0b404da87365d_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_774855e6a9ea2d16c605c5f627468d987a989c788bb27d6e5bb3cd323c40c855 = $this->env->getExtension("native_profiler");
        $__internal_774855e6a9ea2d16c605c5f627468d987a989c788bb27d6e5bb3cd323c40c855->enter($__internal_774855e6a9ea2d16c605c5f627468d987a989c788bb27d6e5bb3cd323c40c855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-share-button\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "        data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "layout", array()), "html", null, true);
        echo "\">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_774855e6a9ea2d16c605c5f627468d987a989c788bb27d6e5bb3cd323c40c855->leave($__internal_774855e6a9ea2d16c605c5f627468d987a989c788bb27d6e5bb3cd323c40c855_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_facebook_share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/*     <div class="fb-share-button"*/
/*         {% if settings.url %}data-href="{{ settings.url }}"{% endif %}*/
/*         {% if settings.width %}data-width="{{ settings.width }}"{% endif %}*/
/*         data-type="{{ settings.layout }}">*/
/*     </div>*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
