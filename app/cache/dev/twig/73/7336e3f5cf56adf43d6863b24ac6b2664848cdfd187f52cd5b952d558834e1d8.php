<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_video_js.html.twig */
class __TwigTemplate_6f09a23160413cc25b4ccc7968c6681b8eb511ed8fd0678ace11138f1237064f extends Twig_Template
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
        $__internal_acf81919a357106f3d7b9c0bb0a4a90bdfeff7e375fb52297647fc05905efea7 = $this->env->getExtension("native_profiler");
        $__internal_acf81919a357106f3d7b9c0bb0a4a90bdfeff7e375fb52297647fc05905efea7->enter($__internal_acf81919a357106f3d7b9c0bb0a4a90bdfeff7e375fb52297647fc05905efea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/js:homepage_video_js.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : $this->getContext($context, "homepage")), "videoLink", array()), "html", null, true);
        echo "\");
</script>";
        
        $__internal_acf81919a357106f3d7b9c0bb0a4a90bdfeff7e375fb52297647fc05905efea7->leave($__internal_acf81919a357106f3d7b9c0bb0a4a90bdfeff7e375fb52297647fc05905efea7_prof);

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
        return array (  65 => 42,  22 => 1,);
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
