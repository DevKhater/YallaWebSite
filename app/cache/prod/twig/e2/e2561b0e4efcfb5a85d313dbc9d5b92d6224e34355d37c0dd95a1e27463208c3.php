<?php

/* SonataSeoBundle:Block:block_twitter_follow_button.html.twig */
class __TwigTemplate_954c1ea8b8449358c39ca9e8f15c3c8ff000d07fa04d27b905d662ccb479b638 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_follow_button.html.twig", 11);
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
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "user", array())) {
            // line 17
            echo "
        <a href=\"https://twitter.com/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "user", array()), "html", null, true);
            echo "\" class=\"twitter-follow-button\"
            ";
            // line 19
            if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_username", array())) {
                echo "data-show-screen-name=\"false\"";
            }
            // line 20
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "large_button", array())) {
                echo "data-size=\"large\"";
            }
            // line 21
            echo "            data-lang=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "language", array()), "html", null, true);
            echo "\"
            ";
            // line 22
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "opt_out", array())) {
                echo "data-dnt=\"true\"";
            }
            echo ">
            Follow @";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "user", array()), "html", null, true);
            echo "
        </a>

    ";
        }
        // line 27
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_twitter_follow_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  64 => 23,  58 => 22,  53 => 21,  48 => 20,  44 => 19,  40 => 18,  37 => 17,  35 => 16,  32 => 15,  30 => 14,  27 => 13,  18 => 11,);
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
/*     {% if settings.user %}*/
/* */
/*         <a href="https://twitter.com/{{ settings.user }}" class="twitter-follow-button"*/
/*             {% if not settings.show_username %}data-show-screen-name="false"{% endif %}*/
/*             {% if settings.large_button %}data-size="large"{% endif %}*/
/*             data-lang="{{ settings.language }}"*/
/*             {% if settings.opt_out %}data-dnt="true"{% endif %}>*/
/*             Follow @{{ settings.user }}*/
/*         </a>*/
/* */
/*     {% endif %}*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
