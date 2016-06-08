<?php

/* YallaWebsiteBackendBundle:Artist:edit.html.twig */
class __TwigTemplate_fcebf2b933c593f46181098cf6381b19e5c5d0f8978e164d639a8714c83bf8a2 extends Twig_Template
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
        $__internal_b1285615d0ce71363a24112a4efb70be890eb3cb405e6aac7bf70684ab919796 = $this->env->getExtension("native_profiler");
        $__internal_b1285615d0ce71363a24112a4efb70be890eb3cb405e6aac7bf70684ab919796->enter($__internal_b1285615d0ce71363a24112a4efb70be890eb3cb405e6aac7bf70684ab919796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Artist:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1285615d0ce71363a24112a4efb70be890eb3cb405e6aac7bf70684ab919796->leave($__internal_b1285615d0ce71363a24112a4efb70be890eb3cb405e6aac7bf70684ab919796_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_91e91082bfdee0a2ac9f1c7b2e90aa1e8870484589ded9890a0a5bf16ab75289 = $this->env->getExtension("native_profiler");
        $__internal_91e91082bfdee0a2ac9f1c7b2e90aa1e8870484589ded9890a0a5bf16ab75289->enter($__internal_91e91082bfdee0a2ac9f1c7b2e90aa1e8870484589ded9890a0a5bf16ab75289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Event
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_artist_edit", array("id" => $this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

                <div class=\"col-lg-9\">
                    <div class=\"form-group\">
                        <label for=\"title\">Artist Name</label>
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Artist Biography</label>
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "biography", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Artist Links</label>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sm", array()), 'widget');
        echo "
                    </div>




                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>

                </div>
                <div class=\"col-lg-3\" style=\"text-align: center\">
                    ";
        // line 41
        if (array_key_exists("artist", $context)) {
            // line 42
            echo "                        ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "media", array()), "medium", array("class" => "img-thumbnail"));
            // line 43
            echo "                    ";
        }
        // line 44
        echo "                </div>


            </form>
        </div>
    ";
        
        $__internal_91e91082bfdee0a2ac9f1c7b2e90aa1e8870484589ded9890a0a5bf16ab75289->leave($__internal_91e91082bfdee0a2ac9f1c7b2e90aa1e8870484589ded9890a0a5bf16ab75289_prof);

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
        return array (  109 => 44,  106 => 43,  103 => 42,  101 => 41,  92 => 35,  88 => 34,  82 => 31,  71 => 23,  63 => 18,  55 => 13,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
