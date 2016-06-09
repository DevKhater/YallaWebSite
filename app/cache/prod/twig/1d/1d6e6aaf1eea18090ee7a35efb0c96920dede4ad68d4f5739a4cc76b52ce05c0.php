<?php

/* YallaWebsiteBackendBundle:Profile:new.html.twig */
class __TwigTemplate_630c30bc531b6300595c0ce9c439e7d7e976b5f405ec8787ba7efca5debd1091 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " <style> #edit_profile_div_head { display: none; } </style>";
    }

    // line 3
    public function block_controlleraction($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "media", array()), 'widget');
        echo "
                <p class=\"help-block\">Only Images.</p>
            </div>
            <br>
            <br>
            <div class=\"form-group\">
                <label>Username</label> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "<br/>
                <label>Email</label> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "<br/>
                <label>Last Login</label> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastLogin", array()), "F jS \\a\\t g:ia"), "html", null, true);
        echo "<br/>
            </div>
            <label>Display Name</label>
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "displayName", array()), 'widget');
        echo "
            <br>
            <div class=\"form-group\">
                <label for=\"title\">Short Biography</label>
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shortBio", array()), 'widget');
        echo "
                <p class=\"help-block\">Only Images.</p>
            </div>
            
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
            <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
        </form>
    </div>
</div>

";
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
        return array (  89 => 29,  85 => 28,  78 => 24,  71 => 20,  65 => 17,  61 => 16,  57 => 15,  48 => 9,  42 => 6,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
