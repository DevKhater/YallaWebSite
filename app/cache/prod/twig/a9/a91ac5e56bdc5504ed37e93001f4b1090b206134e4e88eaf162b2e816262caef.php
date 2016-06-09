<?php

/* YallaWebsiteBackendBundle:Gallery:edit.html.twig */
class __TwigTemplate_245105fa9b233f5473989a3dbe760c32f78510f811a2487dc68309181447a758 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 4
        echo "
    <form enctype=\"multipart/form-data\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\" form-custom\" method=\"POST\">
        <strong><span>Change Gallery Name</span></strong> 
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <br style=\"clear: both\"/>
";
        // line 30
        echo "        <input type=\"submit\" value=\"Save\"/>

    </form>



";
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
        return array (  44 => 30,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
