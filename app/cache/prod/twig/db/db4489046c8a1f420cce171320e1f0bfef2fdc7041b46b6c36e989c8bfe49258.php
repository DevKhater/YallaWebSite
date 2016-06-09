<?php

/* SonataSeoBundle:Block:breadcrumb.html.twig */
class __TwigTemplate_00c061491b81b1dedf6bd1caecd329da2e0db38f4944f7e5cd82c1c868140ed3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translation_domain", 1 => "SonataSeoBundle"), "method")), "html", null, true);
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
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
        return array (  43 => 18,  40 => 17,  38 => 16,  35 => 15,  29 => 13,  11 => 12,);
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
