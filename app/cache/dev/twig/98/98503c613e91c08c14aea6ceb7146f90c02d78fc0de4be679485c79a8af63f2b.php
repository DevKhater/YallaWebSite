<?php

/* SonataSeoBundle:Block:block_twitter_embed.html.twig */
class __TwigTemplate_5cda6e266b792e96898ea9fea50552fb501d7f3afbaf5f75575fd2fe6420db60 extends Twig_Template
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
        $__internal_233361773bed4f93e55f98abfa2be49c26ef355f909488c4ce1f5991a1ec675f = $this->env->getExtension("native_profiler");
        $__internal_233361773bed4f93e55f98abfa2be49c26ef355f909488c4ce1f5991a1ec675f->enter($__internal_233361773bed4f93e55f98abfa2be49c26ef355f909488c4ce1f5991a1ec675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_twitter_embed.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_233361773bed4f93e55f98abfa2be49c26ef355f909488c4ce1f5991a1ec675f->leave($__internal_233361773bed4f93e55f98abfa2be49c26ef355f909488c4ce1f5991a1ec675f_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_4612a2018d9602ca308451601c852f0256114341562023611fad9e86a55b9dbf = $this->env->getExtension("native_profiler");
        $__internal_4612a2018d9602ca308451601c852f0256114341562023611fad9e86a55b9dbf->enter($__internal_4612a2018d9602ca308451601c852f0256114341562023611fad9e86a55b9dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        ";
        echo (isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet"));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4612a2018d9602ca308451601c852f0256114341562023611fad9e86a55b9dbf->leave($__internal_4612a2018d9602ca308451601c852f0256114341562023611fad9e86a55b9dbf_prof);

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
