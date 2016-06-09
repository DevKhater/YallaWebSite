<?php

/* YallaWebsiteBackendBundle:Member:new.html.twig */
class __TwigTemplate_248a9e83a4216145c106223bc31a2b6203d55561fb453baef62453ca3ff1e3f9 extends Twig_Template
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
        $__internal_07d02eade104b8eda1ea7a404005e02a59d9ec930834573115418e828687d561 = $this->env->getExtension("native_profiler");
        $__internal_07d02eade104b8eda1ea7a404005e02a59d9ec930834573115418e828687d561->enter($__internal_07d02eade104b8eda1ea7a404005e02a59d9ec930834573115418e828687d561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Member:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07d02eade104b8eda1ea7a404005e02a59d9ec930834573115418e828687d561->leave($__internal_07d02eade104b8eda1ea7a404005e02a59d9ec930834573115418e828687d561_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_fb8da5f6df1853fc192fb23f9ebe11e6d46ff3c96cad7a59119b1c718ada32c9 = $this->env->getExtension("native_profiler");
        $__internal_fb8da5f6df1853fc192fb23f9ebe11e6d46ff3c96cad7a59119b1c718ada32c9->enter($__internal_fb8da5f6df1853fc192fb23f9ebe11e6d46ff3c96cad7a59119b1c718ada32c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_fb8da5f6df1853fc192fb23f9ebe11e6d46ff3c96cad7a59119b1c718ada32c9->leave($__internal_fb8da5f6df1853fc192fb23f9ebe11e6d46ff3c96cad7a59119b1c718ada32c9_prof);

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
