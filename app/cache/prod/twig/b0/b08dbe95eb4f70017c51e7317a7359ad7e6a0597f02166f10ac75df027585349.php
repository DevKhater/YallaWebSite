<?php

/* YallaWebsiteBackendBundle:User:new.html.twig */
class __TwigTemplate_0c61fd4358893fe21852eea42efdb43bd1f6482957b0da770222658a2c593f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:User:base_user.html.twig", "YallaWebsiteBackendBundle:User:new.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:User:base_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Privilage
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("backend_user_new");
        echo "\" class=\"form-custom\" method=\"POST\">
                     <div class=\"form-group\">
                        <label for=\"title\">Username</label>
                        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "userName", array()), 'widget');
        echo "
                    </div>
                     <div class=\"form-group\">
                        <label for=\"title\">Email</label>
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                    </div>
                     <div class=\"form-group\">
                        <label for=\"title\">Pssword</label>
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'widget');
        echo "
                    </div>

    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "<br/>    
    <input type=\"submit\" value=\"Save\"/>
    </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  58 => 19,  51 => 15,  44 => 11,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:User:base_user.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Edit Privilage*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_user_new') }}" class="form-custom" method="POST">*/
/*                      <div class="form-group">*/
/*                         <label for="title">Username</label>*/
/*                         {{ form_widget(form.userName)}}*/
/*                     </div>*/
/*                      <div class="form-group">*/
/*                         <label for="title">Email</label>*/
/*                         {{ form_widget(form.email)}}*/
/*                     </div>*/
/*                      <div class="form-group">*/
/*                         <label for="title">Pssword</label>*/
/*                         {{ form_widget(form.plainPassword)}}*/
/*                     </div>*/
/* */
/*     {{ form_widget(form) }}<br/>    */
/*     <input type="submit" value="Save"/>*/
/*     </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
