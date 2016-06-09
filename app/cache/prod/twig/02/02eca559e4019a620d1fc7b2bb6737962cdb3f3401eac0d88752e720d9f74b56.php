<?php

/* YallaWebsiteBackendBundle:Member:new.html.twig */
class __TwigTemplate_a74142d1d9776005a1cd07518ea207e853fa893455ea2f7ee11404096b2fcd68 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                </div>

                <div class=\"form-group\">
                    <label for=\"date\">Website</label>
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "website", array()), 'widget');
        echo "
                </div>


                <div class=\"form-group\">
                    <label for=\"media\">Cover Image</label>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "media", array()), 'widget');
        echo "
                    <p class=\"help-block\">Only Images.</p>
                </div>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>

            </form>
        </div>
    </div>
";
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
        return array (  72 => 27,  68 => 26,  62 => 23,  53 => 17,  45 => 12,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
