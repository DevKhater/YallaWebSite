<?php

/* YallaWebsiteBackendBundle:Member:edit.html.twig */
class __TwigTemplate_40074c92f0f7b5ae6e2b1ae47d3886275c2d7da52667c55d2426721a607dd795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Member:base_member.html.twig", "YallaWebsiteBackendBundle:Member:edit.html.twig", 1);
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
        $__internal_9df98194918c74182bf42b3f18bb6c3977f9f4deb6526fe1067b71f7930aaa36 = $this->env->getExtension("native_profiler");
        $__internal_9df98194918c74182bf42b3f18bb6c3977f9f4deb6526fe1067b71f7930aaa36->enter($__internal_9df98194918c74182bf42b3f18bb6c3977f9f4deb6526fe1067b71f7930aaa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Member:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9df98194918c74182bf42b3f18bb6c3977f9f4deb6526fe1067b71f7930aaa36->leave($__internal_9df98194918c74182bf42b3f18bb6c3977f9f4deb6526fe1067b71f7930aaa36_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_dc984d80016a42d0318c85c452856594227ffdfdc69642c0e12d8776819bd28b = $this->env->getExtension("native_profiler");
        $__internal_dc984d80016a42d0318c85c452856594227ffdfdc69642c0e12d8776819bd28b->enter($__internal_dc984d80016a42d0318c85c452856594227ffdfdc69642c0e12d8776819bd28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Member
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_member_edit", array("id" => $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <div class=\"col-lg-9\">
                    <div class=\"form-group\">
                        <label for=\"name\">Member Name</label>
                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"form-group\">
                        <label for=\"date\">Website</label>
                        ";
        // line 18
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
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_dc984d80016a42d0318c85c452856594227ffdfdc69642c0e12d8776819bd28b->leave($__internal_dc984d80016a42d0318c85c452856594227ffdfdc69642c0e12d8776819bd28b_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Member:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  77 => 26,  71 => 23,  63 => 18,  54 => 12,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Member:base_member.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Edit Member*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_member_edit',  {'id': member.id})}}" method="POST">*/
/*                 <div class="col-lg-9">*/
/*                     <div class="form-group">*/
/*                         <label for="name">Member Name</label>*/
/*                         {{ form_widget(form.name)}}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <div class="form-group">*/
/*                         <label for="date">Website</label>*/
/*                         {{ form_widget(form.website)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="media">Cover Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                     {{ form_errors(form) }}*/
/*                     {{ form_row(form._token) }}*/
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
