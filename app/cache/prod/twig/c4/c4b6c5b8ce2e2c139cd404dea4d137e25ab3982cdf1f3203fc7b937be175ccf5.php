<?php

/* SonataSeoBundle:Block:block_facebook_share_button.html.twig */
class __TwigTemplate_07a5f6f34ec6dd81c1d7a230f229eb0ed410e64a563ac13443ab01924430e522 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_share_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-share-button\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "        data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout", array()), "html", null, true);
        echo "\">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  49 => 19,  42 => 18,  36 => 17,  32 => 15,  30 => 14,  27 => 13,  18 => 11,);
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
