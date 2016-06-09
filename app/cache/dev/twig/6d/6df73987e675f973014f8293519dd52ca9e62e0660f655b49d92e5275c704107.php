<?php

/* YallaWebsiteBackendBundle:User:edit.html.twig */
class __TwigTemplate_c3dbd3d5cf542672c2eb2e411a04c71833ba1cd0bc34f357c1a6d8bca46030ed extends Twig_Template
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
        $__internal_d59b85e3bc15cbb344c9edab979302559ba5d878350297f417f0c5549153f2c2 = $this->env->getExtension("native_profiler");
        $__internal_d59b85e3bc15cbb344c9edab979302559ba5d878350297f417f0c5549153f2c2->enter($__internal_d59b85e3bc15cbb344c9edab979302559ba5d878350297f417f0c5549153f2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59b85e3bc15cbb344c9edab979302559ba5d878350297f417f0c5549153f2c2->leave($__internal_d59b85e3bc15cbb344c9edab979302559ba5d878350297f417f0c5549153f2c2_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_b2ec7144d06bbc4d547a57b7d1bfcde6d7bfa55b700e7a0b256196bd2f6e01db = $this->env->getExtension("native_profiler");
        $__internal_b2ec7144d06bbc4d547a57b7d1bfcde6d7bfa55b700e7a0b256196bd2f6e01db->enter($__internal_b2ec7144d06bbc4d547a57b7d1bfcde6d7bfa55b700e7a0b256196bd2f6e01db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_b2ec7144d06bbc4d547a57b7d1bfcde6d7bfa55b700e7a0b256196bd2f6e01db->leave($__internal_b2ec7144d06bbc4d547a57b7d1bfcde6d7bfa55b700e7a0b256196bd2f6e01db_prof);

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
