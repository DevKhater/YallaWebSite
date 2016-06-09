<?php

/* YallaWebsiteBackendBundle:Gallery:edit.html.twig */
class __TwigTemplate_1ebd874d20f7825b8ba0c6730ca9174dcd83c47a17af4e84bc6ad7b84ca9548d extends Twig_Template
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
        $__internal_04ce2ee71b66510b5bae8b2fcf8304527d61f94225d6491d4f9ca475ce98730a = $this->env->getExtension("native_profiler");
        $__internal_04ce2ee71b66510b5bae8b2fcf8304527d61f94225d6491d4f9ca475ce98730a->enter($__internal_04ce2ee71b66510b5bae8b2fcf8304527d61f94225d6491d4f9ca475ce98730a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Gallery:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ce2ee71b66510b5bae8b2fcf8304527d61f94225d6491d4f9ca475ce98730a->leave($__internal_04ce2ee71b66510b5bae8b2fcf8304527d61f94225d6491d4f9ca475ce98730a_prof);

    }

    // line 3
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_2dd4a38f3f61aad395c3e5708d479f0d0e42e3cc885c5985220379ce645d2873 = $this->env->getExtension("native_profiler");
        $__internal_2dd4a38f3f61aad395c3e5708d479f0d0e42e3cc885c5985220379ce645d2873->enter($__internal_2dd4a38f3f61aad395c3e5708d479f0d0e42e3cc885c5985220379ce645d2873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

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
        
        $__internal_2dd4a38f3f61aad395c3e5708d479f0d0e42e3cc885c5985220379ce645d2873->leave($__internal_2dd4a38f3f61aad395c3e5708d479f0d0e42e3cc885c5985220379ce645d2873_prof);

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
