<?php

/* YallaWebsiteBackendBundle:Homepage/js:homepage_slider_js.html.twig */
class __TwigTemplate_e902e077e2fb736a772ea6f55d5f98024b478473055b7b9effe10692d34d654d extends Twig_Template
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
        $__internal_0b1e90a0236805236a1075fca1c987e1297bd00a4999f294d93255d737d388f9 = $this->env->getExtension("native_profiler");
        $__internal_0b1e90a0236805236a1075fca1c987e1297bd00a4999f294d93255d737d388f9->enter($__internal_0b1e90a0236805236a1075fca1c987e1297bd00a4999f294d93255d737d388f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YallaWebsiteBackendBundle:Homepage/js:homepage_slider_js.html.twig"));

        // line 1
        $context["arr"] = array(0 => "Event", 1 => "Article", 2 => "Venue", 3 => "Gallery");
        // line 2
        echo "<script>
    \$(function () {
        \$('#ajaxResultMessages').modal({show: false});
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "            \$('a#";
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "').click(function (e) {
                e.preventDefault();
                var Value = \$('#dd_";
            // line 8
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "').val();
                var Position = \$('#dd_p_";
            // line 9
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "').val();
                var Type = '";
            // line 10
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "';
                console.log(Value, Position, Type);
                updateSlider(Value, Position, Type);
            });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            \$('p#get_slider_view').click(function () {
                \$.ajax({
                    type: \"POST\",
                    url: Routing.generate('backend_ajax_update_slider_view'),
                    success: function (data) {
                        \$('#ajaxDiv').css('display', 'block');
                        \$('#ajaxDiv').html(data);
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
        });
</script>";
        
        $__internal_0b1e90a0236805236a1075fca1c987e1297bd00a4999f294d93255d737d388f9->leave($__internal_0b1e90a0236805236a1075fca1c987e1297bd00a4999f294d93255d737d388f9_prof);

    }

    public function getTemplateName()
    {
        return "YallaWebsiteBackendBundle:Homepage/js:homepage_slider_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  47 => 10,  43 => 9,  39 => 8,  33 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% set  arr = ['Event', 'Article', 'Venue', 'Gallery'] %}*/
/* <script>*/
/*     $(function () {*/
/*         $('#ajaxResultMessages').modal({show: false});*/
/*     {% for entity in arr %}*/
/*             $('a#{{entity}}').click(function (e) {*/
/*                 e.preventDefault();*/
/*                 var Value = $('#dd_{{entity}}').val();*/
/*                 var Position = $('#dd_p_{{entity}}').val();*/
/*                 var Type = '{{entity}}';*/
/*                 console.log(Value, Position, Type);*/
/*                 updateSlider(Value, Position, Type);*/
/*             });*/
/*     {% endfor %}*/
/*             $('p#get_slider_view').click(function () {*/
/*                 $.ajax({*/
/*                     type: "POST",*/
/*                     url: Routing.generate('backend_ajax_update_slider_view'),*/
/*                     success: function (data) {*/
/*                         $('#ajaxDiv').css('display', 'block');*/
/*                         $('#ajaxDiv').html(data);*/
/*                     },*/
/*                     error: function (xhr, textStatus, errorThrown) {*/
/*                         console.log(xhr.responseText);*/
/*                         console.log(textStatus);*/
/*                         console.log(errorThrown);*/
/*                         $('h4#ajaxTitle').text('Error');*/
/*                         $('#ajaxMessage p').text(errorThrown);*/
/*                         $('#ajaxResultMessages').modal('show');*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/* </script>*/
