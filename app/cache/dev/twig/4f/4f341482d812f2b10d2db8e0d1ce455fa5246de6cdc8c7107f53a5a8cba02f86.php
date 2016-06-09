<?php

/* YallaWebsiteBackendBundle:Profile:new.html.twig */
class __TwigTemplate_3ad009467fe7badf692efdc7cd1aa6cdf75438f8c1ed313ef2f7aba2d5781e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Profile:base_profile.html.twig", "YallaWebsiteBackendBundle:Profile:new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Profile:base_profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b8384137cc02ac154d9e892892263e8a0ccdc8e5ddb1e8c69c37f8bd586386f = $this->env->getExtension("native_profiler");
        $__internal_2b8384137cc02ac154d9e892892263e8a0ccdc8e5ddb1e8c69c37f8bd586386f->enter($__internal_2b8384137cc02ac154d9e892892263e8a0ccdc8e5ddb1e8c69c37f8bd586386f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Profile:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8384137cc02ac154d9e892892263e8a0ccdc8e5ddb1e8c69c37f8bd586386f->leave($__internal_2b8384137cc02ac154d9e892892263e8a0ccdc8e5ddb1e8c69c37f8bd586386f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_893e7c5932797be303109b3184e161533f41a37afb92112ec0afbcee46751a3d = $this->env->getExtension("native_profiler");
        $__internal_893e7c5932797be303109b3184e161533f41a37afb92112ec0afbcee46751a3d->enter($__internal_893e7c5932797be303109b3184e161533f41a37afb92112ec0afbcee46751a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " <style> #edit_profile_div_head { display: none; } </style>";
        
        $__internal_893e7c5932797be303109b3184e161533f41a37afb92112ec0afbcee46751a3d->leave($__internal_893e7c5932797be303109b3184e161533f41a37afb92112ec0afbcee46751a3d_prof);

    }

    // line 3
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_078caf535ea3a7bfee4c3c6b71f17abba8d13a2fe0440a5873270c9dd046fac3 = $this->env->getExtension("native_profiler");
        $__internal_078caf535ea3a7bfee4c3c6b71f17abba8d13a2fe0440a5873270c9dd046fac3->enter($__internal_078caf535ea3a7bfee4c3c6b71f17abba8d13a2fe0440a5873270c9dd046fac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 4
        echo "    <div class=\"row\">
    <div class=\"col-md-12\">
        <form enctype=\"multipart/form-data\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("backend_profile_new");
        echo "\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"title\">Display Image</label>
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                <p class=\"help-block\">Only Images.</p>
            </div>
            <br>
            <br>
            <div class=\"form-group\">
                <label>Username</label> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "<br/>
                <label>Email</label> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "<br/>
                <label>Last Login</label> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "F jS \\a\\t g:ia"), "html", null, true);
        echo "<br/>
            </div>
            <label>Display Name</label>
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "displayName", array()), 'widget');
        echo "
            <br>
            <div class=\"form-group\">
                <label for=\"title\">Short Biography</label>
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortBio", array()), 'widget');
        echo "
                <p class=\"help-block\">Only Images.</p>
            </div>
            
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
        </form>
    </div>
</div>

";
        
        $__internal_078caf535ea3a7bfee4c3c6b71f17abba8d13a2fe0440a5873270c9dd046fac3->leave($__internal_078caf535ea3a7bfee4c3c6b71f17abba8d13a2fe0440a5873270c9dd046fac3_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Profile:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  100 => 28,  93 => 24,  86 => 20,  80 => 17,  76 => 16,  72 => 15,  63 => 9,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Profile:base_profile.html.twig" %}*/
/* {% block stylesheets %} <style> #edit_profile_div_head { display: none; } </style>{% endblock%}*/
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*     <div class="col-md-12">*/
/*         <form enctype="multipart/form-data" action="{{ path('backend_profile_new') }}" method="POST">*/
/*             <div class="form-group">*/
/*                 <label for="title">Display Image</label>*/
/*                 {{ form_widget(form.media)}}*/
/*                 <p class="help-block">Only Images.</p>*/
/*             </div>*/
/*             <br>*/
/*             <br>*/
/*             <div class="form-group">*/
/*                 <label>Username</label> {{ app.user.username }}<br/>*/
/*                 <label>Email</label> {{ app.user.email}}<br/>*/
/*                 <label>Last Login</label> {{ app.user.lastLogin|date("F jS \\a\\t g:ia")}}<br/>*/
/*             </div>*/
/*             <label>Display Name</label>*/
/*             {{ form_widget(form.displayName) }}*/
/*             <br>*/
/*             <div class="form-group">*/
/*                 <label for="title">Short Biography</label>*/
/*                 {{ form_widget(form.shortBio)}}*/
/*                 <p class="help-block">Only Images.</p>*/
/*             </div>*/
/*             */
/*                 {{ form_errors(form) }}*/
/*                 {{ form_row(form._token) }}*/
/*             <input type="submit" class="btn btn-default" value="Save"/>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
