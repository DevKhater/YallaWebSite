<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f8a2f3b42575b052ec050a5b9ac4bb6954c2a134498a1d2f527f73eb46f2ac4c extends Twig_Template
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
        $__internal_cc2f176a5c68f62e1399b46d66952f4fdabb4c5a80503503927fb8eeb73b1900 = $this->env->getExtension("native_profiler");
        $__internal_cc2f176a5c68f62e1399b46d66952f4fdabb4c5a80503503927fb8eeb73b1900->enter($__internal_cc2f176a5c68f62e1399b46d66952f4fdabb4c5a80503503927fb8eeb73b1900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_cc2f176a5c68f62e1399b46d66952f4fdabb4c5a80503503927fb8eeb73b1900->leave($__internal_cc2f176a5c68f62e1399b46d66952f4fdabb4c5a80503503927fb8eeb73b1900_prof);

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
