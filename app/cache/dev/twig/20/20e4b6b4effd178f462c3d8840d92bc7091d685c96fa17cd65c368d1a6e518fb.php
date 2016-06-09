<?php

/* SonataSeoBundle:Block:_pinterest_sdk.html.twig */
class __TwigTemplate_58d87b43331d1425ef17768992357a67d59a6ad23a80a81e9f8773fb92f5caf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pinterest_sdk' => array($this, 'block_pinterest_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9481b1f6ceee293da00bf7194ffa04e201bfebf83d11b0c495b9bc5487630de5 = $this->env->getExtension("native_profiler");
        $__internal_9481b1f6ceee293da00bf7194ffa04e201bfebf83d11b0c495b9bc5487630de5->enter($__internal_9481b1f6ceee293da00bf7194ffa04e201bfebf83d11b0c495b9bc5487630de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_pinterest_sdk.html.twig"));

        // line 11
        $this->displayBlock('pinterest_sdk', $context, $blocks);
        
        $__internal_9481b1f6ceee293da00bf7194ffa04e201bfebf83d11b0c495b9bc5487630de5->leave($__internal_9481b1f6ceee293da00bf7194ffa04e201bfebf83d11b0c495b9bc5487630de5_prof);

    }

    public function block_pinterest_sdk($context, array $blocks = array())
    {
        $__internal_bd97876e897ce3530aeba96939e2885a2b4b9afa513646534115864b14a5db79 = $this->env->getExtension("native_profiler");
        $__internal_bd97876e897ce3530aeba96939e2885a2b4b9afa513646534115864b14a5db79->enter($__internal_bd97876e897ce3530aeba96939e2885a2b4b9afa513646534115864b14a5db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pinterest_sdk"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "
        <script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd97876e897ce3530aeba96939e2885a2b4b9afa513646534115864b14a5db79->leave($__internal_bd97876e897ce3530aeba96939e2885a2b4b9afa513646534115864b14a5db79_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_pinterest_sdk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 12,  23 => 11,);
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
/* {% block pinterest_sdk %}*/
/*     {% spaceless %}*/
/* */
/*         <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
