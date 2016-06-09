<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7c604d1d12a9b8a08869b6f2194f5b67d93acd3640834906098474174161c359 extends Twig_Template
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
        $__internal_a575055a438225c1994f8c4269ea5d495d7f533b8915cab8607f644ea5d6deca = $this->env->getExtension("native_profiler");
        $__internal_a575055a438225c1994f8c4269ea5d495d7f533b8915cab8607f644ea5d6deca->enter($__internal_a575055a438225c1994f8c4269ea5d495d7f533b8915cab8607f644ea5d6deca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a575055a438225c1994f8c4269ea5d495d7f533b8915cab8607f644ea5d6deca->leave($__internal_a575055a438225c1994f8c4269ea5d495d7f533b8915cab8607f644ea5d6deca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_877af0d829dc595d7601d0f132e12e4aa6b0e831d17a9155737129d13aeda2f8 = $this->env->getExtension("native_profiler");
        $__internal_877af0d829dc595d7601d0f132e12e4aa6b0e831d17a9155737129d13aeda2f8->enter($__internal_877af0d829dc595d7601d0f132e12e4aa6b0e831d17a9155737129d13aeda2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_877af0d829dc595d7601d0f132e12e4aa6b0e831d17a9155737129d13aeda2f8->leave($__internal_877af0d829dc595d7601d0f132e12e4aa6b0e831d17a9155737129d13aeda2f8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f808b9736eb2d06d5204891034f4f622c859456e68c6228862685f66bbc04997 = $this->env->getExtension("native_profiler");
        $__internal_f808b9736eb2d06d5204891034f4f622c859456e68c6228862685f66bbc04997->enter($__internal_f808b9736eb2d06d5204891034f4f622c859456e68c6228862685f66bbc04997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f808b9736eb2d06d5204891034f4f622c859456e68c6228862685f66bbc04997->leave($__internal_f808b9736eb2d06d5204891034f4f622c859456e68c6228862685f66bbc04997_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_56f6859f3ba6176563f4283dac470c425a9c2ad5c8e7055cff800de0755545e2 = $this->env->getExtension("native_profiler");
        $__internal_56f6859f3ba6176563f4283dac470c425a9c2ad5c8e7055cff800de0755545e2->enter($__internal_56f6859f3ba6176563f4283dac470c425a9c2ad5c8e7055cff800de0755545e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_56f6859f3ba6176563f4283dac470c425a9c2ad5c8e7055cff800de0755545e2->leave($__internal_56f6859f3ba6176563f4283dac470c425a9c2ad5c8e7055cff800de0755545e2_prof);

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
