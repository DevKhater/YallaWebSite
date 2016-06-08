<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_gallery_js.html.twig */
class __TwigTemplate_c150d0a105ff2bd83682c769479a0652035eee689797e53f72d4e9ca5a4bcd30 extends Twig_Template
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
        $__internal_339775927717d2988dfa6260a45116399f7ce2c6bd2c273518a16c8dbf293370 = $this->env->getExtension("native_profiler");
        $__internal_339775927717d2988dfa6260a45116399f7ce2c6bd2c273518a16c8dbf293370->enter($__internal_339775927717d2988dfa6260a45116399f7ce2c6bd2c273518a16c8dbf293370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/js:homepage_gallery_js.html.twig"));

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
        
        $__internal_339775927717d2988dfa6260a45116399f7ce2c6bd2c273518a16c8dbf293370->leave($__internal_339775927717d2988dfa6260a45116399f7ce2c6bd2c273518a16c8dbf293370_prof);

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
