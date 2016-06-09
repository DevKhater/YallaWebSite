<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_week_events_js.html.twig */
class __TwigTemplate_ef7c06090aaa671837217293b84f0c6e2b0f7a457beddc74ba84168fb749a397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13574c8c27bbd70983fb81db84cef8f764fd732735a27c3d05875b5669db15e4 = $this->env->getExtension("native_profiler");
        $__internal_13574c8c27bbd70983fb81db84cef8f764fd732735a27c3d05875b5669db15e4->enter($__internal_13574c8c27bbd70983fb81db84cef8f764fd732735a27c3d05875b5669db15e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/js:homepage_week_events_js.html.twig"));

        // line 1
        echo "<script>
    \$('#dd_days').change(function () {
        var day = \$('#dd_days').val();
        if (day != null)
        {
            \$.ajax({
                type: \"POST\",
                url: Routing.generate('backend_ajax_get_events_for_day', {id: day}),
                success: function (data) {
                    \$('#eventsAjax').html(data);
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                    console.log(textStatus);
                    console.log(errorThrown);
                    \$('#eventsAjax').text('   No Events FOund In This Day');
                }
            });
        }
    });
</script>";
        
        $__internal_13574c8c27bbd70983fb81db84cef8f764fd732735a27c3d05875b5669db15e4->leave($__internal_13574c8c27bbd70983fb81db84cef8f764fd732735a27c3d05875b5669db15e4_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/js:homepage_week_events_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <script>*/
/*     $('#dd_days').change(function () {*/
/*         var day = $('#dd_days').val();*/
/*         if (day != null)*/
/*         {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: Routing.generate('backend_ajax_get_events_for_day', {id: day}),*/
/*                 success: function (data) {*/
/*                     $('#eventsAjax').html(data);*/
/*                 },*/
/*                 error: function (xhr, textStatus, errorThrown) {*/
/*                     console.log(xhr.responseText);*/
/*                     console.log(textStatus);*/
/*                     console.log(errorThrown);*/
/*                     $('#eventsAjax').text('   No Events FOund In This Day');*/
/*                 }*/
/*             });*/
/*         }*/
/*     });*/
/* </script>*/
