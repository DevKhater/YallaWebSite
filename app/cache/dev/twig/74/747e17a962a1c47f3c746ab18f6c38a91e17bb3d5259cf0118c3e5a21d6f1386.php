<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_2ca1a323e9228138c7e70c9da9101156c51771d136f1ef7ddb65987b8fd0b6ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18d87bdc328273649f8cb79ad15c99c672595f20ef951b19e4ba6efb79fb3a0d = $this->env->getExtension("native_profiler");
        $__internal_18d87bdc328273649f8cb79ad15c99c672595f20ef951b19e4ba6efb79fb3a0d->enter($__internal_18d87bdc328273649f8cb79ad15c99c672595f20ef951b19e4ba6efb79fb3a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18d87bdc328273649f8cb79ad15c99c672595f20ef951b19e4ba6efb79fb3a0d->leave($__internal_18d87bdc328273649f8cb79ad15c99c672595f20ef951b19e4ba6efb79fb3a0d_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_4c4c3e37a5a3422e39da9959dc58fdc5900a1b703538c170540c488e7077c380 = $this->env->getExtension("native_profiler");
        $__internal_4c4c3e37a5a3422e39da9959dc58fdc5900a1b703538c170540c488e7077c380->enter($__internal_4c4c3e37a5a3422e39da9959dc58fdc5900a1b703538c170540c488e7077c380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4c4c3e37a5a3422e39da9959dc58fdc5900a1b703538c170540c488e7077c380->leave($__internal_4c4c3e37a5a3422e39da9959dc58fdc5900a1b703538c170540c488e7077c380_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     {% if error is defined and error %}*/
/*         <span>{{ error }}</span>*/
/*     {% endif %}*/
/*     {% for owner in hwi_oauth_resource_owners() %}*/
/*     <a href="{{ hwi_oauth_login_url(owner) }}">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />*/
/*     {% endfor %}*/
/* {% endblock hwi_oauth_content %}*/
/* */
