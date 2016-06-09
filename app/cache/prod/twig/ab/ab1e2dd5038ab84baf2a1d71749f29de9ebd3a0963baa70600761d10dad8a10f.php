<?php

/* YallaWebsiteBackendBundle:Event:edit.html.twig */
class __TwigTemplate_c73fb6f6f74668d6bb9396f69488ac2280652fe2b66c3ef1f9daeecc022603fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Event:base_event.html.twig", "YallaWebsiteBackendBundle:Event:edit.html.twig", 1);
        $this->blocks = array(
            'controlleraction' => array($this, 'block_controlleraction'),
            'datepicker' => array($this, 'block_datepicker'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YallaWebsiteBackendBundle:Event:base_event.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_controlleraction($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Event
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_event_edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">      
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label for=\"title\">Event Name</label>
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Event Start Date</label>
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "startDate", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Event End Date</label>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endDate", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\" style=\"text-align: center\">
                    ";
        // line 27
        if (array_key_exists("event", $context)) {
            // line 28
            echo "                        ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "media", array()), "medium", array("class" => "img-thumbnail"));
            // line 29
            echo "                    ";
        }
        echo "</div>

                <div class=\"col-lg-12\">
                    <div class=\"form-group col-md-12\">
                        <label for=\"date\">Venue Details</label><br/>
                        <label for=\"date\">A stored Venue?</label> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isVenue", array()), 'widget');
        echo " <br/>
                        <div id='show_hide_location' style=\"display:";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isVenue", array()), "vars", array()), "checked", array()) == true)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array()), 'widget');
        echo "
                        </div>
                        <label for=\"venue\">Venues List</label><br/>
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "venue", array()), 'widget');
        echo "
                    </div>
                    <div class='form-group'>
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"date\">Event Description</label>
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Similar Artist</label>
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "similarArtist", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
                </div>

            </form>
        </div>

    ";
    }

    // line 68
    public function block_datepicker($context, array $blocks = array())
    {
        // line 69
        echo "        ";
        $this->displayParentBlock("datepicker", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            \$(function () {
                \$('*[name=\"event_edit[startDate]\"]').appendDtpicker({\"inline\": true, \"autodateOnStart\": false});
                \$('*[name=\"event_edit[endDate]\"]').appendDtpicker({\"inline\": true, \"autodateOnStart\": false});
                \$('#event_edit_isVenue').click(disable_cb);

            });

            function disable_cb() {
                if (this.checked) {
                    \$('#show_hide_location').css(\"display\", 'none');
                    \$('#show_hide_location input').val('');
                } else {
                    \$('#show_hide_location').css(\"display\", 'block');
                    \$('#show_hide_location input').val('');
                }
            }

        </script>
    ";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 69,  151 => 68,  139 => 59,  135 => 58,  129 => 55,  122 => 51,  114 => 46,  107 => 42,  101 => 39,  95 => 36,  87 => 35,  83 => 34,  74 => 29,  71 => 28,  69 => 27,  62 => 23,  54 => 18,  46 => 13,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Event:base_event.html.twig" %}*/
/* */
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Edit Event*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_event_edit',  {'id': event.id})}}" method="POST">      */
/*                 <div class="col-lg-6">*/
/*                     <div class="form-group">*/
/*                         <label for="title">Event Name</label>*/
/*                         {{ form_widget(form.title)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Event Start Date</label>*/
/*                         {{ form_widget(form.startDate)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Event End Date</label>*/
/*                         {{ form_widget(form.endDate)}}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-lg-6" style="text-align: center">*/
/*                     {% if event is defined %}*/
/*                         {% thumbnail  event.media, 'medium'  with {'class': 'img-thumbnail'} %}*/
/*                     {% endif %}</div>*/
/* */
/*                 <div class="col-lg-12">*/
/*                     <div class="form-group col-md-12">*/
/*                         <label for="date">Venue Details</label><br/>*/
/*                         <label for="date">A stored Venue?</label> {{ form_widget(form.isVenue)}} <br/>*/
/*                         <div id='show_hide_location' style="display:{% if (form.isVenue.vars.checked == true  )%}none{% else %}block{% endif %};">*/
/*                             {{ form_widget(form.location)}}*/
/*                         </div>*/
/*                         <label for="venue">Venues List</label><br/>*/
/*                         {{ form_widget(form.venue)}}*/
/*                     </div>*/
/*                     <div class='form-group'>*/
/*                         {{ form_row(form.tags) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="date">Event Description</label>*/
/*                         {{ form_widget(form.content)}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="date">Similar Artist</label>*/
/*                         {{ form_widget(form.similarArtist)}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="media">Cover Image</label>*/
/*                         {{ form_widget(form.media)}}*/
/*                         <p class="help-block">Only Images.</p>*/
/*                     </div>*/
/*                     {{ form_errors(form) }}*/
/*                     {{ form_row(form._token) }}*/
/*                     <input type="submit" class="btn btn-default" value="Save"/>*/
/*                 </div>*/
/* */
/*             </form>*/
/*         </div>*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block datepicker %}*/
/*         {{parent()}}*/
/*         <script type="text/javascript">*/
/*             $(function () {*/
/*                 $('*[name="event_edit[startDate]"]').appendDtpicker({"inline": true, "autodateOnStart": false});*/
/*                 $('*[name="event_edit[endDate]"]').appendDtpicker({"inline": true, "autodateOnStart": false});*/
/*                 $('#event_edit_isVenue').click(disable_cb);*/
/* */
/*             });*/
/* */
/*             function disable_cb() {*/
/*                 if (this.checked) {*/
/*                     $('#show_hide_location').css("display", 'none');*/
/*                     $('#show_hide_location input').val('');*/
/*                 } else {*/
/*                     $('#show_hide_location').css("display", 'block');*/
/*                     $('#show_hide_location input').val('');*/
/*                 }*/
/*             }*/
/* */
/*         </script>*/
/*     {% endblock %}*/
/* */
