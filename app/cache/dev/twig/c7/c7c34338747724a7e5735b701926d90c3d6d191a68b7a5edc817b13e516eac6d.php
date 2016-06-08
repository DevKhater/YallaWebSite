<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_week_events_js.html.twig */
class __TwigTemplate_e4b87415c0eee4941b39e8822eeee3c763e6b202cfa367a42a2a840f50131b5b extends Twig_Template
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
        $__internal_ac117d27e1a6909ad1e9c9e1fc61aedb31cc840ccddf57191b1b19ee3f0dc5d8 = $this->env->getExtension("native_profiler");
        $__internal_ac117d27e1a6909ad1e9c9e1fc61aedb31cc840ccddf57191b1b19ee3f0dc5d8->enter($__internal_ac117d27e1a6909ad1e9c9e1fc61aedb31cc840ccddf57191b1b19ee3f0dc5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/js:homepage_week_events_js.html.twig"));

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
        
        $__internal_ac117d27e1a6909ad1e9c9e1fc61aedb31cc840ccddf57191b1b19ee3f0dc5d8->leave($__internal_ac117d27e1a6909ad1e9c9e1fc61aedb31cc840ccddf57191b1b19ee3f0dc5d8_prof);

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
