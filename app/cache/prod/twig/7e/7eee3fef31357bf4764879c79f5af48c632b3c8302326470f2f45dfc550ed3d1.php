<?php

/* YallaWebsiteBackendBundle:Event:new.html.twig */
class __TwigTemplate_49b0ae6420a56e9994c6a4ae893cc126a2e740a7b79dd961d2d2e6d904ec7801 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_controlleraction($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "
                </div>

                <div class=\"form-group col-md-4\">
                    <label for=\"date\">Event Start Date</label>
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "startDate", array()), 'widget');
        echo "
                </div>

                <div class=\"form-group col-md-4\">
                    <label for=\"date\">Event End Date</label>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endDate", array()), 'widget');
        echo "
                </div>


                <div class=\"form-group col-md-4\">
                    <label for=\"venue\">Venue Details</label><br/>
                    <label for=\"isvenue\">Check if it's a stored Venue</label> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isVenue", array()), 'widget');
        echo "<br/>
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array()), 'widget');
        echo "
                    <label for=\"venuelist\">Venues List</label><br/>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "venue", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group col-md-12\">
                    <label for=\"tags\">Add Tags Separated by Comma </label>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group col-md-12\">
                    <label for=\"date\">Event Description</label>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget');
        echo "
                </div>
                
                <div class=\"form-group col-md-12\">
                    <label for=\"date\">Similar Artist</label>
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "similarArtist", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group col-md-12\">
                    <label for=\"media\">Cover Image</label>
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "media", array()), 'widget');
        echo "
                    <p class=\"help-block\">Only Images.</p>
                </div>
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
                <div class=\"col-md-12\"><input type=\"submit\" class=\"btn btn-default\" value=\"Save\"/></div>
            </form>
        </div>
    ";
    }

    // line 60
    public function block_datepicker($context, array $blocks = array())
    {
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
        return array (  133 => 61,  130 => 60,  121 => 53,  117 => 52,  111 => 49,  104 => 45,  96 => 40,  89 => 36,  82 => 32,  77 => 30,  73 => 29,  64 => 23,  56 => 18,  48 => 13,  44 => 11,  40 => 9,  32 => 3,  29 => 2,  11 => 1,);
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
