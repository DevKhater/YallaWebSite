<?php

/* YallaWebsiteBackendBundle:Member:new.html.twig */
class __TwigTemplate_6980ea7ccf5cde88ca49466230951c9aeb5aa03c853fdc4ee7e32fa37a6c236a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Member:base_member.html.twig", "YallaWebsiteBackendBundle:Member:new.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Member:base_member.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2a687609d6c69f3a4df2b35352c202f09badf274c4226698c1132f259f85bdf = $this->env->getExtension("native_profiler");
        $__internal_b2a687609d6c69f3a4df2b35352c202f09badf274c4226698c1132f259f85bdf->enter($__internal_b2a687609d6c69f3a4df2b35352c202f09badf274c4226698c1132f259f85bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Member:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2a687609d6c69f3a4df2b35352c202f09badf274c4226698c1132f259f85bdf->leave($__internal_b2a687609d6c69f3a4df2b35352c202f09badf274c4226698c1132f259f85bdf_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_6d1348fb90f6b54ecff73ad2174137ca0a296a703c324af0720dfe50ad032d50 = $this->env->getExtension("native_profiler");
        $__internal_6d1348fb90f6b54ecff73ad2174137ca0a296a703c324af0720dfe50ad032d50->enter($__internal_6d1348fb90f6b54ecff73ad2174137ca0a296a703c324af0720dfe50ad032d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Create Member
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("backend_member_new");
        echo "\" method=\"POST\">
                <div class=\"form-group\">
                    <label for=\"name\">Member Name</label>
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                </div>

                <div class=\"form-group\">
                    <label for=\"date\">Website</label>
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget');
        echo "
                </div>


                <div class=\"form-group\">
                    <label for=\"media\">Cover Image</label>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                    <p class=\"help-block\">Only Images.</p>
                </div>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>

            </form>
        </div>
    </div>
";
        
        $__internal_6d1348fb90f6b54ecff73ad2174137ca0a296a703c324af0720dfe50ad032d50->leave($__internal_6d1348fb90f6b54ecff73ad2174137ca0a296a703c324af0720dfe50ad032d50_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Member:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  77 => 26,  71 => 23,  62 => 17,  54 => 12,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Member:base_member.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Create Member*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_member_new')}}" method="POST">*/
/*                 <div class="form-group">*/
/*                     <label for="name">Member Name</label>*/
/*                     {{ form_widget(form.name)}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="date">Website</label>*/
/*                     {{ form_widget(form.website)}}*/
/*                 </div>*/
/* */
/* */
/*                 <div class="form-group">*/
/*                     <label for="media">Cover Image</label>*/
/*                     {{ form_widget(form.media)}}*/
/*                     <p class="help-block">Only Images.</p>*/
/*                 </div>*/
/*                 {{ form_errors(form) }}*/
/*                 {{ form_row(form._token) }}*/
/*                 <input type="submit" class="btn btn-default" value="Save"/>*/
/* */
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
