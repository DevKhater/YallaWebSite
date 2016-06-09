<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_week_events_js.html.twig */
class __TwigTemplate_5adcd963d0b1132e37a80dc2f2c664dcc0807cc221cc4cbd76f0ffe42feb2934 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/js:homepage_week_events_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
