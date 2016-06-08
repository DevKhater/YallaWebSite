<?php

/* SonataSeoBundle:Block:block_email_share_button.html.twig */
class __TwigTemplate_189926e2bf7f16e599ce441cdcbb5cafc7d4b71e54e65ed004298a331397f4f1 extends Twig_Template
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
        $__internal_5b444d1c62e26e17e8bc5a7b9d6dc9f8a49cf4f8536b563b84add3d437634c39 = $this->env->getExtension("native_profiler");
        $__internal_5b444d1c62e26e17e8bc5a7b9d6dc9f8a49cf4f8536b563b84add3d437634c39->enter($__internal_5b444d1c62e26e17e8bc5a7b9d6dc9f8a49cf4f8536b563b84add3d437634c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_email_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b444d1c62e26e17e8bc5a7b9d6dc9f8a49cf4f8536b563b84add3d437634c39->leave($__internal_5b444d1c62e26e17e8bc5a7b9d6dc9f8a49cf4f8536b563b84add3d437634c39_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_a610fb14bf59f29eac6b0a594f3d442490a5a8deaa8db1eba7ce71f3e38ba933 = $this->env->getExtension("native_profiler");
        $__internal_a610fb14bf59f29eac6b0a594f3d442490a5a8deaa8db1eba7ce71f3e38ba933->enter($__internal_a610fb14bf59f29eac6b0a594f3d442490a5a8deaa8db1eba7ce71f3e38ba933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_a610fb14bf59f29eac6b0a594f3d442490a5a8deaa8db1eba7ce71f3e38ba933->leave($__internal_a610fb14bf59f29eac6b0a594f3d442490a5a8deaa8db1eba7ce71f3e38ba933_prof);

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
