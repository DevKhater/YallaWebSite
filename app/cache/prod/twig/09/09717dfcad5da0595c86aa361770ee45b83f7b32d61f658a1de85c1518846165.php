<?php

/* SonataSeoBundle:Block:block_twitter_hashtag_button.html.twig */
class __TwigTemplate_737f358e25f75e3608b52e90a710ac4dcf0ff4c015048ca695afda2db3481bcb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_hashtag_button.html.twig", 11);
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
    ";
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "hashtag", array())) {
            // line 17
            echo "
        <a href=\"https://twitter.com/intent/tweet?button_hashtag=";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "hashtag", array()), "html", null, true);
            echo "\" class=\"twitter-hashtag-button\"
            ";
            // line 19
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "text", array())) {
                echo "data-text=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "text", array()), "html", null, true);
                echo "\"";
            }
            // line 20
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "recommend", array())) {
                echo "data-related=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "recommend", array()), "html", null, true);
                echo "\"";
            }
            // line 21
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "url", array())) {
                echo "data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "url", array()), "html", null, true);
                echo "\"";
            }
            // line 22
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "large_button", array())) {
                echo "data-size=\"large\"";
            }
            // line 23
            echo "            data-lang=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "language", array()), "html", null, true);
            echo "\"
            ";
            // line 24
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "opt_out", array())) {
                echo "data-dnt=\"true\"";
            }
            echo ">
            Tweet ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "hashtag", array()), "html", null, true);
            echo "
        </a>

    ";
        }
        // line 29
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_twitter_hashtag_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  80 => 25,  74 => 24,  69 => 23,  64 => 22,  57 => 21,  50 => 20,  44 => 19,  40 => 18,  37 => 17,  35 => 16,  32 => 15,  30 => 14,  27 => 13,  18 => 11,);
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
/*     {% if settings.hashtag %}*/
/* */
/*         <a href="https://twitter.com/intent/tweet?button_hashtag={{ settings.hashtag }}" class="twitter-hashtag-button"*/
/*             {% if settings.text %}data-text="{{ settings.text }}"{% endif %}*/
/*             {% if settings.recommend %}data-related="{{ settings.recommend }}"{% endif %}*/
/*             {% if settings.url %}data-url="{{ setting.url }}"{% endif %}*/
/*             {% if settings.large_button %}data-size="large"{% endif %}*/
/*             data-lang="{{ settings.language }}"*/
/*             {% if settings.opt_out %}data-dnt="true"{% endif %}>*/
/*             Tweet {{ settings.hashtag }}*/
/*         </a>*/
/* */
/*     {% endif %}*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
