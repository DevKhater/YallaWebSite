<?php

/* SonataSeoBundle:Block:block_email_share_button.html.twig */
class __TwigTemplate_4395be07579b32d6be7f580f0616f658c4278be2d0de6d24adddcbf51e7b0c2e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_email_share_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_012728b54aa5798cd2871814cdd83e22461138ec9f5805fcf283ff9d0c8414cc = $this->env->getExtension("native_profiler");
        $__internal_012728b54aa5798cd2871814cdd83e22461138ec9f5805fcf283ff9d0c8414cc->enter($__internal_012728b54aa5798cd2871814cdd83e22461138ec9f5805fcf283ff9d0c8414cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_email_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_012728b54aa5798cd2871814cdd83e22461138ec9f5805fcf283ff9d0c8414cc->leave($__internal_012728b54aa5798cd2871814cdd83e22461138ec9f5805fcf283ff9d0c8414cc_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_45dce06dffe2396f4c25a3b88b286ceda5c2ec91a0997075db690ab28169a224 = $this->env->getExtension("native_profiler");
        $__internal_45dce06dffe2396f4c25a3b88b286ceda5c2ec91a0997075db690ab28169a224->enter($__internal_45dce06dffe2396f4c25a3b88b286ceda5c2ec91a0997075db690ab28169a224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
        <a href=\"mailto:?subject=";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "subject", array()), "html", null, true);
        echo "&body=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "body", array()), "html", null, true);
        echo "\">
            ";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_seo_share_by_email", array(), "SonataSeoBundle");
        // line 18
        echo "        </a>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_45dce06dffe2396f4c25a3b88b286ceda5c2ec91a0997075db690ab28169a224->leave($__internal_45dce06dffe2396f4c25a3b88b286ceda5c2ec91a0997075db690ab28169a224_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_email_share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  51 => 17,  45 => 16,  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
/* */
/*         <a href="mailto:?subject={{ settings.subject }}&body={{ settings.body }}">*/
/*             {% trans from 'SonataSeoBundle' %}sonata_seo_share_by_email{% endtrans %}*/
/*         </a>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
