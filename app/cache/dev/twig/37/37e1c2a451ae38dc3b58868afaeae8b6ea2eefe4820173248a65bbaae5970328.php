<?php

/* HWIOAuthBundle:Connect:connect_confirm.html.twig */
class __TwigTemplate_8585f499b26523e99bb2b9b04d204cd377aa62e81ff5bf1fdc54052443d277c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_confirm.html.twig", 1);
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
        $__internal_72121077b7673d37e31de95f6b3f4901e000ccec50fe550307b2dd7f93e4e99e = $this->env->getExtension("native_profiler");
        $__internal_72121077b7673d37e31de95f6b3f4901e000ccec50fe550307b2dd7f93e4e99e->enter($__internal_72121077b7673d37e31de95f6b3f4901e000ccec50fe550307b2dd7f93e4e99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72121077b7673d37e31de95f6b3f4901e000ccec50fe550307b2dd7f93e4e99e->leave($__internal_72121077b7673d37e31de95f6b3f4901e000ccec50fe550307b2dd7f93e4e99e_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_d68ccedea5172500a4bd2018f09dad2c299777d65517dffb2fb1190f703381ba = $this->env->getExtension("native_profiler");
        $__internal_d68ccedea5172500a4bd2018f09dad2c299777d65517dffb2fb1190f703381ba->enter($__internal_d68ccedea5172500a4bd2018f09dad2c299777d65517dffb2fb1190f703381ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.connecting", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.text", array("%service%" => $this->env->getExtension('translator')->trans((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), array(), "HWIOAuthBundle"), "%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</p>
            <p>
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("hwi_oauth_connect_service", array("service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "key" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                    </div>
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </p>
        </div>
        <div class=\"span6\">
            ";
        // line 19
        if (($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array())))) {
            // line 20
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 22
        echo "        </div>
    </div>
";
        
        $__internal_d68ccedea5172500a4bd2018f09dad2c299777d65517dffb2fb1190f703381ba->leave($__internal_d68ccedea5172500a4bd2018f09dad2c299777d65517dffb2fb1190f703381ba_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  81 => 20,  79 => 19,  72 => 15,  65 => 13,  61 => 12,  56 => 10,  52 => 9,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.connecting' | trans({}, 'HWIOAuthBundle')}}</h3>*/
/*     <div class="row">*/
/*         <div class="span6">*/
/*             <p>{{ 'connect.confirm.text' | trans({'%service%': service | trans({}, 'HWIOAuthBundle'), '%name%': userInformation.realName}, 'HWIOAuthBundle') }}</p>*/
/*             <p>*/
/*                 {{ form_start(form, {'action': path('hwi_oauth_connect_service', {'service': service, 'key': key}), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <button type="submit" class="btn btn-primary">{{ 'connect.confirm.submit' | trans({}, 'HWIOAuthBundle') }}</button>*/
/*                         <a href="{{ path('hwi_oauth_connect') }}" class="btn">{{ 'connect.confirm.cancel' | trans({}, 'HWIOAuthBundle') }}</a>*/
/*                     </div>*/
/*                 {{ form_end(form) }}*/
/*             </p>*/
/*         </div>*/
/*         <div class="span6">*/
/*             {% if userInformation.profilePicture is defined and userInformation.profilePicture is not empty %}*/
/*                 <img src="{{ userInformation.profilePicture }}" />*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock hwi_oauth_content %}*/
/* */