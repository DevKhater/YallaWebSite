<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_7ca39419cba0740226029a6e839da5534520fec6e04f99ea3a2bd461ce3e4de4 extends Twig_Template
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
        $__internal_37aacc211b228343715e24a9c00e3aa4e7f51d69a675df972b3e0ad6da3f30e1 = $this->env->getExtension("native_profiler");
        $__internal_37aacc211b228343715e24a9c00e3aa4e7f51d69a675df972b3e0ad6da3f30e1->enter($__internal_37aacc211b228343715e24a9c00e3aa4e7f51d69a675df972b3e0ad6da3f30e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37aacc211b228343715e24a9c00e3aa4e7f51d69a675df972b3e0ad6da3f30e1->leave($__internal_37aacc211b228343715e24a9c00e3aa4e7f51d69a675df972b3e0ad6da3f30e1_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_46f6a03a65e40d76c0171fd351e9a9b6f608fe7ad1b089dd2b789834ca3e2c9f = $this->env->getExtension("native_profiler");
        $__internal_46f6a03a65e40d76c0171fd351e9a9b6f608fe7ad1b089dd2b789834ca3e2c9f->enter($__internal_46f6a03a65e40d76c0171fd351e9a9b6f608fe7ad1b089dd2b789834ca3e2c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

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
        
        $__internal_46f6a03a65e40d76c0171fd351e9a9b6f608fe7ad1b089dd2b789834ca3e2c9f->leave($__internal_46f6a03a65e40d76c0171fd351e9a9b6f608fe7ad1b089dd2b789834ca3e2c9f_prof);

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
