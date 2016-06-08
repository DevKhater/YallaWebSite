<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_273b185ea6fe07f8300bbcb98497c34fc485f0df757d62467f99451af79702d1 extends Twig_Template
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
        $__internal_b73b6a5f2092afca7cb6356d63340852a31c5f0a5d1bc02dadda5550881c79e0 = $this->env->getExtension("native_profiler");
        $__internal_b73b6a5f2092afca7cb6356d63340852a31c5f0a5d1bc02dadda5550881c79e0->enter($__internal_b73b6a5f2092afca7cb6356d63340852a31c5f0a5d1bc02dadda5550881c79e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b73b6a5f2092afca7cb6356d63340852a31c5f0a5d1bc02dadda5550881c79e0->leave($__internal_b73b6a5f2092afca7cb6356d63340852a31c5f0a5d1bc02dadda5550881c79e0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ab759bde84b73ebee1010082174e286a36b74a1c55ec3cbf88a4d2e2c3530ec5 = $this->env->getExtension("native_profiler");
        $__internal_ab759bde84b73ebee1010082174e286a36b74a1c55ec3cbf88a4d2e2c3530ec5->enter($__internal_ab759bde84b73ebee1010082174e286a36b74a1c55ec3cbf88a4d2e2c3530ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab759bde84b73ebee1010082174e286a36b74a1c55ec3cbf88a4d2e2c3530ec5->leave($__internal_ab759bde84b73ebee1010082174e286a36b74a1c55ec3cbf88a4d2e2c3530ec5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e478b1478c9af6bdeff91ff90673f7f9ff54db15e4674f23e4950aef880fdb76 = $this->env->getExtension("native_profiler");
        $__internal_e478b1478c9af6bdeff91ff90673f7f9ff54db15e4674f23e4950aef880fdb76->enter($__internal_e478b1478c9af6bdeff91ff90673f7f9ff54db15e4674f23e4950aef880fdb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e478b1478c9af6bdeff91ff90673f7f9ff54db15e4674f23e4950aef880fdb76->leave($__internal_e478b1478c9af6bdeff91ff90673f7f9ff54db15e4674f23e4950aef880fdb76_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ecc05afc57f8d8e92107b84d114a9d662183c99e08e26fd61c4681a523201ad3 = $this->env->getExtension("native_profiler");
        $__internal_ecc05afc57f8d8e92107b84d114a9d662183c99e08e26fd61c4681a523201ad3->enter($__internal_ecc05afc57f8d8e92107b84d114a9d662183c99e08e26fd61c4681a523201ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ecc05afc57f8d8e92107b84d114a9d662183c99e08e26fd61c4681a523201ad3->leave($__internal_ecc05afc57f8d8e92107b84d114a9d662183c99e08e26fd61c4681a523201ad3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
