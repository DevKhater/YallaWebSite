<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_gallery_js.html.twig */
class __TwigTemplate_a282db350f9c400ccac41bf7a9fc8cb112712c711a2674a61b0e9c4460b97b73 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/js:homepage_gallery_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
