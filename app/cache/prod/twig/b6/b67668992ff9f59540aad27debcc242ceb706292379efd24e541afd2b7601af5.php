<?php

/* SonataSeoBundle:Block:block_twitter_share_button.html.twig */
class __TwigTemplate_f523f18d11a8abec61b384dc4c8a05f70adad862c6e931e5552aa4fa7b6abdde extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_share_button.html.twig", 11);
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
    <a href=\"https://twitter.com/share\" class=\"twitter-share-button\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "url", array())) {
            echo "data-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "text", array())) {
            echo "data-text=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "text", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "via", array())) {
            echo "data-via=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "via", array()), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "recommend", array())) {
            echo "data-related=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "recommend", array()), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "hashtag", array())) {
            echo "data-hashtags=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "hashtag", array()), "html", null, true);
            echo "\"";
        }
        // line 22
        echo "        ";
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_count", array())) {
            echo "data-count=\"none\"";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "large_button", array())) {
            echo "data-size=\"large\"";
        }
        // line 24
        echo "        data-lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "language", array()), "html", null, true);
        echo "\"
        ";
        // line 25
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "opt_out", array())) {
            echo "data-dnt=\"true\"";
        }
        echo ">
        Tweet
    </a>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_twitter_share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  80 => 24,  75 => 23,  70 => 22,  63 => 21,  56 => 20,  49 => 19,  42 => 18,  36 => 17,  32 => 15,  30 => 14,  27 => 13,  18 => 11,);
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
/*     <a href="https://twitter.com/share" class="twitter-share-button"*/
/*         {% if settings.url %}data-url="{{ settings.url }}"{% endif %}*/
/*         {% if settings.text %}data-text="{{ settings.text }}"{% endif %}*/
/*         {% if settings.via %}data-via="{{ settings.via }}"{% endif %}*/
/*         {% if settings.recommend %}data-related="{{ settings.recommend }}"{% endif %}*/
/*         {% if settings.hashtag %}data-hashtags="{{ settings.hashtag }}"{% endif %}*/
/*         {% if not settings.show_count %}data-count="none"{% endif %}*/
/*         {% if settings.large_button %}data-size="large"{% endif %}*/
/*         data-lang="{{ settings.language }}"*/
/*         {% if settings.opt_out %}data-dnt="true"{% endif %}>*/
/*         Tweet*/
/*     </a>*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
