<?php

/* YallaWebsiteBackendBundle:Gallery:edit.html.twig */
class __TwigTemplate_da2647c014795ea6688ad72863e3bc0f92c3b74afc9bc3c4d97ea7c6997a4d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig", "YallaWebsiteBackendBundle:Gallery:edit.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb75ceb014a9f28dd7abe895dca53889483c1d3dd77187ce94a2fdaba81f6705 = $this->env->getExtension("native_profiler");
        $__internal_cb75ceb014a9f28dd7abe895dca53889483c1d3dd77187ce94a2fdaba81f6705->enter($__internal_cb75ceb014a9f28dd7abe895dca53889483c1d3dd77187ce94a2fdaba81f6705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb75ceb014a9f28dd7abe895dca53889483c1d3dd77187ce94a2fdaba81f6705->leave($__internal_cb75ceb014a9f28dd7abe895dca53889483c1d3dd77187ce94a2fdaba81f6705_prof);

    }

    // line 3
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_9b411ec1f0cd8b79832287ce0751cd86ae6195425985c42e9e089218e5aa8632 = $this->env->getExtension("native_profiler");
        $__internal_9b411ec1f0cd8b79832287ce0751cd86ae6195425985c42e9e089218e5aa8632->enter($__internal_9b411ec1f0cd8b79832287ce0751cd86ae6195425985c42e9e089218e5aa8632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 4
        echo "
    <form enctype=\"multipart/form-data\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\" form-custom\" method=\"POST\">
        <strong><span>Change Gallery Name</span></strong> 
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br style=\"clear: both\"/>
";
        // line 30
        echo "        <input type=\"submit\" value=\"Save\"/>

    </form>



";
        
        $__internal_9b411ec1f0cd8b79832287ce0751cd86ae6195425985c42e9e089218e5aa8632->leave($__internal_9b411ec1f0cd8b79832287ce0751cd86ae6195425985c42e9e089218e5aa8632_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Gallery:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 30,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig" %}*/
/* */
/* {% block controlleraction  %}*/
/* */
/*     <form enctype="multipart/form-data" action="{{ path ('backend_gallery_edit', {'id': entity.id})}}" class=" form-custom" method="POST">*/
/*         <strong><span>Change Gallery Name</span></strong> */
/*         {{ form_widget(form) }}*/
/*         <br style="clear: both"/>*/
/* {#*/
/*         <div class='form-group'>*/
/*             {{ form_row(editForm.tags) }}*/
/* */
/*             {% for tag in entity.getTags %}*/
/*                 {% if tag %}*/
/* */
/*                     <span class="label label-primary">*/
/*                         {{ tag.name }}*/
/* */
/*                         {% for tr in tag.getTagRelation %}*/
/* */
/*                             <a href="{{ path('mykees_delete_relation',{'relation_id':tr.id}) }}" class="delTag">[x]*/
/*                             </a>*/
/* */
/*                         {% endfor %}*/
/* */
/*                     </span>*/
/*                 {% endif %} */
/*             {% endfor %}*/
/*         </div>#}*/
/*         <input type="submit" value="Save"/>*/
/* */
/*     </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* {#*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {{ mk_tag_javascript() }}*/
/* {% endblock %}#}*/
