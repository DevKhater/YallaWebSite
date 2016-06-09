<?php

/* YallaWebsiteBackendBundle:User:base_user.html.twig */
class __TwigTemplate_3e69239a839940990e8373cf45740f5816f62e284436c817c7da86a562f0aa37 extends Twig_Template
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
        $__internal_d0c6b0f7ac4f02d47a17e490f4e3498c5b52a8201a70f58bfcf1aee221d0b13a = $this->env->getExtension("native_profiler");
        $__internal_d0c6b0f7ac4f02d47a17e490f4e3498c5b52a8201a70f58bfcf1aee221d0b13a->enter($__internal_d0c6b0f7ac4f02d47a17e490f4e3498c5b52a8201a70f58bfcf1aee221d0b13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:User:base_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c6b0f7ac4f02d47a17e490f4e3498c5b52a8201a70f58bfcf1aee221d0b13a->leave($__internal_d0c6b0f7ac4f02d47a17e490f4e3498c5b52a8201a70f58bfcf1aee221d0b13a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_00e309eb08d6a9205f43049da24e5c315906dd59c8dd5270bd4c9e2adca60ad7 = $this->env->getExtension("native_profiler");
        $__internal_00e309eb08d6a9205f43049da24e5c315906dd59c8dd5270bd4c9e2adca60ad7->enter($__internal_00e309eb08d6a9205f43049da24e5c315906dd59c8dd5270bd4c9e2adca60ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Users Section";
        
        $__internal_00e309eb08d6a9205f43049da24e5c315906dd59c8dd5270bd4c9e2adca60ad7->leave($__internal_00e309eb08d6a9205f43049da24e5c315906dd59c8dd5270bd4c9e2adca60ad7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_951ebb4c2b4b7c34b289760a61197bf62b1798cfbbc84ab8760a9e4079c37635 = $this->env->getExtension("native_profiler");
        $__internal_951ebb4c2b4b7c34b289760a61197bf62b1798cfbbc84ab8760a9e4079c37635->enter($__internal_951ebb4c2b4b7c34b289760a61197bf62b1798cfbbc84ab8760a9e4079c37635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_951ebb4c2b4b7c34b289760a61197bf62b1798cfbbc84ab8760a9e4079c37635->leave($__internal_951ebb4c2b4b7c34b289760a61197bf62b1798cfbbc84ab8760a9e4079c37635_prof);

    }

    // line 11
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_f651c617c2cf60067a88a23ff0f1ac78f6914741b20871b1c79e80709bdad64a = $this->env->getExtension("native_profiler");
        $__internal_f651c617c2cf60067a88a23ff0f1ac78f6914741b20871b1c79e80709bdad64a->enter($__internal_f651c617c2cf60067a88a23ff0f1ac78f6914741b20871b1c79e80709bdad64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_f651c617c2cf60067a88a23ff0f1ac78f6914741b20871b1c79e80709bdad64a->leave($__internal_f651c617c2cf60067a88a23ff0f1ac78f6914741b20871b1c79e80709bdad64a_prof);

    }

    // line 13
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_23d2400dc680a46a7765e3ccee81c352ffa053476e71ba27f5d469155bd274d1 = $this->env->getExtension("native_profiler");
        $__internal_23d2400dc680a46a7765e3ccee81c352ffa053476e71ba27f5d469155bd274d1->enter($__internal_23d2400dc680a46a7765e3ccee81c352ffa053476e71ba27f5d469155bd274d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_23d2400dc680a46a7765e3ccee81c352ffa053476e71ba27f5d469155bd274d1->leave($__internal_23d2400dc680a46a7765e3ccee81c352ffa053476e71ba27f5d469155bd274d1_prof);

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
