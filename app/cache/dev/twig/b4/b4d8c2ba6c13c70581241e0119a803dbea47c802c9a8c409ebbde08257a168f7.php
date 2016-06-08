<?php

/* SonataSeoBundle:Block:block_twitter_embed.html.twig */
class __TwigTemplate_63a2a73b651013c2c35c1bd1d32ad04439b43392a1a4316154bd2ef2f6f70b2e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_embed.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36f6c1b40a566b73d1044e3adb198e27e0a4f7b7c674ba0d77542b8644b5a502 = $this->env->getExtension("native_profiler");
        $__internal_36f6c1b40a566b73d1044e3adb198e27e0a4f7b7c674ba0d77542b8644b5a502->enter($__internal_36f6c1b40a566b73d1044e3adb198e27e0a4f7b7c674ba0d77542b8644b5a502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_twitter_embed.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f6c1b40a566b73d1044e3adb198e27e0a4f7b7c674ba0d77542b8644b5a502->leave($__internal_36f6c1b40a566b73d1044e3adb198e27e0a4f7b7c674ba0d77542b8644b5a502_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_a181323ebdaa8673e3736d17896b3af873b15b7e36c50f6c29c12ae7cfe6c098 = $this->env->getExtension("native_profiler");
        $__internal_a181323ebdaa8673e3736d17896b3af873b15b7e36c50f6c29c12ae7cfe6c098->enter($__internal_a181323ebdaa8673e3736d17896b3af873b15b7e36c50f6c29c12ae7cfe6c098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        ";
        echo (isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet"));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a181323ebdaa8673e3736d17896b3af873b15b7e36c50f6c29c12ae7cfe6c098->leave($__internal_a181323ebdaa8673e3736d17896b3af873b15b7e36c50f6c29c12ae7cfe6c098_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_twitter_embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/*     {% spaceless %}*/
/*         {{ tweet|raw }}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
