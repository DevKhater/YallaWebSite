<?php

/* YallaWebsiteBackendBundle:User:base_user.html.twig */
class __TwigTemplate_955d3e091a02c14832c20d45518910d0d0d8e93a3ac98ed423d13a9cb69c18d6 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Users Section";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 11
    public function block_extraOptions($context, array $blocks = array())
    {
    }

    // line 13
    public function block_controlleraction($context, array $blocks = array())
    {
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
        return array (  66 => 13,  61 => 11,  57 => 13,  54 => 12,  52 => 11,  48 => 10,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
