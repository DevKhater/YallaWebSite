<?php

/* SonataSeoBundle:Block:block_twitter_mention_button.html.twig */
class __TwigTemplate_c15936a8ed48d6ae2e250615c45a2a07e88a1931c80c95147924492a773272e4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_mention_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56d8750bf02212eee53a747aadee259291677d112a6bf358f85c3ef77593b1c4 = $this->env->getExtension("native_profiler");
        $__internal_56d8750bf02212eee53a747aadee259291677d112a6bf358f85c3ef77593b1c4->enter($__internal_56d8750bf02212eee53a747aadee259291677d112a6bf358f85c3ef77593b1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_twitter_mention_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d8750bf02212eee53a747aadee259291677d112a6bf358f85c3ef77593b1c4->leave($__internal_56d8750bf02212eee53a747aadee259291677d112a6bf358f85c3ef77593b1c4_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_fac307541d86d817e1bf602fc300a620fa26e60f2c1356d60ad69178e81e62e2 = $this->env->getExtension("native_profiler");
        $__internal_fac307541d86d817e1bf602fc300a620fa26e60f2c1356d60ad69178e81e62e2->enter($__internal_fac307541d86d817e1bf602fc300a620fa26e60f2c1356d60ad69178e81e62e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    ";
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array())) {
            // line 17
            echo "
        <a href=\"https://twitter.com/intent/tweet?screen_name=";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array()), "html", null, true);
            echo "\" class=\"twitter-mention-button\"
            data-related=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array()), "html", null, true);
            echo "\"
            ";
            // line 20
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array())) {
                echo "data-text=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), "html", null, true);
                echo "\"";
            }
            // line 21
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array())) {
                echo "data-related=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array()), "html", null, true);
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
            Tweet to @";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array()), "html", null, true);
            echo "
        </a>

    ";
        }
        // line 29
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fac307541d86d817e1bf602fc300a620fa26e60f2c1356d60ad69178e81e62e2->leave($__internal_fac307541d86d817e1bf602fc300a620fa26e60f2c1356d60ad69178e81e62e2_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_twitter_mention_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  86 => 25,  80 => 24,  75 => 23,  70 => 22,  63 => 21,  57 => 20,  53 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/*         <a href="https://twitter.com/intent/tweet?screen_name={{ settings.user }}" class="twitter-mention-button"*/
/*             data-related="{{ settings.recommend }}"*/
/*             {% if settings.text %}data-text="{{ settings.text }}"{% endif %}*/
/*             {% if settings.recommend %}data-related="{{ settings.recommend }}"{% endif %}*/
/*             {% if settings.large_button %}data-size="large"{% endif %}*/
/*             data-lang="{{ settings.language }}"*/
/*             {% if settings.opt_out %}data-dnt="true"{% endif %}>*/
/*             Tweet to @{{ settings.user }}*/
/*         </a>*/
/* */
/*     {% endif %}*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
