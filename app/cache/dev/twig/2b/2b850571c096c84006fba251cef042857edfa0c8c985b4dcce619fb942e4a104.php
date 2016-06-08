<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_3ad19ce7337f6197f752db16b2f19332b65b861f0326b65c8a5b8c89bfe1fcd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aba00c194f34ad6db55718cfc5f9e50b0cbce12f4ac41dd75fc5d02a08ff0029 = $this->env->getExtension("native_profiler");
        $__internal_aba00c194f34ad6db55718cfc5f9e50b0cbce12f4ac41dd75fc5d02a08ff0029->enter($__internal_aba00c194f34ad6db55718cfc5f9e50b0cbce12f4ac41dd75fc5d02a08ff0029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aba00c194f34ad6db55718cfc5f9e50b0cbce12f4ac41dd75fc5d02a08ff0029->leave($__internal_aba00c194f34ad6db55718cfc5f9e50b0cbce12f4ac41dd75fc5d02a08ff0029_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e57d692cb5a500df570fe6718f9e6d75664ecfe2cc004823f16fd701818889f = $this->env->getExtension("native_profiler");
        $__internal_5e57d692cb5a500df570fe6718f9e6d75664ecfe2cc004823f16fd701818889f->enter($__internal_5e57d692cb5a500df570fe6718f9e6d75664ecfe2cc004823f16fd701818889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5e57d692cb5a500df570fe6718f9e6d75664ecfe2cc004823f16fd701818889f->leave($__internal_5e57d692cb5a500df570fe6718f9e6d75664ecfe2cc004823f16fd701818889f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
