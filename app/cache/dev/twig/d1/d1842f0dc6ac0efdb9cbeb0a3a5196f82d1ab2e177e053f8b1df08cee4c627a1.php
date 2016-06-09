<?php

/* SonataSeoBundle:Block:block_twitter_hashtag_button.html.twig */
class __TwigTemplate_495da59aae2dc0e315fc88211b5978fcb38ea8fdf556a352672cc2e87f45be5b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_hashtag_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f016c40dbb840c41a621f591bd4463eaa04b19f29c84429d153f17da14869f42 = $this->env->getExtension("native_profiler");
        $__internal_f016c40dbb840c41a621f591bd4463eaa04b19f29c84429d153f17da14869f42->enter($__internal_f016c40dbb840c41a621f591bd4463eaa04b19f29c84429d153f17da14869f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_twitter_hashtag_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f016c40dbb840c41a621f591bd4463eaa04b19f29c84429d153f17da14869f42->leave($__internal_f016c40dbb840c41a621f591bd4463eaa04b19f29c84429d153f17da14869f42_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_e4763ff030259b54c348938ca82928d4a35bdec2807bad71dfeb3a297dbaddfa = $this->env->getExtension("native_profiler");
        $__internal_e4763ff030259b54c348938ca82928d4a35bdec2807bad71dfeb3a297dbaddfa->enter($__internal_e4763ff030259b54c348938ca82928d4a35bdec2807bad71dfeb3a297dbaddfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    ";
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "hashtag", array())) {
            // line 17
            echo "
        <a href=\"https://twitter.com/intent/tweet?button_hashtag=";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "hashtag", array()), "html", null, true);
            echo "\" class=\"twitter-hashtag-button\"
            ";
            // line 19
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array())) {
                echo "data-text=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), "html", null, true);
                echo "\"";
            }
            // line 20
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array())) {
                echo "data-related=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array()), "html", null, true);
                echo "\"";
            }
            // line 21
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
                echo "data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "url", array()), "html", null, true);
                echo "\"";
            }
            // line 22
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "large_button", array())) {
                echo "data-size=\"large\"";
            }
            // line 23
            echo "            data-lang=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "language", array()), "html", null, true);
            echo "\"
            ";
            // line 24
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "opt_out", array())) {
                echo "data-dnt=\"true\"";
            }
            echo ">
            Tweet ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "hashtag", array()), "html", null, true);
            echo "
        </a>

    ";
        }
        // line 29
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e4763ff030259b54c348938ca82928d4a35bdec2807bad71dfeb3a297dbaddfa->leave($__internal_e4763ff030259b54c348938ca82928d4a35bdec2807bad71dfeb3a297dbaddfa_prof);

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
        return array (  96 => 29,  89 => 25,  83 => 24,  78 => 23,  73 => 22,  66 => 21,  59 => 20,  53 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
