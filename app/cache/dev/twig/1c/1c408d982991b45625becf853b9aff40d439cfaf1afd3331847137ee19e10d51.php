<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_67b449aea763e2fb8a2896293ad291da69a37efce68ffb23e387584763840d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfab3042d50039fa5af7a38b6bd4f6ff19c912f59a09018fbf946757569f879c = $this->env->getExtension("native_profiler");
        $__internal_dfab3042d50039fa5af7a38b6bd4f6ff19c912f59a09018fbf946757569f879c->enter($__internal_dfab3042d50039fa5af7a38b6bd4f6ff19c912f59a09018fbf946757569f879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
<div class=\"form-group\">
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</div>
    <div>
        <input class=\"btn btn-default\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"submit\" >
    </div>
";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_dfab3042d50039fa5af7a38b6bd4f6ff19c912f59a09018fbf946757569f879c->leave($__internal_dfab3042d50039fa5af7a38b6bd4f6ff19c912f59a09018fbf946757569f879c_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_93cb70d3fba8b96bf3ab6cd97cb011631469d101c08043ff763049d3725aca98 = $this->env->getExtension("native_profiler");
        $__internal_93cb70d3fba8b96bf3ab6cd97cb011631469d101c08043ff763049d3725aca98->enter($__internal_93cb70d3fba8b96bf3ab6cd97cb011631469d101c08043ff763049d3725aca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    <style>
        #fos_user_change_password_form input {
            
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857;
    color: #555;
    background-color: #FFF;
    background-image: none;
    border: 1px solid #CCC;
    border-radius: 4px;
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        }
    </style>
";
        
        $__internal_93cb70d3fba8b96bf3ab6cd97cb011631469d101c08043ff763049d3725aca98->leave($__internal_93cb70d3fba8b96bf3ab6cd97cb011631469d101c08043ff763049d3725aca98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  53 => 3,  44 => 30,  39 => 28,  33 => 25,  28 => 23,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block stylesheet %}*/
/*     <style>*/
/*         #fos_user_change_password_form input {*/
/*             */
/*     display: block;*/
/*     width: 100%;*/
/*     height: 34px;*/
/*     padding: 6px 12px;*/
/*     font-size: 14px;*/
/*     line-height: 1.42857;*/
/*     color: #555;*/
/*     background-color: #FFF;*/
/*     background-image: none;*/
/*     border: 1px solid #CCC;*/
/*     border-radius: 4px;*/
/*     box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;*/
/*     transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/* <div class="form-group">*/
/*     {{ form_widget(form) }}*/
/* </div>*/
/*     <div>*/
/*         <input class="btn btn-default" value="{{ 'change_password.submit'|trans }}" type="submit" >*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
