<?php

/* YallaWebsiteBackendBundle:Profile:edit.html.twig */
class __TwigTemplate_d40637266a4a2cac153f38d950ff926c0cd939374f3136752fc7b73457d0ca8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Profile:base_profile.html.twig", "YallaWebsiteBackendBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
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
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("backend_profile_edit");
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
                        <div class=\"col-md-4\">
                            ";
        // line 35
        if ( !twig_test_empty($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "media", array()))) {
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "media", array()), "preview", array("class" => "myclass"));
        }
        // line 36
        echo "                        </div>


";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  92 => 35,  83 => 29,  79 => 28,  72 => 24,  65 => 20,  59 => 17,  55 => 16,  51 => 15,  42 => 9,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Profile:base_profile.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_profile_edit') }}" method="POST">*/
/*                 */
/*                     <div class="form-group">*/
/*                         <label for="title">Display Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                     <br>*/
/*                     <br>*/
/*                     <div class="form-group">*/
/*                         <label>Username</label> {{ app.user.username }}<br/>*/
/*                         <label>Email</label> {{ app.user.email}}<br/>*/
/*                         <label>Last Login</label> {{ app.user.lastLogin|date("F jS \\a\\t g:ia")}}<br/>*/
/*                     </div>*/
/*                     <label>Display Name</label>*/
/*                     {{ form_widget(form.displayName) }}*/
/*                     <br>*/
/*                     <div class="form-group">*/
/*                         <label for="title">Short Biography</label>*/
/*                         {{ form_widget(form.shortBio)}}*/
/*                         */
/*                     </div>*/
/* */
/*                 {{ form_errors(form) }}*/
/*                 {{ form_row(form._token) }}*/
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*                         <div class="col-md-4">*/
/*                             {% if entities.media is not empty%}{% media entities.media, 'preview' with {'class': 'myclass'}%}{% endif %}*/
/*                         </div>*/
/* */
/* */
/* {% endblock %}*/
