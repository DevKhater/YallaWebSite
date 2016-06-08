<?php

/* YallaWebsiteBackendBundle:Event:new.html.twig */
class __TwigTemplate_039a70d72421d635008925c7fd629fd0616a09e872e3db2ca41a232cd99abebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("YallaWebsiteBackendBundle:Event:base_event.html.twig", "YallaWebsiteBackendBundle:Event:new.html.twig", 1);
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
        $__internal_75487f444bd980bd4e05cc9ac5d0243579be3baccc502d7e304f318d5ff89b1a = $this->env->getExtension("native_profiler");
        $__internal_75487f444bd980bd4e05cc9ac5d0243579be3baccc502d7e304f318d5ff89b1a->enter($__internal_75487f444bd980bd4e05cc9ac5d0243579be3baccc502d7e304f318d5ff89b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75487f444bd980bd4e05cc9ac5d0243579be3baccc502d7e304f318d5ff89b1a->leave($__internal_75487f444bd980bd4e05cc9ac5d0243579be3baccc502d7e304f318d5ff89b1a_prof);

    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
        $__internal_9855c3fc8fb8fe641f4020bb79b7d06d715c9728bb35cfb8631e2f1b22bf6088 = $this->env->getExtension("native_profiler");
        $__internal_9855c3fc8fb8fe641f4020bb79b7d06d715c9728bb35cfb8631e2f1b22bf6088->enter($__internal_9855c3fc8fb8fe641f4020bb79b7d06d715c9728bb35cfb8631e2f1b22bf6088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controlleraction"));

        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Create Event
        </div>

        <div class=\"panel-body\">
            <form enctype=\"multipart/form-data\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("backend_event_new");
        echo "\" method=\"POST\">      
                ";
        // line 11
        echo "                <div class=\"form-group\">
                    <label for=\"title\">Event Name</label>
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                </div>

                <div class=\"form-group col-md-4\">
                    <label for=\"date\">Event Start Date</label>
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
                </div>

                <div class=\"form-group col-md-4\">
                    <label for=\"date\">Event End Date</label>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
                </div>


                <div class=\"form-group col-md-4\">
                    <label for=\"venue\">Venue Details</label><br/>
                    <label for=\"isvenue\">Check if it's a stored Venue</label> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isVenue", array()), 'widget');
        echo "<br/>
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
                    <label for=\"venuelist\">Venues List</label><br/>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "venue", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group col-md-12\">
                    <label for=\"tags\">Add Tags Separated by Comma </label>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group col-md-12\">
                    <label for=\"date\">Event Description</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                </div>
                
                <div class=\"form-group col-md-12\">
                    <label for=\"date\">Similar Artist</label>
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "similarArtist", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group col-md-12\">
                    <label for=\"media\">Cover Image</label>
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "media", array()), 'widget');
        echo "
                    <p class=\"help-block\">Only Images.</p>
                </div>
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                <div class=\"col-md-12\"><input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/></div>
            </form>
        </div>
    ";
        
        $__internal_9855c3fc8fb8fe641f4020bb79b7d06d715c9728bb35cfb8631e2f1b22bf6088->leave($__internal_9855c3fc8fb8fe641f4020bb79b7d06d715c9728bb35cfb8631e2f1b22bf6088_prof);

    }

    // line 60
    public function block_datepicker($context, array $blocks = array())
    {
        $__internal_d46d9e462de5ad218b868d34e34f2e5c2c3f09c6e97105442b24b2b8f0947dc3 = $this->env->getExtension("native_profiler");
        $__internal_d46d9e462de5ad218b868d34e34f2e5c2c3f09c6e97105442b24b2b8f0947dc3->enter($__internal_d46d9e462de5ad218b868d34e34f2e5c2c3f09c6e97105442b24b2b8f0947dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datepicker"));

        // line 61
        echo "        ";
        $this->displayParentBlock("datepicker", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            \$(function () {
                \$('*[name=\"event_create[startDate]\"]').appendDtpicker({\"inline\": true, \"autodateOnStart\": false});
                \$('*[name=\"event_create[endDate]\"]').appendDtpicker({\"inline\": true, \"autodateOnStart\": false});
                \$('#event_create_isVenue').click(disable_cb);
            });

            function disable_cb() {
                if (this.checked) {
                    \$('#event_create_location').css(\"display\", 'none');
                    \$('#event_create_location input').val('');
                } else {
                    \$('#event_create_location').css(\"display\", 'block');
                    \$('#event_create_location input').val('');
                }
            }

        </script>
    ";
        
        $__internal_d46d9e462de5ad218b868d34e34f2e5c2c3f09c6e97105442b24b2b8f0947dc3->leave($__internal_d46d9e462de5ad218b868d34e34f2e5c2c3f09c6e97105442b24b2b8f0947dc3_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  142 => 60,  130 => 53,  126 => 52,  120 => 49,  113 => 45,  105 => 40,  98 => 36,  91 => 32,  86 => 30,  82 => 29,  73 => 23,  65 => 18,  57 => 13,  53 => 11,  49 => 9,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "YallaWebsiteBackendBundle:Event:base_event.html.twig" %}*/
/* {% block controlleraction  %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             Create Event*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <form enctype="multipart/form-data" action="{{ path('backend_event_new')}}" method="POST">      */
/*                 {#  {{ form_widget(form)}}#}*/
/*                 <div class="form-group">*/
/*                     <label for="title">Event Name</label>*/
/*                     {{ form_widget(form.title)}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group col-md-4">*/
/*                     <label for="date">Event Start Date</label>*/
/*                     {{ form_widget(form.startDate)}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group col-md-4">*/
/*                     <label for="date">Event End Date</label>*/
/*                     {{ form_widget(form.endDate)}}*/
/*                 </div>*/
/* */
/* */
/*                 <div class="form-group col-md-4">*/
/*                     <label for="venue">Venue Details</label><br/>*/
/*                     <label for="isvenue">Check if it's a stored Venue</label> {{ form_widget(form.isVenue) }}<br/>*/
/*                     {{ form_widget(form.location)}}*/
/*                     <label for="venuelist">Venues List</label><br/>*/
/*                     {{ form_widget(form.venue)}}*/
/*                 </div>*/
/*                 <div class="form-group col-md-12">*/
/*                     <label for="tags">Add Tags Separated by Comma </label>*/
/*                     {{ form_widget(form.tags)}}*/
/*                 </div>*/
/*                 <div class="form-group col-md-12">*/
/*                     <label for="date">Event Description</label>*/
/*                     {{ form_widget(form.content)}}*/
/*                 </div>*/
/*                 */
/*                 <div class="form-group col-md-12">*/
/*                     <label for="date">Similar Artist</label>*/
/*                     {{ form_widget(form.similarArtist)}}*/
/*                 </div>*/
/*                 <div class="form-group col-md-12">*/
/*                     <label for="media">Cover Image</label>*/
/*                     {{ form_widget(form.media)}}*/
/*                     <p class="help-block">Only Images.</p>*/
/*                 </div>*/
/*                 {{ form_errors(form) }}*/
/*                 {{ form_row(form._token) }}*/
/*                 <div class="col-md-12"><input type="submit" class="btn btn-default" value="Save"/></div>*/
/*             </form>*/
/*         </div>*/
/*     {% endblock %}*/
/* */
/* */
/*     {% block datepicker %}*/
/*         {{ parent() }}*/
/*         <script type="text/javascript">*/
/*             $(function () {*/
/*                 $('*[name="event_create[startDate]"]').appendDtpicker({"inline": true, "autodateOnStart": false});*/
/*                 $('*[name="event_create[endDate]"]').appendDtpicker({"inline": true, "autodateOnStart": false});*/
/*                 $('#event_create_isVenue').click(disable_cb);*/
/*             });*/
/* */
/*             function disable_cb() {*/
/*                 if (this.checked) {*/
/*                     $('#event_create_location').css("display", 'none');*/
/*                     $('#event_create_location input').val('');*/
/*                 } else {*/
/*                     $('#event_create_location').css("display", 'block');*/
/*                     $('#event_create_location input').val('');*/
/*                 }*/
/*             }*/
/* */
/*         </script>*/
/*     {% endblock %}*/
/* */
