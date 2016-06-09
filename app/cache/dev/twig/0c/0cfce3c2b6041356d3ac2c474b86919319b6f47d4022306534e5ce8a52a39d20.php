<?php

/* YallaWebsiteBackendBundle:User:new.html.twig */
class __TwigTemplate_9abfc7b156f90c8cbdc84f4170ea3ee1d5354d0c7aaf02d0727164eb82e31689 extends Twig_Template
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
        $__internal_3e868826c0753cceecf7f2f10a9eef93b6c3f5db68dfe8ff062c0355a0bdbb5c = $this->env->getExtension("native_profiler");
        $__internal_3e868826c0753cceecf7f2f10a9eef93b6c3f5db68dfe8ff062c0355a0bdbb5c->enter($__internal_3e868826c0753cceecf7f2f10a9eef93b6c3f5db68dfe8ff062c0355a0bdbb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e868826c0753cceecf7f2f10a9eef93b6c3f5db68dfe8ff062c0355a0bdbb5c->leave($__internal_3e868826c0753cceecf7f2f10a9eef93b6c3f5db68dfe8ff062c0355a0bdbb5c_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_1ee2424b775218bebba58a638400abef066bce01d9f500f9397cc06f11f446f1 = $this->env->getExtension("native_profiler");
        $__internal_1ee2424b775218bebba58a638400abef066bce01d9f500f9397cc06f11f446f1->enter($__internal_1ee2424b775218bebba58a638400abef066bce01d9f500f9397cc06f11f446f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_1ee2424b775218bebba58a638400abef066bce01d9f500f9397cc06f11f446f1->leave($__internal_1ee2424b775218bebba58a638400abef066bce01d9f500f9397cc06f11f446f1_prof);

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
