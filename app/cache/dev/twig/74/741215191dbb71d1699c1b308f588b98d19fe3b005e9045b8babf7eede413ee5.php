<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_gallery_js.html.twig */
class __TwigTemplate_b15540437e966d0647995beec817bf4be5da85ee64f15ea4aa0df0b73f0f4958 extends Twig_Template
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
        $__internal_5baf11203bdefe554752c4bec05175989a40024e174e990a9504dc9d1a2ac382 = $this->env->getExtension("native_profiler");
        $__internal_5baf11203bdefe554752c4bec05175989a40024e174e990a9504dc9d1a2ac382->enter($__internal_5baf11203bdefe554752c4bec05175989a40024e174e990a9504dc9d1a2ac382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/js:homepage_gallery_js.html.twig"));

        // line 1
        echo "<script>
    \$('#featured_gallery').click(function (e) {
        e.preventDefault();
        var Gallery = \$('#dd_feature_gallery').val();
        \$.ajax({
            type: \"POST\",
            url: Routing.generate('backend_ajax_update_featured_gallery', {id: Gallery}),
            success: function (data) {
                \$('h4#ajaxTitle').text('Success');
                \$('#ajaxMessage p').text('Article Updated');
                \$('#ajaxResultMessages').modal('show');
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
                console.log(textStatus);
                console.log(errorThrown);
                   \$('h4#ajaxTitle').text('Error');
                   \$('#ajaxMessage p').text(errorThrown);
                   \$('#ajaxResultMessages').modal('show');
            }
        });
    });
</script>";
        
        $__internal_5baf11203bdefe554752c4bec05175989a40024e174e990a9504dc9d1a2ac382->leave($__internal_5baf11203bdefe554752c4bec05175989a40024e174e990a9504dc9d1a2ac382_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/js:homepage_gallery_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <script>*/
/*     $('#featured_gallery').click(function (e) {*/
/*         e.preventDefault();*/
/*         var Gallery = $('#dd_feature_gallery').val();*/
/*         $.ajax({*/
/*             type: "POST",*/
/*             url: Routing.generate('backend_ajax_update_featured_gallery', {id: Gallery}),*/
/*             success: function (data) {*/
/*                 $('h4#ajaxTitle').text('Success');*/
/*                 $('#ajaxMessage p').text('Article Updated');*/
/*                 $('#ajaxResultMessages').modal('show');*/
/*             },*/
/*             error: function (xhr, textStatus, errorThrown) {*/
/*                 console.log(xhr.responseText);*/
/*                 console.log(textStatus);*/
/*                 console.log(errorThrown);*/
/*                    $('h4#ajaxTitle').text('Error');*/
/*                    $('#ajaxMessage p').text(errorThrown);*/
/*                    $('#ajaxResultMessages').modal('show');*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
