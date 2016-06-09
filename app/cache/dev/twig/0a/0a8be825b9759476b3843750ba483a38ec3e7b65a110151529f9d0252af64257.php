<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2e69eb67e66721867292893bdeb3dd10b4666c8351306301c96a95cc4c72f7ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8e952b874950f382f57e635d9a7a416a3702a947fc461ab87ae9e3c942edbcc0 = $this->env->getExtension("native_profiler");
        $__internal_8e952b874950f382f57e635d9a7a416a3702a947fc461ab87ae9e3c942edbcc0->enter($__internal_8e952b874950f382f57e635d9a7a416a3702a947fc461ab87ae9e3c942edbcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e952b874950f382f57e635d9a7a416a3702a947fc461ab87ae9e3c942edbcc0->leave($__internal_8e952b874950f382f57e635d9a7a416a3702a947fc461ab87ae9e3c942edbcc0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b990b13de52ecce0ed1fb445e9ee5c135c73f209aaf9d200ebd536a662632982 = $this->env->getExtension("native_profiler");
        $__internal_b990b13de52ecce0ed1fb445e9ee5c135c73f209aaf9d200ebd536a662632982->enter($__internal_b990b13de52ecce0ed1fb445e9ee5c135c73f209aaf9d200ebd536a662632982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b990b13de52ecce0ed1fb445e9ee5c135c73f209aaf9d200ebd536a662632982->leave($__internal_b990b13de52ecce0ed1fb445e9ee5c135c73f209aaf9d200ebd536a662632982_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
