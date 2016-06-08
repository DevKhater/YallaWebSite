<?php

/* YallaWebsiteBackendBundle:Profile:base_profile.html.twig */
class __TwigTemplate_8feea24733ef0a879f6e83b99be7d484969a4556c712dc62a046bb1694dba611 extends Twig_Template
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
        $__internal_32cd94d3b37bd3a160d75347e6b3b0cc48eb1d7fd3bac1ca2d77ae1746498ad7 = $this->env->getExtension("native_profiler");
        $__internal_32cd94d3b37bd3a160d75347e6b3b0cc48eb1d7fd3bac1ca2d77ae1746498ad7->enter($__internal_32cd94d3b37bd3a160d75347e6b3b0cc48eb1d7fd3bac1ca2d77ae1746498ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Profile:base_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32cd94d3b37bd3a160d75347e6b3b0cc48eb1d7fd3bac1ca2d77ae1746498ad7->leave($__internal_32cd94d3b37bd3a160d75347e6b3b0cc48eb1d7fd3bac1ca2d77ae1746498ad7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_da2ea2ef9755294b05522c6508109adee6e7839b3cd98fecf7ada04ad0ee15bc = $this->env->getExtension("native_profiler");
        $__internal_da2ea2ef9755294b05522c6508109adee6e7839b3cd98fecf7ada04ad0ee15bc->enter($__internal_da2ea2ef9755294b05522c6508109adee6e7839b3cd98fecf7ada04ad0ee15bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profile Section";
        
        $__internal_da2ea2ef9755294b05522c6508109adee6e7839b3cd98fecf7ada04ad0ee15bc->leave($__internal_da2ea2ef9755294b05522c6508109adee6e7839b3cd98fecf7ada04ad0ee15bc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01fe6c316c9f63be07fdb347f4ab59cbaa4dd98884d492bb0e7cd64ed31f9127 = $this->env->getExtension("native_profiler");
        $__internal_01fe6c316c9f63be07fdb347f4ab59cbaa4dd98884d492bb0e7cd64ed31f9127->enter($__internal_01fe6c316c9f63be07fdb347f4ab59cbaa4dd98884d492bb0e7cd64ed31f9127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01fe6c316c9f63be07fdb347f4ab59cbaa4dd98884d492bb0e7cd64ed31f9127->leave($__internal_01fe6c316c9f63be07fdb347f4ab59cbaa4dd98884d492bb0e7cd64ed31f9127_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4eed81d9521fabc578e00ea770cda0d1fe9503b957874206aabbd96e25ef0a5 = $this->env->getExtension("native_profiler");
        $__internal_c4eed81d9521fabc578e00ea770cda0d1fe9503b957874206aabbd96e25ef0a5->enter($__internal_c4eed81d9521fabc578e00ea770cda0d1fe9503b957874206aabbd96e25ef0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4eed81d9521fabc578e00ea770cda0d1fe9503b957874206aabbd96e25ef0a5->leave($__internal_c4eed81d9521fabc578e00ea770cda0d1fe9503b957874206aabbd96e25ef0a5_prof);

    }

    // line 13
    public function block_extraOptions($context, array $blocks = array())
    {
        $__internal_4e285224c0c955a9fb3e2965a54119fc5fa25ebc0c2d923454c50fe88b30d03b = $this->env->getExtension("native_profiler");
        $__internal_4e285224c0c955a9fb3e2965a54119fc5fa25ebc0c2d923454c50fe88b30d03b->enter($__internal_4e285224c0c955a9fb3e2965a54119fc5fa25ebc0c2d923454c50fe88b30d03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraOptions"));

        
        $__internal_4e285224c0c955a9fb3e2965a54119fc5fa25ebc0c2d923454c50fe88b30d03b->leave($__internal_4e285224c0c955a9fb3e2965a54119fc5fa25ebc0c2d923454c50fe88b30d03b_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a2659f720a5e7fd13c06f72bfbd19fda5bc8522cb0a33af7d701f50c872189e = $this->env->getExtension("native_profiler");
        $__internal_1a2659f720a5e7fd13c06f72bfbd19fda5bc8522cb0a33af7d701f50c872189e->enter($__internal_1a2659f720a5e7fd13c06f72bfbd19fda5bc8522cb0a33af7d701f50c872189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_1a2659f720a5e7fd13c06f72bfbd19fda5bc8522cb0a33af7d701f50c872189e->leave($__internal_1a2659f720a5e7fd13c06f72bfbd19fda5bc8522cb0a33af7d701f50c872189e_prof);

    }

    // line 16
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_a958c80d19c485fc0ded4e4e7edcf8fb3391f40e0b5e14c27833991f470144d2 = $this->env->getExtension("native_profiler");
        $__internal_a958c80d19c485fc0ded4e4e7edcf8fb3391f40e0b5e14c27833991f470144d2->enter($__internal_a958c80d19c485fc0ded4e4e7edcf8fb3391f40e0b5e14c27833991f470144d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        
        $__internal_a958c80d19c485fc0ded4e4e7edcf8fb3391f40e0b5e14c27833991f470144d2->leave($__internal_a958c80d19c485fc0ded4e4e7edcf8fb3391f40e0b5e14c27833991f470144d2_prof);

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
        return array (  116 => 16,  105 => 15,  94 => 13,  87 => 16,  85 => 15,  82 => 14,  80 => 13,  76 => 12,  68 => 6,  62 => 5,  51 => 3,  39 => 2,  11 => 1,);
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
