<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a0f06aa6f12b92311d785cb628727984fa55c0843f774e26a61a84be24dee0b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_88653b29d0296bc22cc64b317c36c590dddb125b84fe33a3e4e96d8207f7ad31 = $this->env->getExtension("native_profiler");
        $__internal_88653b29d0296bc22cc64b317c36c590dddb125b84fe33a3e4e96d8207f7ad31->enter($__internal_88653b29d0296bc22cc64b317c36c590dddb125b84fe33a3e4e96d8207f7ad31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88653b29d0296bc22cc64b317c36c590dddb125b84fe33a3e4e96d8207f7ad31->leave($__internal_88653b29d0296bc22cc64b317c36c590dddb125b84fe33a3e4e96d8207f7ad31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ceeaab85181ded1b0db7434003d58ba7037b58766f1e5f237e6b38b3dd85572 = $this->env->getExtension("native_profiler");
        $__internal_9ceeaab85181ded1b0db7434003d58ba7037b58766f1e5f237e6b38b3dd85572->enter($__internal_9ceeaab85181ded1b0db7434003d58ba7037b58766f1e5f237e6b38b3dd85572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9ceeaab85181ded1b0db7434003d58ba7037b58766f1e5f237e6b38b3dd85572->leave($__internal_9ceeaab85181ded1b0db7434003d58ba7037b58766f1e5f237e6b38b3dd85572_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
