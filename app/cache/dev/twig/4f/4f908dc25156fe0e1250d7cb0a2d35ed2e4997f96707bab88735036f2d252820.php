<?php

/* SonataSeoBundle:Block:breadcrumb.html.twig */
class __TwigTemplate_66faa3e77f6300a7dadc1df00af598875f727eaf730c5ecc04f0b8a3752902d5 extends Twig_Template
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
        $__internal_d854170d164ae32ef516c5f4a490de75f2755765040dc79bf847e6a6b8041b8e = $this->env->getExtension("native_profiler");
        $__internal_d854170d164ae32ef516c5f4a490de75f2755765040dc79bf847e6a6b8041b8e->enter($__internal_d854170d164ae32ef516c5f4a490de75f2755765040dc79bf847e6a6b8041b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:breadcrumb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d854170d164ae32ef516c5f4a490de75f2755765040dc79bf847e6a6b8041b8e->leave($__internal_d854170d164ae32ef516c5f4a490de75f2755765040dc79bf847e6a6b8041b8e_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_66720ee44e8f5e9d51cf8fe94510a4e68463f22f6a316b8a8e49f67d1e2450b8 = $this->env->getExtension("native_profiler");
        $__internal_66720ee44e8f5e9d51cf8fe94510a4e68463f22f6a316b8a8e49f67d1e2450b8->enter($__internal_66720ee44e8f5e9d51cf8fe94510a4e68463f22f6a316b8a8e49f67d1e2450b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => "SonataSeoBundle"), "method")), "html", null, true);
        
        $__internal_66720ee44e8f5e9d51cf8fe94510a4e68463f22f6a316b8a8e49f67d1e2450b8->leave($__internal_66720ee44e8f5e9d51cf8fe94510a4e68463f22f6a316b8a8e49f67d1e2450b8_prof);

    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
        $__internal_4440d7dfb641181c55deadba1025d46a2bd8d75fd5db5be21334135fc2d0fe15 = $this->env->getExtension("native_profiler");
        $__internal_4440d7dfb641181c55deadba1025d46a2bd8d75fd5db5be21334135fc2d0fe15->enter($__internal_4440d7dfb641181c55deadba1025d46a2bd8d75fd5db5be21334135fc2d0fe15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_4440d7dfb641181c55deadba1025d46a2bd8d75fd5db5be21334135fc2d0fe15->leave($__internal_4440d7dfb641181c55deadba1025d46a2bd8d75fd5db5be21334135fc2d0fe15_prof);

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
