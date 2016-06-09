<?php

/* YallaWebsiteBackendBundle:Venue:edit.html.twig */
class __TwigTemplate_2a79df88d267ac532def389fb55deecf0e995e024d2531838d30fd36ef2fefae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Venue:base_venue.html.twig", "YallaWebsiteBackendBundle:Venue:edit.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Venue:base_venue.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a9ab6beefa3d8ab1f0ec574c56ad9b8fdc165c602299d2e51cebedcb924cf20 = $this->env->getExtension("native_profiler");
        $__internal_6a9ab6beefa3d8ab1f0ec574c56ad9b8fdc165c602299d2e51cebedcb924cf20->enter($__internal_6a9ab6beefa3d8ab1f0ec574c56ad9b8fdc165c602299d2e51cebedcb924cf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Venue:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9ab6beefa3d8ab1f0ec574c56ad9b8fdc165c602299d2e51cebedcb924cf20->leave($__internal_6a9ab6beefa3d8ab1f0ec574c56ad9b8fdc165c602299d2e51cebedcb924cf20_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_0e3a7bf5ea5b5ff147ebca8cb64bf93074b987c623fce3ffdff51213212f712b = $this->env->getExtension("native_profiler");
        $__internal_0e3a7bf5ea5b5ff147ebca8cb64bf93074b987c623fce3ffdff51213212f712b->enter($__internal_0e3a7bf5ea5b5ff147ebca8cb64bf93074b987c623fce3ffdff51213212f712b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Event
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_edit", array("id" => $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <div class=\"col-lg-9\">
                    <div class=\"form-group\">
                        <label for=\"title\">Venue Name</label>
                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Venue Information</label>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
                    </div>
                                        <div class=\"form-group\">
                        <label for=\"date\">Venue Working From</label>
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "workingFrom", array()), 'widget');
        echo "
                        <label for=\"date\">Venue Working To</label>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "workingTo", array()), 'widget');
        echo "
                    </div>


                </div>
                <div class=\"col-lg-3\" style=\"text-align: center\">
                    ";
        // line 29
        if (array_key_exists("venue", $context)) {
            // line 30
            echo "                        ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "media", array()), "medium", array("class" => "img-thumbnail"));
            // line 31
            echo "                    ";
        }
        echo "</div>

                <div class=\"col-lg-12\">
                    <div class=\"form-group\">
                        <label for=\"date\">Website</label>
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"date\">Venue Description</label>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                    </div>
                    <div class='form-group'>
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "

                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 46
            echo "                            ";
            if ($context["tag"]) {
                // line 47
                echo "
                                <span class=\"label label-primary\">
                                    ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "

                                    

                                </span>
                            ";
            }
            // line 55
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </div>
                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
                </div>
            </form>
        </div>
    ";
        
        $__internal_0e3a7bf5ea5b5ff147ebca8cb64bf93074b987c623fce3ffdff51213212f712b->leave($__internal_0e3a7bf5ea5b5ff147ebca8cb64bf93074b987c623fce3ffdff51213212f712b_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Venue:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 63,  152 => 62,  146 => 59,  141 => 56,  135 => 55,  126 => 49,  122 => 47,  119 => 46,  115 => 45,  110 => 43,  104 => 40,  97 => 36,  88 => 31,  85 => 30,  83 => 29,  74 => 23,  69 => 21,  62 => 17,  54 => 12,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Venue:base_venue.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Edit Event*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_venue_edit',  {'id': venue.id})}}" method="POST">*/
/*                 <div class="col-lg-9">*/
/*                     <div class="form-group">*/
/*                         <label for="title">Venue Name</label>*/
/*                         {{ form_widget(form.title)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Venue Information</label>*/
/*                         {{ form_widget(form.location)}}*/
/*                     </div>*/
/*                                         <div class="form-group">*/
/*                         <label for="date">Venue Working From</label>*/
/*                         {{ form_widget(form.workingFrom)}}*/
/*                         <label for="date">Venue Working To</label>*/
/*                         {{ form_widget(form.workingTo)}}*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/*                 <div class="col-lg-3" style="text-align: center">*/
/*                     {% if venue is defined %}*/
/*                         {% thumbnail  venue.media, 'medium'  with {'class': 'img-thumbnail'} %}*/
/*                     {% endif %}</div>*/
/* */
/*                 <div class="col-lg-12">*/
/*                     <div class="form-group">*/
/*                         <label for="date">Website</label>*/
/*                         {{ form_widget(form.website)}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="date">Venue Description</label>*/
/*                         {{ form_widget(form.content)}}*/
/*                     </div>*/
/*                     <div class='form-group'>*/
/*                         {{ form_row(form.tags) }}*/
/* */
/*                         {% for tag in venue.tags %}*/
/*                             {% if tag %}*/
/* */
/*                                 <span class="label label-primary">*/
/*                                     {{ tag.name }}*/
/* */
/*                                     */
/* */
/*                                 </span>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="media">Cover Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                         {{ form_errors(form) }}*/
/*                         {{ form_row(form._token) }}*/
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
