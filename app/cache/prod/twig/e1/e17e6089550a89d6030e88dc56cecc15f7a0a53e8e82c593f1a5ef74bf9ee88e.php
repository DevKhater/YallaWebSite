<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_video_js.html.twig */
class __TwigTemplate_22fa4f102c1312528d5154cd650d3e15388ab8d2028d1e0f6c381cf786a316cc extends Twig_Template
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
    \$('#video_update_button').click(function (e) {
        e.preventDefault();
        var v = \$(\"input[name='videoLink']\").val();
        if (ytVidId(v))
        {
            var id = getYtvId(v);
            \$.ajax({
                type: \"POST\",
                url: Routing.generate('backend_ajax_update_video_link', {id: id}),
                success: function (data) {
                    \$('#ajaxMessage p').css('color', 'black');
                    \$('#ajaxMessage p').css('text-align', 'center');
                    \$('h4#ajaxTitle').text('Success');
                    \$('#ajaxMessage p').text('Video Link Updated');
                    \$('#ajaxResultMessages').modal('show');

                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText);
                    console.log(textStatus);
                    console.log(errorThrown);
                    \$('h4#ajaxTitle').text('Error');
                    \$('#ajaxMessage p').text('Opps, Something Wrong Happens... contact the administrator.');
                    \$('#ajaxResultMessages').modal('show');
                }
            });
        } else {
            \$('h4#ajaxTitle').text('Error');
            \$('#ajaxMessage p').text('Enter A Valid Youtube URL');
            \$('#ajaxResultMessages').modal('show');
        }
    });
    
    function getYtvId(input) {
        return input.match(/(?:youtu\\.be\\/|youtube\\.com(?:\\/embed\\/|\\/v\\/|\\/watch\\?v=|\\/user\\/\\S+|\\/ytscreeningroom\\?v=|\\/sandalsResorts#\\w\\/\\w\\/.*\\/))([^\\/&]{10,12})/)[1];
    }
    function ytVidId(url) {
        var p = /^(?:https?:\\/\\/)?(?:www\\.)?(?:youtu\\.be\\/|youtube\\.com\\/(?:embed\\/|v\\/|watch\\?v=|watch\\?.+&v=))((\\w|-){11})(?:\\S+)?\$/;
        return (url.match(p)) ? RegExp.\$1 : false;
    }
    \$(\"input[name='videoLink']\").val(\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "videoLink", array()), "html", null, true);
        echo "\");
</script>";
    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/js:homepage_video_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 42,  19 => 1,);
    }
}
/* <script>*/
/*     $('#video_update_button').click(function (e) {*/
/*         e.preventDefault();*/
/*         var v = $("input[name='videoLink']").val();*/
/*         if (ytVidId(v))*/
/*         {*/
/*             var id = getYtvId(v);*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: Routing.generate('backend_ajax_update_video_link', {id: id}),*/
/*                 success: function (data) {*/
/*                     $('#ajaxMessage p').css('color', 'black');*/
/*                     $('#ajaxMessage p').css('text-align', 'center');*/
/*                     $('h4#ajaxTitle').text('Success');*/
/*                     $('#ajaxMessage p').text('Video Link Updated');*/
/*                     $('#ajaxResultMessages').modal('show');*/
/* */
/*                 },*/
/*                 error: function (xhr, textStatus, errorThrown) {*/
/*                     console.log(xhr.responseText);*/
/*                     console.log(textStatus);*/
/*                     console.log(errorThrown);*/
/*                     $('h4#ajaxTitle').text('Error');*/
/*                     $('#ajaxMessage p').text('Opps, Something Wrong Happens... contact the administrator.');*/
/*                     $('#ajaxResultMessages').modal('show');*/
/*                 }*/
/*             });*/
/*         } else {*/
/*             $('h4#ajaxTitle').text('Error');*/
/*             $('#ajaxMessage p').text('Enter A Valid Youtube URL');*/
/*             $('#ajaxResultMessages').modal('show');*/
/*         }*/
/*     });*/
/*     */
/*     function getYtvId(input) {*/
/*         return input.match(/(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/user\/\S+|\/ytscreeningroom\?v=|\/sandalsResorts#\w\/\w\/.*\/))([^\/&]{10,12})/)[1];*/
/*     }*/
/*     function ytVidId(url) {*/
/*         var p = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;*/
/*         return (url.match(p)) ? RegExp.$1 : false;*/
/*     }*/
/*     $("input[name='videoLink']").val("{{homepage.videoLink}}");*/
/* </script>*/
