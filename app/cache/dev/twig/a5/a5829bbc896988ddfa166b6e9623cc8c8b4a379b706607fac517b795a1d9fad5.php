<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_df4a69955c7f37964535dd4586cce9b83da5dfbbf9255950971e3fabffc6f65b extends Twig_Template
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
        $__internal_c4579d1b75f3ad177f11f52217285d42dc08b6875d0ca5b9dd463e993dc39a61 = $this->env->getExtension("native_profiler");
        $__internal_c4579d1b75f3ad177f11f52217285d42dc08b6875d0ca5b9dd463e993dc39a61->enter($__internal_c4579d1b75f3ad177f11f52217285d42dc08b6875d0ca5b9dd463e993dc39a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c4579d1b75f3ad177f11f52217285d42dc08b6875d0ca5b9dd463e993dc39a61->leave($__internal_c4579d1b75f3ad177f11f52217285d42dc08b6875d0ca5b9dd463e993dc39a61_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ef2f35051a92e982124a23c210e05e71d1f65bc7561246e213f47ee70da25e54 = $this->env->getExtension("native_profiler");
        $__internal_ef2f35051a92e982124a23c210e05e71d1f65bc7561246e213f47ee70da25e54->enter($__internal_ef2f35051a92e982124a23c210e05e71d1f65bc7561246e213f47ee70da25e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ef2f35051a92e982124a23c210e05e71d1f65bc7561246e213f47ee70da25e54->leave($__internal_ef2f35051a92e982124a23c210e05e71d1f65bc7561246e213f47ee70da25e54_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dc7e8be6131374d65cb0b88907f0af70a93dad272a26a555a9029a51cced79a1 = $this->env->getExtension("native_profiler");
        $__internal_dc7e8be6131374d65cb0b88907f0af70a93dad272a26a555a9029a51cced79a1->enter($__internal_dc7e8be6131374d65cb0b88907f0af70a93dad272a26a555a9029a51cced79a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dc7e8be6131374d65cb0b88907f0af70a93dad272a26a555a9029a51cced79a1->leave($__internal_dc7e8be6131374d65cb0b88907f0af70a93dad272a26a555a9029a51cced79a1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_afd6a01073dc33d47349bb7498767b7376ad263964993e005ffadbcebdae6980 = $this->env->getExtension("native_profiler");
        $__internal_afd6a01073dc33d47349bb7498767b7376ad263964993e005ffadbcebdae6980->enter($__internal_afd6a01073dc33d47349bb7498767b7376ad263964993e005ffadbcebdae6980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_afd6a01073dc33d47349bb7498767b7376ad263964993e005ffadbcebdae6980->leave($__internal_afd6a01073dc33d47349bb7498767b7376ad263964993e005ffadbcebdae6980_prof);

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
