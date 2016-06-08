<?php

/* SonataSeoBundle:Block:block_facebook_share_button.html.twig */
class __TwigTemplate_1a20834574731a4b7471aa2d292a155567292707b57deaccc6f0946d8c2aaff9 extends Twig_Template
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
        $__internal_97836cbb2b6be16da6978b12d7dbfc0dd8080baa70d034a90421a55421b34025 = $this->env->getExtension("native_profiler");
        $__internal_97836cbb2b6be16da6978b12d7dbfc0dd8080baa70d034a90421a55421b34025->enter($__internal_97836cbb2b6be16da6978b12d7dbfc0dd8080baa70d034a90421a55421b34025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97836cbb2b6be16da6978b12d7dbfc0dd8080baa70d034a90421a55421b34025->leave($__internal_97836cbb2b6be16da6978b12d7dbfc0dd8080baa70d034a90421a55421b34025_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_a00da3282a3ebd9ee17835de3f0bef573a10679e8ece856e3964a1f81a57cba6 = $this->env->getExtension("native_profiler");
        $__internal_a00da3282a3ebd9ee17835de3f0bef573a10679e8ece856e3964a1f81a57cba6->enter($__internal_a00da3282a3ebd9ee17835de3f0bef573a10679e8ece856e3964a1f81a57cba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_a00da3282a3ebd9ee17835de3f0bef573a10679e8ece856e3964a1f81a57cba6->leave($__internal_a00da3282a3ebd9ee17835de3f0bef573a10679e8ece856e3964a1f81a57cba6_prof);

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
