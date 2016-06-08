<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_one_article_js.html.twig */
class __TwigTemplate_afd0a65428d7681185d910d556c97c4c3754fb6a452dbf28ab0e5cc363088a03 extends Twig_Template
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
        $__internal_20d2ccbd4092bb42ebb7c0b4ec957e1b368da33c4ac7ccea0f7d9423535982ee = $this->env->getExtension("native_profiler");
        $__internal_20d2ccbd4092bb42ebb7c0b4ec957e1b368da33c4ac7ccea0f7d9423535982ee->enter($__internal_20d2ccbd4092bb42ebb7c0b4ec957e1b368da33c4ac7ccea0f7d9423535982ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/js:homepage_one_article_js.html.twig"));

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
        
        $__internal_20d2ccbd4092bb42ebb7c0b4ec957e1b368da33c4ac7ccea0f7d9423535982ee->leave($__internal_20d2ccbd4092bb42ebb7c0b4ec957e1b368da33c4ac7ccea0f7d9423535982ee_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/js:homepage_one_article_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
