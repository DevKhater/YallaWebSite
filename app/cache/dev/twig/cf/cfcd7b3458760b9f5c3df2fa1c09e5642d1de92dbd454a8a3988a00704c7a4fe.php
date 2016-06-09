<?php

/* SonataSeoBundle:Block:block_facebook_send_button.html.twig */
class __TwigTemplate_b7569ba9f18d09cb23c041f87200a0856c3d534dfe9cea45f776eddbec6d78fb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_send_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a60eb5287f1c2abf8cff555a526f2dae4ea0e20d3ca9c12071ebb61f133905d = $this->env->getExtension("native_profiler");
        $__internal_0a60eb5287f1c2abf8cff555a526f2dae4ea0e20d3ca9c12071ebb61f133905d->enter($__internal_0a60eb5287f1c2abf8cff555a526f2dae4ea0e20d3ca9c12071ebb61f133905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_send_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a60eb5287f1c2abf8cff555a526f2dae4ea0e20d3ca9c12071ebb61f133905d->leave($__internal_0a60eb5287f1c2abf8cff555a526f2dae4ea0e20d3ca9c12071ebb61f133905d_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_71c9f07eb1539a986f268bc396e978bb945a04c5fea9ce1636255a830487483a = $this->env->getExtension("native_profiler");
        $__internal_71c9f07eb1539a986f268bc396e978bb945a04c5fea9ce1636255a830487483a->enter($__internal_71c9f07eb1539a986f268bc396e978bb945a04c5fea9ce1636255a830487483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-send\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        data-colorscheme=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "colorscheme", array()), "html", null, true);
        echo "\"
        ";
        // line 19
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "height", array())) {
            echo "data-height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "height", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_71c9f07eb1539a986f268bc396e978bb945a04c5fea9ce1636255a830487483a->leave($__internal_71c9f07eb1539a986f268bc396e978bb945a04c5fea9ce1636255a830487483a_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_facebook_send_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  56 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/*     <div class="fb-send"*/
/*         {% if settings.url %}data-href="{{ settings.url }}"{% endif %}*/
/*         data-colorscheme="{{ settings.colorscheme }}"*/
/*         {% if settings.width %}data-width="{{ settings.width }}"{% endif %}*/
/*         {% if settings.height %}data-height="{{ settings.height }}"{% endif %}>*/
/*     </div>*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
