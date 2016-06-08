<?php

/* SonataMediaBundle:Form:media_widgets.html.twig */
class __TwigTemplate_743cfb87b4fa46d1f877c7acd54cb61eda4392d251a30ac0606c019c8d916f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_media_type_widget' => array($this, 'block_sonata_media_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4a7b276153d62b1554e6c93ae5b7bb7c13e2d598463154052740439c11b4e0b = $this->env->getExtension("native_profiler");
        $__internal_e4a7b276153d62b1554e6c93ae5b7bb7c13e2d598463154052740439c11b4e0b->enter($__internal_e4a7b276153d62b1554e6c93ae5b7bb7c13e2d598463154052740439c11b4e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Form:media_widgets.html.twig"));

        // line 1
        $this->displayBlock('sonata_media_type_widget', $context, $blocks);
        
        $__internal_e4a7b276153d62b1554e6c93ae5b7bb7c13e2d598463154052740439c11b4e0b->leave($__internal_e4a7b276153d62b1554e6c93ae5b7bb7c13e2d598463154052740439c11b4e0b_prof);

    }

    public function block_sonata_media_type_widget($context, array $blocks = array())
    {
        $__internal_9030a8e5d310686babe2ee930f0cb7db15a4f184ab11dbeac4b944d32613af55 = $this->env->getExtension("native_profiler");
        $__internal_9030a8e5d310686babe2ee930f0cb7db15a4f184ab11dbeac4b944d32613af55->enter($__internal_9030a8e5d310686babe2ee930f0cb7db15a4f184ab11dbeac4b944d32613af55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_media_type_widget"));

        // line 2
        echo "    <div class=\"span3 pull-left\">
        ";
        // line 3
        if (( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "providerReference", array()))) {
            // line 4
            echo "            <div class=\"pull-left\" style=\"margin-right: 5px\">
                ";
            // line 5
            echo $this->env->getExtension('sonata_media')->thumbnail((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "admin", array("class" => "img-polaroid media-object"));
            // line 6
            echo "            </div>

            ";
            // line 8
            if ((array_key_exists("sonata_admin_enabled", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
                // line 9
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_media_media_edit", array("id" => $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "name", array()), "html", null, true);
                echo "</strong></a>
            ";
            } else {
                // line 11
                echo "                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "name", array()), "html", null, true);
                echo "</strong>
            ";
            }
            // line 13
            echo "             <br />
            <span type=\"label\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span> ~ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "context", array()), "html", null, true);
            echo "
        ";
        } else {
            // line 16
            echo "            <div class=\"pull-left\" style=\"margin-right: 5px\">
                <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonatamedia/grey.png"), "html", null, true);
            echo "\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
            </div>
            <strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_linked_media", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong> <br />
            <span type=\"label\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "provider", array(), "array"), array(), "SonataMediaBundle"), "html", null, true);
            echo " ~ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "context", array(), "array"), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
        ";
        }
        // line 22
        echo "    </div>

    <div class=\"span3 pull-left\">
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_media", array(), "SonataMediaBundle"), "html", null, true);
        echo "
        ";
        // line 26
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_9030a8e5d310686babe2ee930f0cb7db15a4f184ab11dbeac4b944d32613af55->leave($__internal_9030a8e5d310686babe2ee930f0cb7db15a4f184ab11dbeac4b944d32613af55_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Form:media_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  99 => 25,  94 => 22,  87 => 20,  83 => 19,  78 => 17,  75 => 16,  68 => 14,  65 => 13,  59 => 11,  51 => 9,  49 => 8,  45 => 6,  43 => 5,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block sonata_media_type_widget %}*/
/*     <div class="span3 pull-left">*/
/*         {% if value is not empty and value.providerReference %}*/
/*             <div class="pull-left" style="margin-right: 5px">*/
/*                 {% thumbnail value, 'admin' with {'class': 'img-polaroid media-object'} %}*/
/*             </div>*/
/* */
/*             {% if sonata_admin_enabled is defined and sonata_admin_enabled %}*/
/*                 <a href="{{ url('admin_sonata_media_media_edit', {id: value.id}) }}"><strong>{{ value.name }}</strong></a>*/
/*             {% else %}*/
/*                 <strong>{{ value.name }}</strong>*/
/*             {% endif %}*/
/*              <br />*/
/*             <span type="label">{{ value.providerName|trans({}, 'SonataMediaBundle') }}</span> ~ {{ value.context }}*/
/*         {% else %}*/
/*             <div class="pull-left" style="margin-right: 5px">*/
/*                 <img src="{{ asset('bundles/sonatamedia/grey.png') }}" class="img-polaroid media-object" style="width: 85px; height: 85px"/>*/
/*             </div>*/
/*             <strong>{{ 'no_linked_media'|trans({}, 'SonataMediaBundle') }}</strong> <br />*/
/*             <span type="label">{{ form.vars['provider']|trans({}, 'SonataMediaBundle') }} ~ {{ form.vars['context']|trans({}, 'SonataMediaBundle') }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <div class="span3 pull-left">*/
/*         {{ 'link_media'|trans({}, 'SonataMediaBundle') }}*/
/*         {{ block('form_widget') }}*/
/*     </div>*/
/* {% endblock sonata_media_type_widget %}*/
/* */
