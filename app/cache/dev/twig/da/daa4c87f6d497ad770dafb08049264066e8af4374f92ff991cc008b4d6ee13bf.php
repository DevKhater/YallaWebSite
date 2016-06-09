<?php

/* YallaWebsiteBackendBundle:Profile:edit.html.twig */
class __TwigTemplate_f79c8f6f74c1c87bb77a9f86a02778b51797059104cb861d61764812217a7db3 extends Twig_Template
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
        $__internal_b6589ab66feac4ed42761b83cb1e32b2d9d7c16cecd1cf0da314d4949bd04433 = $this->env->getExtension("native_profiler");
        $__internal_b6589ab66feac4ed42761b83cb1e32b2d9d7c16cecd1cf0da314d4949bd04433->enter($__internal_b6589ab66feac4ed42761b83cb1e32b2d9d7c16cecd1cf0da314d4949bd04433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6589ab66feac4ed42761b83cb1e32b2d9d7c16cecd1cf0da314d4949bd04433->leave($__internal_b6589ab66feac4ed42761b83cb1e32b2d9d7c16cecd1cf0da314d4949bd04433_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_1435158d782ba0487c66fba14b28a0fa22bbf8f2bd300c23b1b96394abfec0fc = $this->env->getExtension("native_profiler");
        $__internal_1435158d782ba0487c66fba14b28a0fa22bbf8f2bd300c23b1b96394abfec0fc->enter($__internal_1435158d782ba0487c66fba14b28a0fa22bbf8f2bd300c23b1b96394abfec0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
                        <div class=\"col-md-4\">
                            ";
        // line 35
        if ( !twig_test_empty($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "media", array()))) {
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "media", array()), "preview", array("class" => "myclass"));
        }
        // line 36
        echo "                        </div>


";
        
        $__internal_1435158d782ba0487c66fba14b28a0fa22bbf8f2bd300c23b1b96394abfec0fc->leave($__internal_1435158d782ba0487c66fba14b28a0fa22bbf8f2bd300c23b1b96394abfec0fc_prof);

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
        return array (  105 => 36,  101 => 35,  92 => 29,  88 => 28,  81 => 24,  74 => 20,  68 => 17,  64 => 16,  60 => 15,  51 => 9,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
