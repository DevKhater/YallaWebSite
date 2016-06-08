<?php

/* YallaWebsiteBackendBundle:User:edit.html.twig */
class __TwigTemplate_ef2649aebf78b87fbc78c2299a268feab1f76125fb34ac785a33f4d5fde4fe64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:User:base_user.html.twig", "YallaWebsiteBackendBundle:User:edit.html.twig", 1);
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
        $__internal_1e79d4585296ce856def8c734198fd640b3042adbb375fc3f28ab4e1e912e505 = $this->env->getExtension("native_profiler");
        $__internal_1e79d4585296ce856def8c734198fd640b3042adbb375fc3f28ab4e1e912e505->enter($__internal_1e79d4585296ce856def8c734198fd640b3042adbb375fc3f28ab4e1e912e505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e79d4585296ce856def8c734198fd640b3042adbb375fc3f28ab4e1e912e505->leave($__internal_1e79d4585296ce856def8c734198fd640b3042adbb375fc3f28ab4e1e912e505_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_38dd7ea61c2f055dea51234860f95419714aa7e88fe84db6d368105fa0db633f = $this->env->getExtension("native_profiler");
        $__internal_38dd7ea61c2f055dea51234860f95419714aa7e88fe84db6d368105fa0db633f->enter($__internal_38dd7ea61c2f055dea51234860f95419714aa7e88fe84db6d368105fa0db633f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Privilage
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_user_addpriv", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\">
                <div class=\"col-lg-12\">
                    <div class=\"form-group\" style=\"min-height: 400px;\">

                        
                            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "privileg", array()), 'widget');
        echo "
                        
                    </div>
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
                </div>

            </form>
        </div>
    ";
        
        $__internal_38dd7ea61c2f055dea51234860f95419714aa7e88fe84db6d368105fa0db633f->leave($__internal_38dd7ea61c2f055dea51234860f95419714aa7e88fe84db6d368105fa0db633f_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:User:base_user.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Edit Privilage*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_user_addpriv', {'id': id})}}" method="POST">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="form-group" style="min-height: 400px;">*/
/* */
/*                         */
/*                             {{ form_widget(form.privileg) }}*/
/*                         */
/*                     </div>*/
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/*                 </div>*/
/* */
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
