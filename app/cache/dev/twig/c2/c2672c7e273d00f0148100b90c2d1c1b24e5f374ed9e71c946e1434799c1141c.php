<?php

/* SonataSeoBundle:Block:block_facebook_like_box.html.twig */
class __TwigTemplate_9c3ddad702860ec189dc8d2dc12d47007839c6015566fa538f450c9093d3c2b9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_like_box.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9911084a36926e9608f6fcb3b09d1a62e5f0ea262eaff8f2d50d3655aec7849e = $this->env->getExtension("native_profiler");
        $__internal_9911084a36926e9608f6fcb3b09d1a62e5f0ea262eaff8f2d50d3655aec7849e->enter($__internal_9911084a36926e9608f6fcb3b09d1a62e5f0ea262eaff8f2d50d3655aec7849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_like_box.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9911084a36926e9608f6fcb3b09d1a62e5f0ea262eaff8f2d50d3655aec7849e->leave($__internal_9911084a36926e9608f6fcb3b09d1a62e5f0ea262eaff8f2d50d3655aec7849e_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_befebd5ce5ec34a82f0ad0cda407f8a0636f1c3635e04d80640d18b9e693ea62 = $this->env->getExtension("native_profiler");
        $__internal_befebd5ce5ec34a82f0ad0cda407f8a0636f1c3635e04d80640d18b9e693ea62->enter($__internal_befebd5ce5ec34a82f0ad0cda407f8a0636f1c3635e04d80640d18b9e693ea62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-like-box\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        data-show-faces=\"";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "show_faces", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
        data-header=\"";
        // line 19
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "show_header", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
        data-stream=\"";
        // line 20
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "show_posts", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
        data-show-border=\"";
        // line 21
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "show_border", array())) {
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
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "height", array())) {
            echo "data-height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "height", array()), "html", null, true);
            echo "\"";
        }
        // line 24
        echo "        data-colorscheme=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "colorscheme", array()), "html", null, true);
        echo "\">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_befebd5ce5ec34a82f0ad0cda407f8a0636f1c3635e04d80640d18b9e693ea62->leave($__internal_befebd5ce5ec34a82f0ad0cda407f8a0636f1c3635e04d80640d18b9e693ea62_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_facebook_like_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  90 => 23,  84 => 22,  76 => 21,  68 => 20,  60 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/*     <div class="fb-like-box"*/
/*         {% if settings.url %}data-href="{{ settings.url }}"{% endif %}*/
/*         data-show-faces="{% if settings.show_faces %}true{% else %}false{% endif %}"*/
/*         data-header="{% if settings.show_header %}true{% else %}false{% endif %}"*/
/*         data-stream="{% if settings.show_posts %}true{% else %}false{% endif %}"*/
/*         data-show-border="{% if settings.show_border %}true{% else %}false{% endif %}"*/
/*         {% if settings.width %}data-width="{{ settings.width }}"{% endif %}*/
/*         {% if settings.height %}data-height="{{ settings.height }}"{% endif %}*/
/*         data-colorscheme="{{ settings.colorscheme }}">*/
/*     </div>*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
