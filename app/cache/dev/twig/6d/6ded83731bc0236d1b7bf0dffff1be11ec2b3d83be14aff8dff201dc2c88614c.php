<?php

/* YallaWebsiteBackendBundle:Photographer:new.html.twig */
class __TwigTemplate_e153e5aacf01df19bc16696b07bd53ba20c39371442ffa97ba7a704e1dd8ebfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig", "YallaWebsiteBackendBundle:Photographer:new.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89098c279f5fadca98ceffda6757ef13bc01c453d15947f3bcc9ea2d9ff382ca = $this->env->getExtension("native_profiler");
        $__internal_89098c279f5fadca98ceffda6757ef13bc01c453d15947f3bcc9ea2d9ff382ca->enter($__internal_89098c279f5fadca98ceffda6757ef13bc01c453d15947f3bcc9ea2d9ff382ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Photographer:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89098c279f5fadca98ceffda6757ef13bc01c453d15947f3bcc9ea2d9ff382ca->leave($__internal_89098c279f5fadca98ceffda6757ef13bc01c453d15947f3bcc9ea2d9ff382ca_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_e5189c0860ef1f0a9b20a51e1d21b024b445b117894dcde9d79e7b215bc92915 = $this->env->getExtension("native_profiler");
        $__internal_e5189c0860ef1f0a9b20a51e1d21b024b445b117894dcde9d79e7b215bc92915->enter($__internal_e5189c0860ef1f0a9b20a51e1d21b024b445b117894dcde9d79e7b215bc92915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Create Photographer
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("backend_photographer_new");
        echo "\" class=\"\" method=\"POST\">        
                <div class=\"form-group\">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "                    
                </div>
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
            </form>
        </div>
    </div>
";
        
        $__internal_e5189c0860ef1f0a9b20a51e1d21b024b445b117894dcde9d79e7b215bc92915->leave($__internal_e5189c0860ef1f0a9b20a51e1d21b024b445b117894dcde9d79e7b215bc92915_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Photographer:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Photographer:base_photographer.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Create Photographer*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_photographer_new') }}" class="" method="POST">        */
/*                 <div class="form-group">*/
/*                     {{ form_widget(form)}}                    */
/*                 </div>*/
/*                 <input type="submit" class="btn btn-default" value="Save"/>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
