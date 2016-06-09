<?php

/* YallaWebsiteBackendBundle:Gallery:add.html.twig */
class __TwigTemplate_0120e9e84ef711d1bd39d77edc32dcba3384275eee762b20c90f478370a5749d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig", "YallaWebsiteBackendBundle:Gallery:add.html.twig", 1);
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

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Agg Images To Gallery
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_gallery_add_images_gallery", array("id" => (isset($context["data"]) ? $context["data"] : null))), "html", null, true);
        echo "\" method=\"POST\">
                <div class=\"form-group\">
                    <label for=\"media\">Add Images</label>
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addForm"]) ? $context["addForm"] : null), 'widget');
        echo "
                    <p class=\"help-block\">Only Images.</p>
                </div>

                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addForm"]) ? $context["addForm"] : null), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["addForm"]) ? $context["addForm"] : null), "_token", array()), 'row');
        echo "
                <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
        </div>

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Gallery:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  51 => 15,  44 => 11,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Gallery:base_gallery.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Agg Images To Gallery*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_gallery_add_images_gallery', {'id': data}) }}" method="POST">*/
/*                 <div class="form-group">*/
/*                     <label for="media">Add Images</label>*/
/*                     {{ form_widget(addForm)}}*/
/*                     <p class="help-block">Only Images.</p>*/
/*                 </div>*/
/* */
/*                 {{ form_errors(addForm) }}*/
/*                 {{ form_row(addForm._token) }}*/
/*                 <input type="submit" class="btn btn-default" value="Save"/>*/
/*         </div>*/
/* */
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
