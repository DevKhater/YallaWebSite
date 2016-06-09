<?php

/* YallaWebsiteBackendBundle:Artist:edit.html.twig */
class __TwigTemplate_6fb1bad9d711605ded2732203b1dd77415c4887a5e43a5876935e6e6844efa6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Artist:base_artist.html.twig", "YallaWebsiteBackendBundle:Artist:edit.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Artist:base_artist.html.twig";
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
            Edit Event
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_edit", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

                <div class=\"col-lg-9\">
                    <div class=\"form-group\">
                        <label for=\"title\">Artist Name</label>
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Artist Biography</label>
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "biography", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Artist Links</label>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sm", array()), 'widget');
        echo "
                    </div>




                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "

                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>

                </div>
                <div class=\"col-lg-3\" style=\"text-align: center\">
                    ";
        // line 41
        if (array_key_exists("artist", $context)) {
            // line 42
            echo "                        ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["artist"]) ? $context["artist"] : null), "media", array()), "medium", array("class" => "img-thumbnail"));
            // line 43
            echo "                    ";
        }
        // line 44
        echo "                </div>


            </form>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Artist:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  97 => 43,  94 => 42,  92 => 41,  83 => 35,  79 => 34,  73 => 31,  62 => 23,  54 => 18,  46 => 13,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Artist:base_artist.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Edit Event*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_artist_edit',  {'id': artist.id})}}" method="POST">*/
/* */
/*                 <div class="col-lg-9">*/
/*                     <div class="form-group">*/
/*                         <label for="title">Artist Name</label>*/
/*                         {{ form_widget(form.title)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Artist Biography</label>*/
/*                         {{ form_widget(form.biography)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Artist Links</label>*/
/*                         {{ form_widget(form.sm)}}*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/*                     <div class="form-group">*/
/*                         <label for="media">Cover Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                     {{ form_errors(form) }}*/
/*                     {{ form_row(form._token) }}*/
/* */
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/* */
/*                 </div>*/
/*                 <div class="col-lg-3" style="text-align: center">*/
/*                     {% if artist is defined %}*/
/*                         {% thumbnail  artist.media, 'medium'  with {'class': 'img-thumbnail'} %}*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/* */
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
