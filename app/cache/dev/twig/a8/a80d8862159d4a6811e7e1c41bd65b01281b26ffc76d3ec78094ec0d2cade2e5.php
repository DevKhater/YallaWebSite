<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ef3612e0d7d23d93b50cdb0df7c7784ee799a85cf8f0fad1d456f4a1c5764148 extends Twig_Template
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
        $__internal_63baeb6f904d04e8159cfa94940aa9aaef076b19ba3c8dea7d8e86f7ad00fd2a = $this->env->getExtension("native_profiler");
        $__internal_63baeb6f904d04e8159cfa94940aa9aaef076b19ba3c8dea7d8e86f7ad00fd2a->enter($__internal_63baeb6f904d04e8159cfa94940aa9aaef076b19ba3c8dea7d8e86f7ad00fd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63baeb6f904d04e8159cfa94940aa9aaef076b19ba3c8dea7d8e86f7ad00fd2a->leave($__internal_63baeb6f904d04e8159cfa94940aa9aaef076b19ba3c8dea7d8e86f7ad00fd2a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5727af733ae5cc50a418b6dac9f22789dbb98cc2b228ed26af586ddfe6fadf0 = $this->env->getExtension("native_profiler");
        $__internal_a5727af733ae5cc50a418b6dac9f22789dbb98cc2b228ed26af586ddfe6fadf0->enter($__internal_a5727af733ae5cc50a418b6dac9f22789dbb98cc2b228ed26af586ddfe6fadf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a5727af733ae5cc50a418b6dac9f22789dbb98cc2b228ed26af586ddfe6fadf0->leave($__internal_a5727af733ae5cc50a418b6dac9f22789dbb98cc2b228ed26af586ddfe6fadf0_prof);

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
