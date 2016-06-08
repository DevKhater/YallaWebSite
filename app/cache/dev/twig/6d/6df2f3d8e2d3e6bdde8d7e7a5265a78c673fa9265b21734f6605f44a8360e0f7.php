<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ae5d12628fda78acb45384010deae4c4d6b406417f637bc1a418c96b5262b0b2 extends Twig_Template
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
        $__internal_7fb83e78ee16aad70aabe56417debf760868851f42acf4f3d61577fffd1eb53c = $this->env->getExtension("native_profiler");
        $__internal_7fb83e78ee16aad70aabe56417debf760868851f42acf4f3d61577fffd1eb53c->enter($__internal_7fb83e78ee16aad70aabe56417debf760868851f42acf4f3d61577fffd1eb53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p>: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "displayName", array()), "html", null, true);
        echo "</p>
    
</div>
";
        
        $__internal_7fb83e78ee16aad70aabe56417debf760868851f42acf4f3d61577fffd1eb53c->leave($__internal_7fb83e78ee16aad70aabe56417debf760868851f42acf4f3d61577fffd1eb53c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/*     <p>: {{ user.displayName }}</p>*/
/*     */
/* </div>*/
/* */
