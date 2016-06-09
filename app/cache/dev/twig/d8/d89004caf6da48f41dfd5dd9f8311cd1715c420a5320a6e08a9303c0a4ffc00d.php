<?php

/* SonataSeoBundle:Block:breadcrumb.html.twig */
class __TwigTemplate_6ab36552bcc2855d81f684835d509a8129435b4604498d9a7f4de9e4632a9220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu_ordered.html.twig", "SonataSeoBundle:Block:breadcrumb.html.twig", 12);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_ordered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d791e6c22c8f4dda0ace105ff378735553b8e758f614915afe27fe50fb0409b7 = $this->env->getExtension("native_profiler");
        $__internal_d791e6c22c8f4dda0ace105ff378735553b8e758f614915afe27fe50fb0409b7->enter($__internal_d791e6c22c8f4dda0ace105ff378735553b8e758f614915afe27fe50fb0409b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:breadcrumb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d791e6c22c8f4dda0ace105ff378735553b8e758f614915afe27fe50fb0409b7->leave($__internal_d791e6c22c8f4dda0ace105ff378735553b8e758f614915afe27fe50fb0409b7_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_f513abf309f561b9933c2a4e46d22490cd86edc387fb2f5564aa184523699156 = $this->env->getExtension("native_profiler");
        $__internal_f513abf309f561b9933c2a4e46d22490cd86edc387fb2f5564aa184523699156->enter($__internal_f513abf309f561b9933c2a4e46d22490cd86edc387fb2f5564aa184523699156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => "SonataSeoBundle"), "method")), "html", null, true);
        
        $__internal_f513abf309f561b9933c2a4e46d22490cd86edc387fb2f5564aa184523699156->leave($__internal_f513abf309f561b9933c2a4e46d22490cd86edc387fb2f5564aa184523699156_prof);

    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
        $__internal_524421de9bdbf468ec70829b271c5881acc896f4a71ea0e7c3349aba60312156 = $this->env->getExtension("native_profiler");
        $__internal_524421de9bdbf468ec70829b271c5881acc896f4a71ea0e7c3349aba60312156->enter($__internal_524421de9bdbf468ec70829b271c5881acc896f4a71ea0e7c3349aba60312156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 16
        ob_start();
        // line 17
        echo "    <div class=\"sonata_breadcrumb\">
        ";
        // line 18
        $this->displayParentBlock("list", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_524421de9bdbf468ec70829b271c5881acc896f4a71ea0e7c3349aba60312156->leave($__internal_524421de9bdbf468ec70829b271c5881acc896f4a71ea0e7c3349aba60312156_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  55 => 17,  53 => 16,  47 => 15,  35 => 13,  11 => 12,);
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
/* */
/* {% extends 'knp_menu_ordered.html.twig' %}*/
/* {% block label %}{{ item.label|trans(item.getExtra('translation_params', {}), item.getExtra('translation_domain', 'SonataSeoBundle')) }}{% endblock %}*/
/* */
/* {% block list %}*/
/* {% spaceless %}*/
/*     <div class="sonata_breadcrumb">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
