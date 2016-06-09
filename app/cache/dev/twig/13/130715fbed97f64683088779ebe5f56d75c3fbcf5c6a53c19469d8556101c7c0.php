<?php

/* YallaWebsiteBackendBundle:Event:edit.html.twig */
class __TwigTemplate_e009f25631ad7366abd1b62791a34abcb5a15c03738d66aa879fed4f11179935 extends Twig_Template
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
        $__internal_fb224e113314f48d2ecf2c4a8f824ee140fcdf045a0be245625f47759b908173 = $this->env->getExtension("native_profiler");
        $__internal_fb224e113314f48d2ecf2c4a8f824ee140fcdf045a0be245625f47759b908173->enter($__internal_fb224e113314f48d2ecf2c4a8f824ee140fcdf045a0be245625f47759b908173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Event:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb224e113314f48d2ecf2c4a8f824ee140fcdf045a0be245625f47759b908173->leave($__internal_fb224e113314f48d2ecf2c4a8f824ee140fcdf045a0be245625f47759b908173_prof);

    }

    // line 3
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_c818d3e30d46e98395039482ce314f7fbe24b43db0757d56a4a67954ac33e652 = $this->env->getExtension("native_profiler");
        $__internal_c818d3e30d46e98395039482ce314f7fbe24b43db0757d56a4a67954ac33e652->enter($__internal_c818d3e30d46e98395039482ce314f7fbe24b43db0757d56a4a67954ac33e652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Edit Event
        </div>
        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_event_edit", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">      
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label for=\"title\">Event Name</label>
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Event Start Date</label>
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Event End Date</label>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\" style=\"text-align: center\">
                    ";
        // line 27
        if (array_key_exists("event", $context)) {
            // line 28
            echo "                        ";
            echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "media", array()), "medium", array("class" => "img-thumbnail"));
            // line 29
            echo "                    ";
        }
        echo "</div>

                <div class=\"col-lg-12\">
                    <div class=\"form-group col-md-12\">
                        <label for=\"date\">Venue Details</label><br/>
                        <label for=\"date\">A stored Venue?</label> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVenue", array()), 'widget');
        echo " <br/>
                        <div id='show_hide_location' style=\"display:";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVenue", array()), "vars", array()), "checked", array()) == true)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
                        </div>
                        <label for=\"venue\">Venues List</label><br/>
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "venue", array()), 'widget');
        echo "
                    </div>
                    <div class='form-group'>
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"date\">Event Description</label>
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"date\">Similar Artist</label>
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "similarArtist", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"media\">Cover Image</label>
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                        <p class=\"help-block\">Only Images.</p>
                    </div>
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/>
                </div>

            </form>
        </div>

    ";
        
        $__internal_c818d3e30d46e98395039482ce314f7fbe24b43db0757d56a4a67954ac33e652->leave($__internal_c818d3e30d46e98395039482ce314f7fbe24b43db0757d56a4a67954ac33e652_prof);

    }

    // line 68
    public function block_datepicker($context, array $blocks = array())
    {
        $__internal_7ea9f6a049343ee29bac91ff4b25cc98653aeac208f7ef9d137330cd900f8f05 = $this->env->getExtension("native_profiler");
        $__internal_7ea9f6a049343ee29bac91ff4b25cc98653aeac208f7ef9d137330cd900f8f05->enter($__internal_7ea9f6a049343ee29bac91ff4b25cc98653aeac208f7ef9d137330cd900f8f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datepicker"));

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
        
        $__internal_7ea9f6a049343ee29bac91ff4b25cc98653aeac208f7ef9d137330cd900f8f05->leave($__internal_7ea9f6a049343ee29bac91ff4b25cc98653aeac208f7ef9d137330cd900f8f05_prof);

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
        return array (  169 => 69,  163 => 68,  148 => 59,  144 => 58,  138 => 55,  131 => 51,  123 => 46,  116 => 42,  110 => 39,  104 => 36,  96 => 35,  92 => 34,  83 => 29,  80 => 28,  78 => 27,  71 => 23,  63 => 18,  55 => 13,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
