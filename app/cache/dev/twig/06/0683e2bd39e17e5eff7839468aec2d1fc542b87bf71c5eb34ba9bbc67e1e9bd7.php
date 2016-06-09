<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3a3c36363f5af253727e2ab5148e8c6de10f04e7960c5eae04260268366b4469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9605cf7a1f2bc4a66116a63e9995b48fe58344134a51cd19a7b627c3d42a1c02 = $this->env->getExtension("native_profiler");
        $__internal_9605cf7a1f2bc4a66116a63e9995b48fe58344134a51cd19a7b627c3d42a1c02->enter($__internal_9605cf7a1f2bc4a66116a63e9995b48fe58344134a51cd19a7b627c3d42a1c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9605cf7a1f2bc4a66116a63e9995b48fe58344134a51cd19a7b627c3d42a1c02->leave($__internal_9605cf7a1f2bc4a66116a63e9995b48fe58344134a51cd19a7b627c3d42a1c02_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_40ecfbd745377370005dae66d9eadbff8f8af18e400a02412fed05720fd177b3 = $this->env->getExtension("native_profiler");
        $__internal_40ecfbd745377370005dae66d9eadbff8f8af18e400a02412fed05720fd177b3->enter($__internal_40ecfbd745377370005dae66d9eadbff8f8af18e400a02412fed05720fd177b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_40ecfbd745377370005dae66d9eadbff8f8af18e400a02412fed05720fd177b3->leave($__internal_40ecfbd745377370005dae66d9eadbff8f8af18e400a02412fed05720fd177b3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_088930ec27e56fd97757f38de86d09224b73d020ae9769aff8a48028185582f6 = $this->env->getExtension("native_profiler");
        $__internal_088930ec27e56fd97757f38de86d09224b73d020ae9769aff8a48028185582f6->enter($__internal_088930ec27e56fd97757f38de86d09224b73d020ae9769aff8a48028185582f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_088930ec27e56fd97757f38de86d09224b73d020ae9769aff8a48028185582f6->leave($__internal_088930ec27e56fd97757f38de86d09224b73d020ae9769aff8a48028185582f6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3551dc0b12bc1d0f9d2d3b56117efe6b52b4cc0aa537fc490bb2ad0d99945a14 = $this->env->getExtension("native_profiler");
        $__internal_3551dc0b12bc1d0f9d2d3b56117efe6b52b4cc0aa537fc490bb2ad0d99945a14->enter($__internal_3551dc0b12bc1d0f9d2d3b56117efe6b52b4cc0aa537fc490bb2ad0d99945a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3551dc0b12bc1d0f9d2d3b56117efe6b52b4cc0aa537fc490bb2ad0d99945a14->leave($__internal_3551dc0b12bc1d0f9d2d3b56117efe6b52b4cc0aa537fc490bb2ad0d99945a14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
