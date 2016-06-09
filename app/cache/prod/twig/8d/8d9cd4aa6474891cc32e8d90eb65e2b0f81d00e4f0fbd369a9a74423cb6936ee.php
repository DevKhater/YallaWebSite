<?php

/* YallaWebsiteBackendBundle:Venue:edit.html.twig */
class __TwigTemplate_b30c15767ad7c8134a2da5e7ba2dd36b95f330a55364e18411b95769dc9a3887 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_venue_edit", array("id" => $this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <div class=\"col-lg-9\">
                    <div class=\"form-group\">
                        <label for=\"title\">Venue Name</label>
                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Venue Information</label>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array()), 'widget');
        echo "
                    </div>
                                        <div class=\"form-group\">
                        <label for=\"date\">Venue Working From</label>
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "workingFrom", array()), 'widget');
        echo "
                        <label for=\"date\">Venue Working To</label>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "workingTo", array()), 'widget');
        echo "
                    </div>


                </div>
                <div class=\"col-lg-3\" style=\"text-align: center\">
                    ";
        // line 29
        if (array_key_exists("venue", $context)) {
            // line 30
            echo "                        ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "media", array()), "medium", array("class" => "img-thumbnail"));
            // line 31
            echo "                    ";
        }
        echo "</div>

                <div class=\"col-lg-12\">
                    <div class=\"form-group\">
                        <label for=\"date\">Website</label>
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "website", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"date\">Venue Description</label>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget');
        echo "
                    </div>
                    <div class='form-group'>
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'row');
        echo "

                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "tags", array()));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
                </div>
            </form>
        </div>
    ";
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
        return array (  147 => 63,  143 => 62,  137 => 59,  132 => 56,  126 => 55,  117 => 49,  113 => 47,  110 => 46,  106 => 45,  101 => 43,  95 => 40,  88 => 36,  79 => 31,  76 => 30,  74 => 29,  65 => 23,  60 => 21,  53 => 17,  45 => 12,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
