<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_dd115cfa70a5fcf9a89ef68dfcf66af3e05f5b403eec3e24311a5119275c3b39 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
<div class=\"form-group\">
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
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
        return array (  50 => 4,  47 => 3,  41 => 30,  36 => 28,  30 => 25,  25 => 23,  23 => 3,  20 => 2,);
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
