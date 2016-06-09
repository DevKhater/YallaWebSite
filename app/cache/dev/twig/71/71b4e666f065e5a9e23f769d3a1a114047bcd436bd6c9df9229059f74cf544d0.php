<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_9a9180a7626bf5b3800d77a3065df2d1fc9bea24865774fc56e83647213a15ef extends Twig_Template
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
        $__internal_b4bdf8404fc7bb9e787c9b789b4eb18653fa914425e6aa0714c0f251c2d749ee = $this->env->getExtension("native_profiler");
        $__internal_b4bdf8404fc7bb9e787c9b789b4eb18653fa914425e6aa0714c0f251c2d749ee->enter($__internal_b4bdf8404fc7bb9e787c9b789b4eb18653fa914425e6aa0714c0f251c2d749ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

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
        
        $__internal_b4bdf8404fc7bb9e787c9b789b4eb18653fa914425e6aa0714c0f251c2d749ee->leave($__internal_b4bdf8404fc7bb9e787c9b789b4eb18653fa914425e6aa0714c0f251c2d749ee_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4d355b5d8fe174dc2033f873d37641fda16fd47ca388dd1b15100854def0e468 = $this->env->getExtension("native_profiler");
        $__internal_4d355b5d8fe174dc2033f873d37641fda16fd47ca388dd1b15100854def0e468->enter($__internal_4d355b5d8fe174dc2033f873d37641fda16fd47ca388dd1b15100854def0e468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_4d355b5d8fe174dc2033f873d37641fda16fd47ca388dd1b15100854def0e468->leave($__internal_4d355b5d8fe174dc2033f873d37641fda16fd47ca388dd1b15100854def0e468_prof);

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
