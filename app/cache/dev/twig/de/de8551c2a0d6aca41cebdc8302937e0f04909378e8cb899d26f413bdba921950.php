<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d2fb47aed1e4162ca4187a9b18273c17e3a9a50c157bc229aedb1e39a95974d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76662cd87186d1d9dec7779c8583cc566c7a59c6169554ebcb9c1c4f2aa36d92 = $this->env->getExtension("native_profiler");
        $__internal_76662cd87186d1d9dec7779c8583cc566c7a59c6169554ebcb9c1c4f2aa36d92->enter($__internal_76662cd87186d1d9dec7779c8583cc566c7a59c6169554ebcb9c1c4f2aa36d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_76662cd87186d1d9dec7779c8583cc566c7a59c6169554ebcb9c1c4f2aa36d92->leave($__internal_76662cd87186d1d9dec7779c8583cc566c7a59c6169554ebcb9c1c4f2aa36d92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */