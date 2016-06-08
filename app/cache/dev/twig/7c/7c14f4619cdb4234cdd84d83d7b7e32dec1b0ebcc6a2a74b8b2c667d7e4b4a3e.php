<?php

/* YallaWebsiteBackendBundle:User:base_user.html.twig */
class __TwigTemplate_891591f578a1712b6390f482ba034ac00d87db6b06bbc0329527a51584e37c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:User:base_user.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'extraOptions' => array($this, 'block_extraOptions'),
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3609e68f816806e01b4e4384de5d6a6014563fdfc53282d31251e1beb5d1457 = $this->env->getExtension("native_profiler");
        $__internal_a3609e68f816806e01b4e4384de5d6a6014563fdfc53282d31251e1beb5d1457->enter($__internal_a3609e68f816806e01b4e4384de5d6a6014563fdfc53282d31251e1beb5d1457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:User:base_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3609e68f816806e01b4e4384de5d6a6014563fdfc53282d31251e1beb5d1457->leave($__internal_a3609e68f816806e01b4e4384de5d6a6014563fdfc53282d31251e1beb5d1457_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a45bc167be61c6292ee0af9cf3b27d287a81e507e970ab9b9e7d893d43f6c65e = $this->env->getExtension("native_profiler");
        $__internal_a45bc167be61c6292ee0af9cf3b27d287a81e507e970ab9b9e7d893d43f6c65e->enter($__internal_a45bc167be61c6292ee0af9cf3b27d287a81e507e970ab9b9e7d893d43f6c65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Users Section";
        
        $__internal_a45bc167be61c6292ee0af9cf3b27d287a81e507e970ab9b9e7d893d43f6c65e->leave($__internal_a45bc167be61c6292ee0af9cf3b27d287a81e507e970ab9b9e7d893d43f6c65e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c58322a03eb7bd65c9cd0a29353dc03c7160e1cccef719d458f9c55c9cef3f57 = $this->env->getExtension("native_profiler");
        $__internal_c58322a03eb7bd65c9cd0a29353dc03c7160e1cccef719d458f9c55c9cef3f57->enter($__internal_c58322a03eb7bd65c9cd0a29353dc03c7160e1cccef719d458f9c55c9cef3f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Users</h4>
        </div>
    </div>
    <div>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("backend_user_new");
        echo "\"><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i>Create User</button></a>
        ";
        // line 11
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 12
        echo "    </div>
";
        // line 13
        $this->displayBlock('controlleraction', $context, $blocks);
        
        $__internal_c58322a03eb7bd65c9cd0a29353dc03c7160e1cccef719d458f9c55c9cef3f57->leave($__internal_c58322a03eb7bd65c9cd0a29353dc03c7160e1cccef719d458f9c55c9cef3f57_prof);

    }

    // line 11
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_9c65e7db967c76b4488204548a6b28936692e6c8fe0ba5f004977d5a02d7d13c = $this->env->getExtension("native_profiler");
        $__internal_9c65e7db967c76b4488204548a6b28936692e6c8fe0ba5f004977d5a02d7d13c->enter($__internal_9c65e7db967c76b4488204548a6b28936692e6c8fe0ba5f004977d5a02d7d13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_9c65e7db967c76b4488204548a6b28936692e6c8fe0ba5f004977d5a02d7d13c->leave($__internal_9c65e7db967c76b4488204548a6b28936692e6c8fe0ba5f004977d5a02d7d13c_prof);

    }

    // line 13
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_365b0c4eb43614ef09a0fdeb3480c64c2027ac8e4c2ec91304a374c5511de43c = $this->env->getExtension("native_profiler");
        $__internal_365b0c4eb43614ef09a0fdeb3480c64c2027ac8e4c2ec91304a374c5511de43c->enter($__internal_365b0c4eb43614ef09a0fdeb3480c64c2027ac8e4c2ec91304a374c5511de43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_365b0c4eb43614ef09a0fdeb3480c64c2027ac8e4c2ec91304a374c5511de43c->leave($__internal_365b0c4eb43614ef09a0fdeb3480c64c2027ac8e4c2ec91304a374c5511de43c_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:User:base_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 13,  79 => 11,  72 => 13,  69 => 12,  67 => 11,  63 => 10,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Users Section{% endblock %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Users</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a href="{{ path ('backend_user_new')}}"><button class="btn btn-primary create_new"><i class="fa fa-edit "></i>Create User</button></a>*/
/*         {% block extraOptions %}{% endblock %}*/
/*     </div>*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
