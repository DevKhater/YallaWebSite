<?php

/* YallaWebsiteBackendBundle:User:new.html.twig */
class __TwigTemplate_a49286f8c55745e5924b1a6c6f8821d3f978e01b2dfc11d4197b9d15432e4ee5 extends Twig_Template
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
        $__internal_940133dc32e4fab64021e3557e2ba66503811d0b7e8193cd997a6584d511c214 = $this->env->getExtension("native_profiler");
        $__internal_940133dc32e4fab64021e3557e2ba66503811d0b7e8193cd997a6584d511c214->enter($__internal_940133dc32e4fab64021e3557e2ba66503811d0b7e8193cd997a6584d511c214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_940133dc32e4fab64021e3557e2ba66503811d0b7e8193cd997a6584d511c214->leave($__internal_940133dc32e4fab64021e3557e2ba66503811d0b7e8193cd997a6584d511c214_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_34220966084bdaf7d620b793a89c3239c838c85d0fd460330f9fddecafdbf506 = $this->env->getExtension("native_profiler");
        $__internal_34220966084bdaf7d620b793a89c3239c838c85d0fd460330f9fddecafdbf506->enter($__internal_34220966084bdaf7d620b793a89c3239c838c85d0fd460330f9fddecafdbf506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userName", array()), 'widget');
        echo "
                    </div>
                     <div class=\"form-group\">
                        <label for=\"title\">Email</label>
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                    </div>
                     <div class=\"form-group\">
                        <label for=\"title\">Pssword</label>
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
                    </div>

    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "<br/>    
    <input type=\"submit\" value=\"Save\"/>
    </form>
    </div>
";
        
        $__internal_34220966084bdaf7d620b793a89c3239c838c85d0fd460330f9fddecafdbf506->leave($__internal_34220966084bdaf7d620b793a89c3239c838c85d0fd460330f9fddecafdbf506_prof);

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
        return array (  73 => 22,  67 => 19,  60 => 15,  53 => 11,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
