<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_one_article_js.html.twig */
class __TwigTemplate_3c4e06cee1d1f0bd6bf50cb7345da60366e7724519174639a8b21694fa2a5ebf extends Twig_Template
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
    \$('#one_article').click(function (e) {
        e.preventDefault();
        var Article = \$('#dd_one_article').val();
        \$.ajax({
            type: \"POST\",
            url: Routing.generate('backend_ajax_update_featured_article', {id: Article}),
            success: function (data) {
                \$('h4#ajaxTitle').text('Succcess');
                \$('#ajaxMessage p').text('Article Updated');
                \$('#ajaxResultMessages').modal('show');
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
                console.log(textStatus);
                console.log(errorThrown);
                \$('h4#ajaxTitle').text('Error');
                \$('#ajaxMessage p').text('Error Contact Your Administrator.');
                \$('#ajaxResultMessages').modal('show');
            }
        });
    });

    var artLimit = 4;
    \$('input.single-checkbox').on('change', function (evt) {
        if (\$(this).siblings(':checked').length >= artLimit) {
            this.checked = false;
        }
    });


    \$('#four_articles').click(function (e) {
        e.preventDefault();
        var art4message;
        \$('#multiple_select_articles :checked').each(function () {
            \$.ajax({
                type: \"POST\",
                url: Routing.generate('backend_ajax_update_four_articles', {id: \$(this).val()}),
                success: function (data) {
                    console.log(data);
                    \$('h4#ajaxTitle').text('Success');
                    \$('#ajaxMessage p').text('Article Added to Homepage.');
                    \$('#ajaxResultMessages').modal('show');
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                    console.log(textStatus);
                    console.log(errorThrown);
                    \$('h4#ajaxTitle').text('Error');
                    \$('#ajaxMessage p').text('Error Contact Your Administrator.');
                    \$('#ajaxResultMessages').modal('show');
                }
            });
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/js:homepage_one_article_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script>*/
/*     $('#one_article').click(function (e) {*/
/*         e.preventDefault();*/
/*         var Article = $('#dd_one_article').val();*/
/*         $.ajax({*/
/*             type: "POST",*/
/*             url: Routing.generate('backend_ajax_update_featured_article', {id: Article}),*/
/*             success: function (data) {*/
/*                 $('h4#ajaxTitle').text('Succcess');*/
/*                 $('#ajaxMessage p').text('Article Updated');*/
/*                 $('#ajaxResultMessages').modal('show');*/
/*             },*/
/*             error: function (xhr, textStatus, errorThrown) {*/
/*                 console.log(xhr.responseText);*/
/*                 console.log(textStatus);*/
/*                 console.log(errorThrown);*/
/*                 $('h4#ajaxTitle').text('Error');*/
/*                 $('#ajaxMessage p').text('Error Contact Your Administrator.');*/
/*                 $('#ajaxResultMessages').modal('show');*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     var artLimit = 4;*/
/*     $('input.single-checkbox').on('change', function (evt) {*/
/*         if ($(this).siblings(':checked').length >= artLimit) {*/
/*             this.checked = false;*/
/*         }*/
/*     });*/
/* */
/* */
/*     $('#four_articles').click(function (e) {*/
/*         e.preventDefault();*/
/*         var art4message;*/
/*         $('#multiple_select_articles :checked').each(function () {*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: Routing.generate('backend_ajax_update_four_articles', {id: $(this).val()}),*/
/*                 success: function (data) {*/
/*                     console.log(data);*/
/*                     $('h4#ajaxTitle').text('Success');*/
/*                     $('#ajaxMessage p').text('Article Added to Homepage.');*/
/*                     $('#ajaxResultMessages').modal('show');*/
/*                 },*/
/*                 error: function (xhr, textStatus, errorThrown) {*/
/*                     console.log(xhr.responseText);*/
/*                     console.log(textStatus);*/
/*                     console.log(errorThrown);*/
/*                     $('h4#ajaxTitle').text('Error');*/
/*                     $('#ajaxMessage p').text('Error Contact Your Administrator.');*/
/*                     $('#ajaxResultMessages').modal('show');*/
/*                 }*/
/*             });*/
/*         });*/
/*     });*/
/* </script>*/
