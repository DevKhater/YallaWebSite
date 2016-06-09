<?php

/* YallaWebsiteBackendBundle:Profile:base_profile.html.twig */
class __TwigTemplate_6ec888c0326c0d610c01c9f197623940c9648d3bfda15bdc32a5fac5a6781431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend_base.html.twig", "YallaWebsiteBackendBundle:Profile:base_profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'extraOptions' => array($this, 'block_extraOptions'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "Profile Section";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"page-head-line\">Profile</h4>
        </div>
    </div>
        <div id=\"edit_profile_div_head\">
        <a href='";
        // line 12
        echo $this->env->getExtension('routing')->getPath("backend_profile_edit");
        echo "'><button class=\"btn btn-primary create_new\"><i class=\"fa fa-edit \"></i>Edit Profile</button></a>
        ";
        // line 13
        $this->displayBlock('extraOptions', $context, $blocks);
        // line 14
        echo "    </div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        $this->displayBlock('controlleraction', $context, $blocks);
    }

    // line 13
    public function block_extraOptions($context, array $blocks = array())
    {
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 16
    public function block_controlleraction($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Profile:base_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  75 => 15,  70 => 13,  66 => 16,  64 => 15,  61 => 14,  59 => 13,  55 => 12,  47 => 6,  44 => 5,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "backend_base.html.twig" %}*/
/* {% block title %}Profile Section{% endblock %}*/
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h4 class="page-head-line">Profile</h4>*/
/*         </div>*/
/*     </div>*/
/*         <div id="edit_profile_div_head">*/
/*         <a href='{{ path ('backend_profile_edit')}}'><button class="btn btn-primary create_new"><i class="fa fa-edit "></i>Edit Profile</button></a>*/
/*         {% block extraOptions %}{% endblock %}*/
/*     </div>*/
/*         {% block fos_user_content %}{% endblock %}*/
/* {% block controlleraction %}{% endblock %}*/
/* {% endblock %}*/
/* */
/* */
