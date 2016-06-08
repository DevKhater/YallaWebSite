<?php

/* SonataMediaBundle:Block:block_media.html.twig */
class __TwigTemplate_fd0dd89188c6843cfdb7f69cd1992f4d2f6ba7bfe876e09bcc3a83fa8447a3ce extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e9e5125f47704450ff236a4d954c00c35d2ceb269b94cd684b377b77bca13b6 = $this->env->getExtension("native_profiler");
        $__internal_1e9e5125f47704450ff236a4d954c00c35d2ceb269b94cd684b377b77bca13b6->enter($__internal_1e9e5125f47704450ff236a4d954c00c35d2ceb269b94cd684b377b77bca13b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_media.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9e5125f47704450ff236a4d954c00c35d2ceb269b94cd684b377b77bca13b6->leave($__internal_1e9e5125f47704450ff236a4d954c00c35d2ceb269b94cd684b377b77bca13b6_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_389edaa19958265dbbb5387220ab476a192b3519ee84a1c88765c53687084927 = $this->env->getExtension("native_profiler");
        $__internal_389edaa19958265dbbb5387220ab476a192b3519ee84a1c88765c53687084927->enter($__internal_389edaa19958265dbbb5387220ab476a192b3519ee84a1c88765c53687084927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 15
            echo "        <h3 class=\"sonata-media-block-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
    ";
        }
        // line 17
        echo "
    <div class=\"sonata-media-block-media-container\">
        ";
        // line 19
        if (((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()))) {
            // line 20
            echo "            ";
            echo $this->env->getExtension('sonata_media')->media((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()), array());
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
";
        
        $__internal_389edaa19958265dbbb5387220ab476a192b3519ee84a1c88765c53687084927->leave($__internal_389edaa19958265dbbb5387220ab476a192b3519ee84a1c88765c53687084927_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  62 => 23,  60 => 22,  57 => 21,  54 => 20,  52 => 19,  48 => 17,  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/*     {% if settings.title %}*/
/*         <h3 class="sonata-media-block-media-title">{{ settings.title }}</h3>*/
/*     {% endif %}*/
/* */
/*     <div class="sonata-media-block-media-container">*/
/*         {% if media and settings.format%}*/
/*             {% media media, settings.format %}*/
/*         {% else %}*/
/*             {# no media selected or format defined... #}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
